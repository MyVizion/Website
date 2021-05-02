<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends BaseController
{
	public function index($page ='homepage')
	{
        if ( ! is_file(APPPATH.'/Views/site/'.$page.'.php')){
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        echo view('site/header');
        echo view('site/'.$page);
        #echo view('template/footer');
	}
}

