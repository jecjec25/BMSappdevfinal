<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ResidentModel;

class ResidentController extends ResourceController
{
    public function residents()
    {
        $main = new ResidentModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
}