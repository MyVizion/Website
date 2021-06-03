<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    //Database Table Name
    protected $table = 'projects';

    //Allowed Database Fields
    protected $allowedFields = ['title', 'slug', 'info', 'image', 
                                'location', 'time', 'needs', 'category'];

    public function getProjects($id = false)
    {
        if ($id === false)
        {
            return $this->findAll();
        }
 
        return $this->find($id);
    }
}