<?php

namespace App\Controllers\admin;

use App\Controllers\BaseController;

class Order extends BaseController
{
    public function index()
    {
        $data = $this->data;
        $data['active_page'] = 'orders';
        $data['page_title']  = 'Orders';
        return view('admin/view_orders', $data);
    }
}
