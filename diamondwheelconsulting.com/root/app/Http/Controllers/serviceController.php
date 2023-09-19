<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
    //
    public function medservices()
    {
        return view('user.medservice');
    }

    public function busiad()
    {
        return view('user.busiservice');
    }
    public function aud(){
        return view('user.audit');
    }
    public function cophealth(){
        return view('user.coporhealth');
    }
    public function copmed(){
        return view('user.copmedicals');
    }
    public function medbil(){
        return view('user.medicalbills');
    }
    public function medreferrals(){
        return view('user.memf');
    }
    public function wellness(){
        return view('user.emwellpol');
    }
    public function hfacility(){
        return view('user.hfacility');
    }
    public function underconst(){
        return view('medservice.underC');
    }
    public function analysis(){
        return view('user.analysis');
    }
    public function actservice(){
        return view('user.actuarial');
    }
    public function advisory(){
        return view('user.busiadv');
    }
}
