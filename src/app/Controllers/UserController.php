<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

        // Validate data in input fields
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];
            
            // Set error if data doesn't match
            $errors = [
                'password' => [
                    'validateUser' => 'No account found with this password and email!'
                ]
            ];

            // If data is nto validated
            if (! $this->validate($rules, $errors)) {
                $data['validation'] = $this->validator; // throw error
            }else{
                $model = new UserModel();

                $user = $model->model('email', $this->request->getVar('email'))
                              ->first();

                $this-setUserMethod($user); // call setUserMethod function

                $session = session();
                return redirect()->to('/'); // moet later op profilepage
            }
        }
        return view('site/loginpage',  $data); // view the login page
    }

    private function setUserMethod($user){
        $data = [
            'id' => $user['id'],
            'firstname' => $user['firstname'],
            'lastname' => $user['lastname'],
            'email' => $user['email'],
            'isLoggedIn' => true,
        ];

        session()->set($data); // set session
        return true;
    }

    // Registrate User
    public function register()
    {
        $data = [];
        helper(['form']);

        // Validate data in input fields
        if ($this->request->getMethod() == 'post'){
            $rules = [
                'firstname' => 'required|min_length[3]',
                'lastname' => 'required|min_length[3]',
                'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]|max_length[255]',
                'password_confirm' => 'matches[password]',
            ];
    
            // if the data is not validated
            if (! $this->validate($rules)) {
                $data['validation'] = $this->validator; // throw error 
            }else{ // else save data
                $model = new UserModel();

                $newData = [
                    'firstname' => $this->request->getVar('firstname'),
                    'lastname' => $this->request->getVar('lastname'),
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                ];
                $model->save($newData);
                $session = session();
                $session->setFlashdata('success', 'Successfully Registered!');
                return redirect()->to('/'); // moet later op profilepage
            }
        }
            return view('site/registerpage'); // view the register page
    }
}