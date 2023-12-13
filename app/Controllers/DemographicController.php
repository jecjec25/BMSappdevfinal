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
    // public function demographics(){
    //     $main = new DemographicModel();
    //     $demog = $main->select('demographicdata.demographic_id, demographicdata.number, tbl_barangay.barangay_name, demographicdata.landarea, 
    //     demographicdata.popu2015, demographicdata.popuden2020, demographicdata.popu2020, demographicdata.projpopu2023,
    //     demographicdata.household2020, demographicdata.household2023, demographicdata.growthrate')
    //     ->join('tbl_barangay','tbl_barangay.barangay_id = demographicdata.barangay_id')->findAll();

    //     return $this->respond($demog, 200);
    // }

    public function SaveData()
    {
        try {
            //code...
       $json = $this->request->getJSON();

       $data = [
            'number' => $json->number,
            'barangay_name' => $json->barangay_name,
            'landarea' => $json->landarea,
            'popu2015' => $json->popu2015,
            'popuden2020' => $json->popuden2020,
            'popu2020' => $json->popu2020,
            'projpopu2023' => $json->projpopu2023,
            'household2020' => $json->household2020,
            'household2023'=> $json->household2023,
            'growthrate' => $json->growthrate,
       ];
        $demog = new DemographicModel();
       $saved = $demog->save($data);
        if ($saved) {
            return $this->respond(['message' => 'Data saved successfully'], 200);
        } else {
            return $this->respond(['message' => 'Data not saved'], 500);
        }
        
    } catch (\Throwable $e) {
        return $this->respond(['message' => 'Error: ' . $e->getMessage()],);
    }
    } 
 
}
