<?php

namespace App\models;

use CodeIgniter\Model;

class UserModel extends Model{
    
    protected $table = 'users';
    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];
    protected $allowedFields = ['firstname','lastname','email','password', 'updated_at'];

    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function beforeUpdate(array $data){
        $data = $this->passwordHash($data);
        return $data;
    }

    protected function passwordHash(array $data){
        if(isset($data['data']['password']))
         $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }
}