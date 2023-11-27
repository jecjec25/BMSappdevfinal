<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DemographicModel;
class ViewController extends BaseController
{
    public function demography()
    {
        return view('dashboard/demographics');   
    }

    public function certiReq()
    {
        return view('dashboard/CertifiReq');   
    }

    public function residentinfo()
    {
        return view('dashboard/residentinfo');   
    }

    public function brgycertificate()
    {
        return view('dashboard/brgycertificate');   
    }

    public function announcement()
    {
        return view('dashboard/announcement');   
    }
    
    public function dashboard()
    {
        echo view ('dashboard/dashboard');
    }

    public function home()
    {
        $demographicdata = new DemographicModel();
        $data['demographicdata'] = $demographicdata->findAll();
    
        return view ('landingpage/home', $data);
    }

    public function about()
    {
        return view ('landingpage/about');
    }

    public function barangays()
    {
        $demographicdata = new DemographicModel();
        $data['demographicdata'] = $demographicdata->findAll();
    
        return view ('landingpage/barangay', $data);
    }

    
}
