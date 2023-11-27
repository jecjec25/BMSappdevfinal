<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegisterModel;   
class RegisterController extends BaseController
{
    public function register()
    {
        helper(['form']);
        $data = [];
        return view('user/register', $data);
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'lastname'          => 'required|min_length[2]|max_length[50]',
            'firstname'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[user.email]',
            'username'          => 'required|min_length[2]|max_length[50]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];
          
        if($this->validate($rules)){
            $userModel = new RegisterModel();
            $data = [
                'lastname'     => $this->request->getVar('lastname'),
                'firstname'     => $this->request->getVar('firstname'),
                'email'    => $this->request->getVar('email'),
                'username'     => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('user/register', $data);
        }
          
    }

}
