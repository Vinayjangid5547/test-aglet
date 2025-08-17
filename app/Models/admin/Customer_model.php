<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class Customer_model extends Model
{
    function get_customer_list($user_type){
        $builder = $this->db->table('agl_users');
        $builder->select('user_type, fname, lname, email, status, add_date, update_date');
        $builder->where('user_type', $user_type);
        $builder->orderBy('id', 'DESC');
        $query = $builder->get();
        return $query->getResult();
    }

    function insert_customer($data){
        $builder = $this->db->table('agl_users');
        $builder->insert($data);
        return $this->db->insertID();
    }
}