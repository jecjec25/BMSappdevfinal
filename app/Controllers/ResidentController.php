<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RestFul\ResourceController;
use App\Models\ResidentModel;
use App\Models\BarangayModel;
use App\Models\PurokModel;

class ResidentController extends ResourceController
{
    private $barangay;
    private $purok;

    public function __construct()
    {
        $this->barangay = new BarangayModel();
        $this->purok = new PurokModel();
        $this->resident = new ResidentModel();
    }
    public function residents()
    {
        $tbl_residentinfo = new ResidentModel();
        // $data = $main->findAll();
        // return $this->respond($data, 200);
        try {
            $residentInfo = $tbl_residentinfo
            ->select('tbl_residentinfo.resident_id, tbl_residentinfo.last_name, tbl_residentinfo.first_name,
            tbl_residentinfo.middle_name, tbl_residentinfo.birth_date, tbl_residentinfo.age, tbl_barangay.barangay_name, tbl_purok.purok_name, tbl_residentinfo.religion,
            tbl_residentinfo.gender, tbl_residentinfo.civil_status, 
            tbl_residentinfo.religion, tbl_residentinfo.gender, tbl_residentinfo.complete_address, 
            tbl_residentinfo.contact_no, tbl_residentinfo.with_philhealth, tbl_residentinfo.with_sss, tbl_residentinfo.income, tbl_residentinfo.member_4ps, tbl_residentinfo.voter_status')
            ->join('tbl_barangay', 'tbl_residentinfo.barangay_id = tbl_barangay.barangay_id')
            ->join('tbl_purok', 'tbl_residentinfo.purok_id = tbl_purok.purok_id')
            ->findAll();

            if($residentInfo){
                return $this->respond($residentInfo, 200);
            }else{
                return $this->respond(null,404);
            }
        } catch (\Throwable $e) {
            return $this->respond(["message" => "Error: " . $e->getMessage()],);
        }
    }
        public function residentCount(){
            $tbl_residentinfo = new ResidentModel();
            try {
                    $count = $tbl_residentinfo
                    ->select('COUNT(tbl_residentinfo.resident_id),SUM(tbl_residentinfo.voter_status ="Yes"), SUM(tbl_residentinfo.voter_status ="No"), SUM(tbl_residentinfo.gender ="Male"), SUM(tbl_residentinfo.gender ="Female")
                     ')->findAll();
                     
                return $this->respond($count, 200);
            } catch (\Throwable $e) {
                return $this->respond(["message" => "Error: " . $e->getMessage()],);
            }
        } 
    
    public function saveResident(){
        try {
            $data = [
                'last_name' => $this->request->getVar('last_name'),
                'first_name' => $this->request->getVar('first_name'),
                'middle_name' => $this->request->getVar('middle_name'),
                'birth_date' => $this->request->getVar('birth_date'),
                'age' => $this->request->getVar('age'),
                'barangay_id' => $this->request->getVar('barangay_id'),
                'purok_id' => $this->request->getVar('purok_id'),
                'civil_status' => $this->request->getVar('civil_status'),
                'religion' => $this->request->getVar('religion'),
                'gender' => $this->request->getVar('gender'),
                'complete_address' => $this->request->getVar('complete_address'),
                'contact_no' => $this->request->getVar('contact_no'),
                'with_philhealth' => $this->request->getVar('with_philhealth'),
                'with_sss' => $this->request->getVar('with_sss'),
                'income' => $this->request->getVar('income'),
                'member_4ps' => $this->request->getVar('member_4ps'),
                'voter_status' => $this->request->getVar('voter_status'),
            ];           
            $saved = $this->resident->save($data);
            if ($saved) {
                return $this->respond(['message' => 'Data saved successfully'], 200);
            } else {
                return $this->respond(['message' => 'Data not saved'], 500);
            }
    
        } catch (\Throwable $e) {
            return $this->respond(['message' => 'Error: ' . $e->getMessage()],);   
        }
    }

    public function getResidentInfo()
    {
        $purok = new \App\Models\PurokModel();
        $data = $purok->findAll();
        return $this->respond($data, 200);
    }
    public function getbarangay()
    {
        $data = $this->barangay->findAll();
        return $this->respond($data, 200);

    }        

}