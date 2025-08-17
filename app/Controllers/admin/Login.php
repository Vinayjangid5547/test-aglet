<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;
use App\Models\admin\Login_model;

class Login extends BaseController
{
    var $Login_model;
    function __construct()
    {
        $this->Login_model = new Login_model();
    }
    public function index()
    {
        $data = $this->data;
        $data['active_page']     = 'login';
        $data['page_title']      = 'Admin Login';
        return view('admin/login/view_login', $data);
    }

    public function login()
    {
        $post               = $this->request->getPost();
        $password           = $post['password'];
        $post               = clean_text($post);
        $json = [
            'status'    => false,
            'msg_class' => 'alert-danger',
            'message'   => 'Red marked fields are required.'
        ];
        $formStatus         = true;
        if ($post['name'] == '' || $password == '') {
            $formStatus = false;
        }

        if ($formStatus) {
            $user_detail = $this->Login_model->get_user_detail($post['name']);
            if (!empty($user_detail)) {
                if (password_verify($password, $user_detail->hash_password)) {
                    $json['status'] = true;
                    $json['msg_class']  = 'alert-success';
                    $json['message'] = 'Username or Password is incorrect.';
                    $json['redirect_url'] = 'admin/dashboard';
                } else {
                    $json['message'] = 'Username or Password is incorrect.';
                }
            } else {
                $json['message'] = 'User Not found';
            }
        }

        echo json_encode($json);
    }
}
