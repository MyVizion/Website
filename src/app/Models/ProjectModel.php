<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';

    protected $allowedFields = ['title', 'slug', 'info', 'image', 'creator'];

    public function getProjects($slug = false)
    {
        if ($slug === false)
        {
            return $this->findAll();
        }

        return $this->asArray()
                ->where(['slug' => $slug])
                ->first();
    }
}