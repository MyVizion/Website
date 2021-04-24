<?php

namespace App\models;

use CodeIgniter\Model;

class UserModel extends Model{
    
    protected $DBGroup = 'default'; 
    
    protected $table = 'profiles';

    protected $primaryKey = 'userName';

    protected $return = 'array';

    protected $allowedFields = ['userName','location','uni','studyProgram'];
}