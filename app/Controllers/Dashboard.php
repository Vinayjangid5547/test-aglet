<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('view_dashboard');
    }

    public function sendMail()
    {
        $email = \Config\Services::email();

        // $email->setTo('vikasjangid7627@gmail.com');
        $data = [
            "name"          => 'Chanchal Kumawat',
            "reference_id"  => rand(4000, 9999),
            "date"          => date('d/m/Y'),
            "status"        => 'Order Placed',
            "cta_text"      => 'Aglet',
            "cta_url"       => base_url(),
            "item_1"        => 'Nike Air Jorden Max',
            "item_2"        => 'Nike Jorden Max Aura 4',
            "year"          => date('Y'),
        ];
        $email_temp = parseTemplate(view('view_test_email'), $data);

        // $email->setTo('vinayjaangid8800@gmail.com');
        $email->setTo('mohankumawat597@gmail.com');
        $email->setFrom('vinayjaangid8800@gmail.com', 'Vinay Jangid');
        $email->setSubject('Auto Gnerate Email test');
        $email->setMessage($email_temp);

        if ($email->send()) {
            echo "Email successfully sent!";
        } else {
            // For debugging errors
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
        echo $email_temp;
    }
}
