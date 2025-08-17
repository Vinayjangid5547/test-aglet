<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class Login_model extends Model
{
    public function get_user_detail($user)
    {
        $builder = $this->db->table('agl_users as users');
        $builder->select('users.id, users.uuid, users.fname, users.lname, users.email, users.hash_password, users.user_type, user_type.name as user_type_name, user_type.url as type_url');
        $builder->join('agl_user_type as user_type', 'user_type.id = users.user_type', 'LEFT');
        $builder->where('users.status', 1);
        $builder->where('user_type.status', 1);
        $builder->groupStart();
        $builder->where('users.fname', $user);
        $builder->orWhere('users.email', $user);
        $builder->groupEnd();
        $query = $builder->get();
        return $query->getRow();
    }
}
