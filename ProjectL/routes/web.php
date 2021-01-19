<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AppointController;


Route::get('/', function () {
  $c=DB::table('periods')->get();
    return view('blade-scafolding.home')->with('c',$c);
});
/*Route::post('/ajax',[FrontendController::class,'ajax']);*/

Route::get('/login',[FrontendController::class,'loginpage']);
Route::get('/regi',[FrontendController::class,'Registrationpage']);
Route::get('/regi_Book', function () {
	$p=DB::table('patients')->get();
    $np1=count($p)+1;
    $id="Pat".$np1;
    return view('blade-scafolding.registreAfterBook')->with('id',$id)->with('msg',"")->with('messege',"");
});
Route::get('/channel',[FrontendController::class,'channelDetails']);
Route::get('/book/{id}/{patid}', 'Pat@book')->name('book');
Route::get('booking/{c}/', 'FrontendController@booking')->name('booking');

Route::get('patpage/{c}/', 'FrontendController@afterLoginPatientPage')->name('patpage');
Route::get('docpage/{c}/', 'FrontendController@afterLoginDoctoPage')->name('docpage');


Route::get('patRecord/{c}/', 'FrontendController@patientRecordPage')->name('patRecord');

Route::post('/log','login@log');
Route::get('addPrscptn/{c}/', 'FrontendController@addPrescriptionPage')->name('addPrscptn');
Route::post('/savepres', 'doccontroller@prescript');
Route::post('/register', 'Pat@register');
Route::post('/hmreg', 'Pat@hmreg');
Route::post('/appointment',[AppointController::class,'store']);
Route::post('/docsearch', 'Pat@docsearch');
 
  /*  Doctor Page*/
Route::get('/docpage',[FrontendController::class,'afterLoginDoctoPage']);

/* End Doctor Page*/

  /*  receptionist Page*/
Route::get('/recPage',[FrontendController::class,'receptPage']); 
Route::get('/appDet', function () {
    return view('blade-scafolding.receptionist.appointmentDetail');
});
Route::get('/ttable', function () {
    return view('blade-scafolding.receptionist.timeTable');
});
  /*End receptionist Page*/

/*  Pharmacy Page*/
Route::get('/pharmPage',[FrontendController::class,'pharmasistPage']);
/* End Pharmacy Page*/
Route::get('/timeT',function(){
      return view('blade-scafolding.table');
    });
