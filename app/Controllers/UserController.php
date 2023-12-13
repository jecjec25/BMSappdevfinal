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
            'password' => 'required|min_length[2]',
        ];

        if ($this->validate($validation)) { 

            $data = [
                'full_name' => $this->request->getVar('full_name'),
                'position' => $this->request->getVar('position'),
                'contact' => $this->request->getVar('contact'),
                'address' => $this->request->getVar('address'),
                'username' => $this->request->getVar('username'),
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


    //Login Authentication
    public function loginAuth()
    {
        try {
            $session = session();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            
            $user = $this->user->where('username', $username)->first();
            $error = [
                'login' => false,
                'error' => 'Invalid username or password.'
            ];
            if(is_null($user)) {
                return $this->respond($error);
            }
            $pwd_verify = password_verify($password, $user['Password']);
            if(!$pwd_verify) {
                return $this->respond($error);
            }
            $key = getenv('JWT_SECRET');
            $iat = time(); // current timestamp value
            $exp = $iat + 3600;
            $token = JWT::encode($payload, $key, 'HS256');
    
            $response = [
                'login' => true,
                'message' => 'Login Succesful',
                'token' => $token
            ];
            
            return $this->respond($response, 200);
        } catch (\Throwable $e) {
            //throw $th;
            return $this->respond(["error" => "Error: " . $e->getMessage()],);
        }

    }
}

