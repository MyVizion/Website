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
            'projects' => $model->find($id),
        ];
        
        return view('projects/edit', $data);
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
                'location' => 'required',
                'time' => 'required',
                'category' => 'required',
                'needs' => 'required',
                'info'  => 'required|min_length[3]|max_length[1000]',
                'image' => 'uploaded[image]',
            ]))
        {
            // store image BLOB data
            $tempfile = $file->getTempName();
            $imgdata = file_get_contents($tempfile);

            // if so, save data 
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
                'location' => $this->request->getPost('location'),
                'time' => $this->request->getPost('time'),
                'category' => $this->request->getPost('category'),
                'needs' => $this->request->getPost('needs'),
                'info'  => $this->request->getPost('info'),
                'image' => $imgdata,
            ]);

            // if saved succesfully, set flashdata and redirect to root (homepage)
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Project made successfully!');
            return redirect()->to('/');
        }
        // if not
        else       
        {
            // keep viewing create page
            return view('projects/create'); 
        }
    }

    // Update Function
    public function update($id)
    {
        $model = new ProjectModel();

        // check if input fields meet requirements
        if ($this->request->getMethod() === 'post' && $this->validate([
                'title' => 'required|min_length[3]|max_length[30]',
                'location' => 'required',
                'time' => 'required',
                'category' => 'required',
                'needs' => 'required',
                'info'  => 'required|min_length[3]|max_length[1000]',
            ]))
        {
            
            $data = [
                $id
            ];

            // if so, save data 
            $model->save([
                'title' => $this->request->getPost('title'),
                'slug'  => url_title($this->request->getPost('title'), '-', TRUE),
                'location' => $this->request->getPost('location'),
                'time' => $this->request->getPost('time'),
                'category' => $this->request->getPost('category'),
                'needs' => $this->request->getPost('needs'),
                'info'  => $this->request->getPost('info'),
                'id' => $id,
            ]);

            // if saved succesfully, set flashdata and redirect to dedicated projectpage
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Project changed successfully!');
            return redirect()->route('project_page', [$id]);
        }
        // if not
        else       
        {
            // keep viewing edit page
            return view('projects/edit'); 
        }
    }

    // Delete function
    function delete($id)
    {
        $model = new ProjectModel();

        // find id
        if($model->find($id))
        {
            // Delete record
            $model->delete($id);

            // Set flashdata
            $session = \Config\Services::session();
            $session->setFlashdata('success', 'Deleted Successfully!');
        }
            //redirect to root (homepage)
            return redirect()->to('myvizion.net/');
    }
}