<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = $this->data;
        $data['active_page'] = 'dashboard';
        $data['page_title']  = 'Dashboard';
        return view('admin/view_dashboard', $data);
    }
}
