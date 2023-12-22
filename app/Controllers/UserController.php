<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use \Firebase\JWT\JWT;
use App\Models\UserModel;
class UserController extends ResourceController
{
    private $user;
    public function __construct()
    {
        $this->user = new UserModel();
    }
    public function hi(){
        echo'hi';
    }

    //register Authentication
    public function register()
{
    try {
        $validation = [
            'full_name' => 'required|min_length[2]',
            'position' =>  'required|min_length[3]',
            'contact' => 'required',
            'address' =>  'required|min_length[2]',
            'username' =>'required|min_length[4]',
            'email'=> 'required|min_length[4]',
            'password' => 'required|min_length[2]',
        ];

        if ($this->validate($validation)) { 

            $data = [
                'full_name' => $this->request->getVar('full_name'),
                'position' => $this->request->getVar('position'),
                'contact' => $this->request->getVar('contact'),
                'address' => $this->request->getVar('address'),
                'username' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            ];

            $register = $this->user->save($data);

            if ($register) {
                return $this->respond(['message' => 'Data saved successfully'], 200);
            } else {
                return $this->respond(['message' => 'Data not saved'], 500);
            }
        } else {
            $response = [
                'errors' => $this->validator->getErrors(),
                'message' => 'Invalid Inputs'
            ];
            return $this->respond($response);
        }
    } catch (\Throwable $th) {
        return $this->respond(["message" => "Error: " . $th->getMessage()],); 
    }
}


        public function loginAuth()
        {
            $session = session();
            $email = $this->request->getVar('email');
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $data = $this->user->where('email', $email)->first();
            $error = [
                'login' => false,
                'error' => 'invalid username or password'
            ];

            if ($data) {
                $pass = $data['password'];
                $authenticatePassword = password_verify($password, $pass);

                if ($authenticatePassword) {
         
                    return $this->respond(['login' => true]);
                } else {
                    return $this->respond($error);
                }
            } else {
                return $this->respond($error);
            }
        }
}

