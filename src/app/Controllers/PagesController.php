<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Controller;

/* This controller handles the main pages */

class PagesController extends BaseController
{       
        public function index($page = 'homepage')
        {
            $model = new ProjectModel();

            $data = [
                'projects' => $model->getProjects(),
            ];
            
            // If page does not exist
            if ( ! is_file(APPPATH.'/Views/site/'.$page.'.php')){
                // Throw 404 error
                throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
            }
            // else return view
            return view('site/'.$page, $data);
        }
}
 