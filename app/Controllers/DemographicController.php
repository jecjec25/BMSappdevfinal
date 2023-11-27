<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DemographicModel;
class DemographicController extends ResourceController
{

    
    public function demographics()
    {
        $main = new DemographicModel();
        $data = $main->findAll();
        return $this->respond($data, 200);
    }
    
//      public function create()
//     {
//         return view('dashboard/include/create');
//     }
//     public function barangay_store()
//     {
//         $json = $this->request->getJson();
//         $demographicdata = new DemographicModel();
//         $data = [
//             'number' => $json->number,
//             'barangay' => $json->barangay,
//             'landarea' => $json->landarea,
//             'popu2015' => $json->popu2015,
//             'popuden2020' => $json->popuden2020,
//             'popu2020' => $json->popu2020,
//             'projpopu2023' => $json->projpopu2023,
//             'household2020' => $json->household2020,
//             'household2023' => $json->household2023,
//             'growthrate' => $json->growthrate, 
//         ];
//         $demographicdata->save($data);
//         return redirect()->to('/demographics');
//     } 
}
