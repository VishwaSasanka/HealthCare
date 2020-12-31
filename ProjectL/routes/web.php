<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AppointController;


Route::get('/', function () {
    return view('blade-scafolding.home');
});
/*Route::post('/ajax',[FrontendController::class,'ajax']);*/

Route::get('/login',[FrontendController::class,'loginpage']);
Route::get('/regi',[FrontendController::class,'Registrationpage']);
Route::get('/channel',[FrontendController::class,'channelDetails']);
Route::get('/patpage',[FrontendController::class,'afterLoginPatientPage']);
Route::get('/patRecord',[FrontendController::class,'patientRecordPage']);
Route::post('/log','login@log');
Route::get('addPrscptn/{c}/', 'FrontendController@addPrescriptionPage')->name('addPrscptn');
Route::post('/savepres', 'doccontroller@prescript');
Route::post('/register', 'Pat@register');
Route::post('/appointment',[AppointController::class,'store']);
 
  /*  Doctor Page*/
Route::get('/docpage',[FrontendController::class,'afterLoginDoctoPage']);

/* End Doctor Page*/

  /*  receptionist Page*/
Route::get('/recPage',[FrontendController::class,'receptPage']); 
  /*End receptionist Page*/

/*  Pharmacy Page*/
Route::get('/pharmPage',[FrontendController::class,'pharmasistPage']);
/* End Pharmacy Page*/

Route::get('/timeT',function(){
    	return view('blade-scafolding.table');
    });