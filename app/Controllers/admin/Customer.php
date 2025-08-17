<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\admin\Customer_model;

class Customer extends BaseController
{
    var $Customer_model;
    function __construct()
    {
        $this->Customer_model = new Customer_model();
    }
    public function index()
    {
        $data = $this->data;
        $data['active_page']     = 'customers';
        $data['page_title']      = 'Customers';
        $data['customer_detail'] = $this->Customer_model->get_customer_list(3);
        return view('admin/customer/view_customers', $data);
    }

    public function add_customer()
    {
        $data = $this->data;
        $data['active_page'] = 'customers';
        $data['page_title']  = 'Customers';
        return view('admin/customer/view_add_customer', $data);
    }

    public function insert_customer()
    {
        $post               = $this->request->getPost();
        $password           = $post['password'];
        $confirm_pass       = $post['confirm_pass'];
        $post               = clean_text($post);
        $json['status']     = false;
        $json['msg_class']  = 'alert-danger';
        $json['message']    = 'Red marked fields are required.';
        $formStatus         = true;

        foreach ($post as $row) {
            if ($row == '') {
                $formStatus = false;
            }
        }

        $file = $this->request->getFile('profile');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            echo '<pre>'; print_r($file); die;
        }

        if ($formStatus) {
            if (isset($post['email']) && !filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
                $json['message']    = 'Please enter a valid email address.';
                $formStatus         = false;
            } elseif ($password !== $confirm_pass) {
                $json['message']    = 'Password and Confirm Password should be same.';
                $formStatus         = false;
            }
            if ($formStatus) {
                $hash_password = password_hash($password, PASSWORD_DEFAULT);

                $user_data = [
                    'uuid'          => gen_uuid(),
                    'user_type'     => 3,
                    'fname'         => $post['fname'],
                    'lname'         => $post['lname'],
                    'email'         => $post['email'],
                    'password'      => $password,
                    'hash_password' => $hash_password,
                    'add_date'      => date('Y-m-d H:i:s'),
                    'update_date'   => date('Y-m-d H:i:s'),
                ];

                $result = $this->Customer_model->insert_customer($user_data);
                if($result > 0){
                    $json['status']     = true;
                    $json['msg_class']  = 'alert-success';
                    $json['message']    = 'Customer Information has been added successfully!.';
                }else{
                    $json['message']    = 'Something went wrong!.';
                }
            }
        }

        return json_encode($json);
    }
}
