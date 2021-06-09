<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);
        return view('site/loginpage',  $data);
    }

    public function register()
    {
        $data = [];
        helper(['form']);

        // Validation
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'firstname' => 'required|min_length[3]',
                'lastname' => 'required|min_length[3]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];

            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator;
            }else{
                $model = new UserModel();

                $newData = [
                    'firstname' => $this->request-getVar('firstname'),
                    'lastname' => $this->request-getVar('lastnname'),
                    'email' => $this->request-getVar('email'),
                    'password' => $this->request-getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session = session();
                $session->setFlashdata('succes', 'Successfully Registered!');
                return redirect()->to('/'); // moet later op profilepage
            }
        }

        return view('site/registerpage');
    }
}