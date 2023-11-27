<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RegisterModel;    
class LoginController extends BaseController
{
    // public function index()
    // {
    //     echo view('user/login');
    // }
    public function index()
        {
            helper(['form']);
            echo view('user/login');
        } 
      
        public function loginAuth()
        {
            $session = session();
            $userModel = new RegisterModel();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            
            $data = $userModel->where('email', $email)->first();
            
            if($data){
                $pass = $data['password'];
                $authenticatePassword = password_verify($password, $pass);
                if($authenticatePassword){
                    $ses_data = [
                        'id' => $data['id'],
                        'lastname' => $data['lastname'],
                        'firstname' => $data['firstname'],
                        'email' => $data['email'],
                        'username' => $data['username'],
                        'isLoggedIn' => TRUE
                    ];                   
                    $session->set($ses_data);
                    
                     return redirect()->to('/dash');
                }
                else{
                    $session->setFlashdata('msg', 'Password is incorrect.');
                    return redirect()->to('/login');
                }
            }
            else{
                $session->setFlashdata('msg', 'Email does not exist.');
                return redirect()->to('/login');
            }
        }

}
