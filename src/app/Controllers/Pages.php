<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use CodeIgniter\Controller;

class Pages extends BaseController
{       
        public function index($page = 'homepage', $slug = false)
        {
            $model = new ProjectModel();

            $data = [
                'projects' => $model->getProjects($slug),
            ];
    
            if ( ! is_file(APPPATH.'/Views/site/'.$page.'.php')){
                // Whoops, we don't have a page for that!
                throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
            }
    
            return view('site/'.$page, $data);
        }
}
 