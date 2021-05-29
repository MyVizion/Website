<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Controller;

class ProjectsController extends BaseController
{
    public function index()  
	{
        $model = new ProjectModel();

        $data = [
            'projects' => $model->getProjects(),
        ];

        // if project has no data
        if (empty($data['projects']))
        {
            // throw error
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Cannot find the project item: '. $id);
        }
        
        //else return view
        return view('projects/overview', $data);
	}

    //View function
    public function view($id)
    {
        $model = new ProjectModel();

        $data = [
            'projects' => $model->getProjects($id),
        ];

        return view('projects/projectpage', $data);
    }

    // Edit function
    public function edit($id){

        $model = new ProjectModel();

        $data = [
            'projects' => $model->getProjects($id),
            $model->find($id),
        ];
        
        return view('projects/create', $data);
    }
    
    // Create Function
    public function create()
    {
        return view('projects/create'); 
    }

    // Save Function
    public function save()
    {
        $model = new ProjectModel();

        $file = $this->request->getFile('image');
 
        // check if input fields meet requirements
        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[30]',
                'info'  => 'required|min_length[3]|max_length[1000]',
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

            // if so, save data 
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

            //if saved succesfully, set flashdata and redirect to root
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Project made successfully!');
            return redirect()->to('/');
        }
        else       
        {
            return view('projects/create'); 
        }
    }

    function delete($id)
    {
        $model = new ProjectModel();

        // if model find by id is true
        if($model->find($id))
        {
            // Delete record
            $model->delete($id);

            // Set flashdata
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Deleted Successfully!');
        }
        
            return redirect()->to('/');
    }
}