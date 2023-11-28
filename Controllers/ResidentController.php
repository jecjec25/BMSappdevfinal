<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ResidentModel;

class ResidentController extends BaseController
{
    use ResponseTrait;

    public function residents()
    {
        $model = new ResidentModel();
        $data = $model->findAll();
        if(!$data) return $this->failNotFound('No Data Found');
        return $this->respond($data);
    }

        /**
     * Return the properties of a resource object
     *
     * 
     */
    public function show($id = null)
    {
        $model = new Model();
        $data = $model->find(['id' => $id]);
        if(!$data) return $this->failNotFound('No Data Found');
        return $this->respond($data[0]);
    }
 
    /**
     * Create a new resource object, from "posted" parameters
     *
     * 
     */
    public function create()
    {
        $json = $this->request->getJSON();
        $data = [
            'kind_of_id' => $json->kind_of_id,
            'idNo' => $json->idNo,
            'citizenship' => $json->citizenship,
            'picture' => $json->picture,
            'firstname' => $json->firstname,
            'middlename' => $json->middlename,
            'lastname' => $json->lastname,
            'alias' => $json->alias,
            'birthplace' => $json->birthplace,
            'birthdate' => $json->birthdate,
            'age' => $json->age,
            'civilstatus' => $json->civilstatus,
            'gender' => $json->gender,
            'sitio' => $json->sitio,
            'phone' => $json->phone,
            'email' => $json->email,
            'occupation' => $json->occupation,
            'address' => $json->address,
            'is_4ps' => $json->is_4ps,
            'is_pwd' => $json->is_pwd,
            'is_senior' => $json->is_senior
        ];
        $model = new ResidentModel();
        $resident = $model->insert($data);
        if(!$resident) return $this->fail('Failed Saved', 400);
        return $this->respondCreated($resident);
    }
 
    /**
     * Add or update a model resource, from "posted" properties
     *
     * 
     */
    public function update($id = null)
    {
        $json = $this->request->getJSON();
        $data = [
            'kind_of_id' => $json->kind_of_id,
            'idNo' => $json->idNo,
            'citizenship' => $json->citizenship,
            'picture' => $json->picture,
            'firstname' => $json->firstname,
            'middlename' => $json->middlename,
            'lastname' => $json->lastname,
            'alias' => $json->alias,
            'birthplace' => $json->birthplace,
            'birthdate' => $json->birthdate,
            'age' => $json->age,
            'civilstatus' => $json->civilstatus,
            'gender' => $json->gender,
            'sitio' => $json->sitio,
            'phone' => $json->phone,
            'email' => $json->email,
            'occupation' => $json->occupation,
            'address' => $json->address,
            'is_4ps' => $json->is_4ps,
            'is_pwd' => $json->is_pwd,
            'is_senior' => $json->is_senior
        ];
        $model = new ResidentModel();
        $findById = $model->find(['id' => $id]);
        if(!$findById) return $this->fail('No Data Found', 404);
        $resident = $model->update($id, $data);
        if(!$resident) return $this->fail('Update failed', 400);
        return $this->respond($resident);
    }
 
    /**
     * Delete the designated resource object from the model
     *
     * 
     */
    public function delete($id = null)
    {
        $model = new ResidentModel();
        $findById = $model->find(['id' => $id]);
        if(!$findById) return $this->fail('No Data Found', 404);
        $resident = $model->delete($id);
        if(!$resident) return $this->fail('Failed Deleted', 400);
        return $this->respondDeleted('Deleted Successful');
    }

}
