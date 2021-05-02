<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Controller;

class Projects extends BaseController
{
    public function index()
	{
        $model = new ProjectModel();

        $data['projects'] = $model->getProjects();

        echo view('site/header');
        echo view('site/overview', $data);
        #echo view('site/footer', $data);
	}

    public function view($slug = false)
    {
        $model = new ProjectModel();

        $data['projects'] = $model->getProjects();

        if (empty($data['projects']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the project item: '. $slug);
        }

        #echo view('site/header', $data);
        #echo view('site/view', $data);
        #echo view('templates/footer', $data);
    }

    public function create()
    {
        $model = new ProjectModel();

        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'info'  => 'required',
            ]))
        {
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
                'info'  => $this->request->getPost('info'),
            ]);

            echo view('project/success');

        }
        else
        {
            echo view('site/header', ['title' => 'Create a project item']);
            echo view('site/createproject');
            #echo view('templates/footer');
        }
    }
}