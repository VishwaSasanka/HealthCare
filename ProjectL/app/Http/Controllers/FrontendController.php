<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     /*public function ajax(Request $request){
    	return response()->json(['success'=>'This was saved',]);
    }
*/

    public function loginpage(){
    	return view('blade-scafolding.login')->with('messege');
    }
    public function Registrationpage(){
        $p=DB::table('patients')->get();
        $np1=count($p)+1;
        $id="Pat".$np1;
    	return view('blade-scafolding.register')->with('id',$id)->with('msg',"");
    }
    public function channelDetails(){
    	return view('blade-scafolding.channelDet');
    }
    public function afterLoginPatientPage(){
    	return view('blade-scafolding.patientpage');
    }
    public function patientRecordPage(){
        return view('blade-scafolding.patientRecord');
    }
    

    /*  Doctor Page*/
    public function afterLoginDoctoPage(){
        return view('blade-scafolding.doctorPage');
    }
    public function addPrescriptionPage($t){
        $c=DB::table('doctors')->where('Doctor_ID',$t)->first();
        $p=DB::table('prescriptions')->get();
        return view('blade-scafolding.addPrescription')->with('c',$c)->with('msg',"")->with('pres',$p);
    }
    /* End Doctor Page*/
    

    /*  receptionist Page*/
    public function receptPage(){
        return view('blade-scafolding.receptionistPage')->with('msg',"");
    }
    /*End receptionist Page*/
     

    /*  Pharmacy Page*/
    public function pharmasistPage(){
        return view('blade-scafolding.pharmasist');
    }
    /* End Pharmacy Page*/
   
}
