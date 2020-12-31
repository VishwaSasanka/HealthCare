<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use App\Models\all_users;


class Pat extends Controller
{
    public function register(Request $request){

        //dd($request->all);
        $p=DB::table('patients')->get();
        $np=count($p)+1;
        $patient=new Patient;
        $user=new all_users;
        if($request->psw==$request->rpsw){
            $patient->Pat_id="Pat".$np;
            $patient->Pat_name=$request->name;
            $patient->Pat_MobileNo=$request->phone;
            $patient->Pat_Email=$request->email;
            $patient->Pat_password=$request->psw;
            $patient->Pat_address=$request->address;
            $patient->Pat_DateOfBirth=$request->birthday;
            $patient->Pat_Gender=$request->gender;
            $patient->Pat_Nic=$request->nic;
            $patient->save();

            $user->id="Pat".$np;
            $user->password=$request->psw;
            $user->roll="patient";
            $user->save();
            $s="Registered successfully.";
        }
        else{
            $s="Password retype is wrong.";
            return view('blade-scafolding.register')->with('msg',"Those passwords didn't match. Try again.")->with('id',"");

        }
     
        return redirect()->back()->with('msg',$s);
        
    }
}
