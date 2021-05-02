<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Home extends BaseController
{
	public function index()
	{
		$model = new ProjectModel();

        $data['projects'] = $model->getProjects(false);

		echo view('site/header');
		echo view('site/test', $data);
	}
}
