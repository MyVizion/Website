<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Controller;

class Pages extends BaseController
{
	public function index($page = 'homepage', $slug = false)
	{
        $model = new ProjectModel();

        $data['projects'] = $model->getProjects($slug);
    

        if ( ! is_file(APPPATH.'/Views/site/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        echo view('site/header');
        echo view('site/'.$page, $data);
         #echo view('template/footer');	
	}

    public function CreateProject()
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