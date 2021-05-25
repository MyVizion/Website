<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Controller;

class Projects extends BaseController
{
    public function index()
	{
        $model = new ProjectModel();

        $data = [
            'projects' => $model->getProjects(),
        ];

        if (empty($data['projects']))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the project item: '. $slug);
        }
    
        echo view('projects/overview', $data);
	}

    public function view()
    {
        $model = new ProjectModel();

        $data = [
            'projects' => $model->getProjects(),
        ];

        echo view('projects/create', $data);
    }

    public function projectpage_view(){

        $model = new ProjectModel();

        $data = [
            'projects' => $model->getProjects(),
        ];
        var_dump($model->getProjects());
        
        echo view('projects/projectpage', $data);
    }

    public function create()
    {
        echo view('projects/create'); 
    }

    public function save()
    {
        $model = new ProjectModel();

        $file = $this->request->getFile('image');
 
        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'info'  => 'required',
                'creator' => 'required',
                'location' => 'required',
                'time' => 'required',
                'needs' => 'required',
                'category' => 'required',
                'image' => 'uploaded[image]',
            ]))
        {
            
            $tempfile = $file->getTempName();
            $imgdata = file_get_contents($tempfile);

            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
                'info'  => $this->request->getPost('info'),
                'creator' => $this->request->getPost('creator'),
                'location' => $this->request->getPost('location'),
                'time' => $this->request->getPost('time'),
                'needs' => $this->request->getPost('needs'),
                'category' => $this->request->getPost('category'),
                'image' => $imgdata,
            ]);

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Project made successfully!');
            return redirect()->to('/');
        }
        else       
        {
            echo view('projects/create'); 
        }
    }
}