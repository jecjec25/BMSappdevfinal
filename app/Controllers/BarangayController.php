<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use App\Models\BarangayModel;
use App\Models\OfficialModel;
class BarangayController extends ResourceController
{
    private $official;
    private $brgy;
    public function __construct()
    {
        $this->official = new OfficialModel();
        $this->brgy = new BarangayModel();
    }


    // public function barangayofficial(){

    //     $data = $this->official->findAll();

    //     return $this->respond($data, 200);
    // }

    public function barangayofficial()
    {
        try {
            //throw $th;
        
        $brgyOff = $this->official
        ->select('tbl_brgyofficial.official_id, tbl_residentinfo.last_name, tbl_residentinfo.first_name, tbl_brgyofficial.term_start,
        tbl_brgyofficial.term_end, tbl_brgyofficial.term_index, tbl_brgyofficial.set_current, tbl_brgyofficial.remarks')
        ->join('tbl_residentinfo', 'tbl_brgyofficial.resident_id = tbl_residentinfo.resident_id')
        ->findAll();
        if($brgyOff){
            return $this->respond($brgyOff, 200);
        }else{
            return $this->respond(null,404);
        }
    } catch (\Throwable $e) {
        return $this->respond(["message" => "Error: " . $e->getMessage()],);
    }


    }

    public function InsertOfficial(){
        try {
            $data = [
              'resident_id' => $this->request->getVar('resident_id'),
              'term_start' => $this->request->getVar('term_start'),
              'term_end' => $this->request->getVar('term_end'),
              'term_index' => $this->request->getVar('term_index'),
              'set_current' => $this->request->getVar('set_current'),
              'remarks' => $this->request->getVar('remarks'),

            ];

            $res = $this->official->save($data);

            if($res){
                return $this->respond(['message' => 'Data saved successfully'], 200);
        } else {
            return $this->respond(['message' => 'Data not saved'], 500);
        }
        } catch (\Throwable $e) {
            return $this->respond(['message' => 'Error: ' . $e->getMessage()],);
        }
    }
    public function InsertBrgy()
    {
        try {
            $brgy = new BarangayModel();
            
            $json = $this->request->getJSON();
    
            $brgyname = $json->barangay_name;
            $brgyremarks = $json->barangay_remarks;
    
           
        $data = [
            'barangay_name' => $brgyname,
            'barangay_remarks' => $brgyremarks
        ];

        $saved = $brgy->save($data);

        if ($saved) {
            return $this->respond(['message' => 'Data saved successfully'], 200);
        } else {
            return $this->respond(['message' => 'Data not saved'], 500);
        }
    } catch (\Throwable $e) {
        // Use a more informative error message, and make sure to include the status code.
        return $this->respond(['message' => 'Error: ' . $e->getMessage()],);
    }
}
    
}
