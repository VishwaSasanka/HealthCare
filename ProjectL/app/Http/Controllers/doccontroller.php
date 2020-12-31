<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;
use Illuminate\Support\Facades\DB;


class doccontroller extends Controller
{
    public function prescript(Request $request){

        $p=DB::table('prescriptions')->get();
        $np=count($p)+1;
        $pr=new Prescription;
        $pr->Pres_No="Pres".$np;
        $pr->Pat_id=$request->id;
        $pr->Doctor_ID=$request->docid;
        $pr->Diagnosis=$request->diagnosis;
        $pr->Description=$request->desc;
        $pr->Med_Name=$request->med;
        $pr->save();
        $s="Prescription added successfully";
      
    
        
     return redirect()->back()->with('msg',$s);
  
        
        
        
    }
}
