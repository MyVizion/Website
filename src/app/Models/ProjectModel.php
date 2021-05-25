<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';

    protected $allowedFields = ['title', 'slug', 'info', 'image', 
                                'creator', 'location', 'time', 'needs', 'category'];

    public function getProjects($id = false)
    {
        if ($id === false)
        {
            return $this->findAll();
        }

        return $this->find($id)
                    ->get();
    }
}