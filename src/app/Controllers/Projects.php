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
    
        echo view('site/header');
        echo view('site/overview', $data);
        #echo view('site/footer', $data);
	}

    public function view($slug = false)
    {
        $model = new ProjectModel();

        $data = [
            'projects' => $model->getProjects(),
        ];

        echo view('site/create', $data);
    }

    public function create()
    {
        $model = new ProjectModel();

        $file = $this->request->getFile('image');
 
        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[255]',
                'info'  => 'required',
                'creator' => 'required',
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
                'image' => $imgdata,
            ]);

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Project made successfully!');
            return redirect()->to('/');
        }
        else       
        {
            echo view('site/create'); 
        }
    }
}