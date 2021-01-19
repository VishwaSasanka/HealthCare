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
    public function afterLoginPatientPage($id){
      
        $details=DB::table('patients')->where('Pat_id',$id)->first();
        $c=DB::table('periods')->get();
        return view('blade-scafolding.patientpage')->with('det',$details)->with('messege',"")->with('c',$c);
    	
    }
    public function patientRecordPage($id){
        $details=DB::table('patients')->where('Pat_id',$id)->first();
        $rec=DB::table('prescriptions')->where('Pat_id',$id)->get();
        return view('blade-scafolding.patientRecord')->with('det',$details)->with('rec',$rec);
    }
    

    /*  Doctor Page*/
    public function afterLoginDoctoPage($id){
        $details=DB::table('doctors')->where('Doctor_ID',$id)->first();
    
        return view('blade-scafolding/doctorPage')->with('det',$details)->with('messege',"");
     
    }
    public function addPrescriptionPage($t){
        $c=DB::table('doctors')->where('Doctor_ID',$t)->first();
        $p=DB::table('prescriptions')->get();
        return view('blade-scafolding.addPrescription')->with('c',$c)->with('msg',"")->with('pres',$p);
    }
    /* End Doctor Page*/
    

    /*  receptionist Page*/
     public function receptPage(){
        return view('blade-scafolding.receptionist.receptionistPage')->with('msg',"");
    }
    /*End receptionist Page*/
     

    /*  Pharmacy Page*/
    public function pharmasistPage(){
        return view('blade-scafolding.pharmasist');
    }
    /* End Pharmacy Page*/

    /*home booking*/
    public function booking($bid){
        $p=DB::table('patients')->get();
        $np1=count($p)+1;
        $id="Pat".$np1;
       return view('blade-scafolding/registreAfterBook')->with('bid',$bid)->with('msg',"")->with('id',$id);
     
    }
   
}
