<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class login extends Controller
{
    public function log(Request $request){

        $password=DB::table('all_users')->where('id',$request->id)->value('password');
        $roll=DB::table('all_users')->where('id',$request->id)->value('roll');
        if($password==$request->password){
            if($roll=="patient"){
               
                return redirect()->route('patpage',['c'=>$request->id]);
            }
            elseif($roll=="doctor"){
                return redirect()->route('docpage',['c'=>$request->id]);
               
            }
            elseif($roll=="pharmacist"){
                $details=DB::table('pharmacists')->where('Phar_id',$request->id)->first();
                return view('blade-scafolding.pharmasist')->with('det',$details)->with('messege',"");
            }
            elseif($roll=="Receptionist"){
                $details=DB::table('Receptionist')->where('rec_id',$request->id)->first();
                return view('blade-scafolding.receptionistPage')->with('det',$details)->with('messege',"");
            }
           
     
    }
    else{
        return view('blade-scafolding.login')->with('messege','Wrong password or username');
    }
}
}