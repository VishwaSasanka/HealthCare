@extends('blade-scafolding.layout.content')

@section('content')
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/chaDetail.jpg');
  }
</style>
<div id="channel" class="form" >
        <div class="container">
        
            <div id="cha-row" class="row justify-content-center align-items-center">
                <div id="cha-column">
                    <div id="cha-box" class="col-md-12">
                        <form id="cha-form" class="form" action="" method="post">

                            <h3 class="text-center text-info">Channel Details</h3>

                            <div class="">
                                <label for="username" class="text-info">Doctor:</label>
                                <a class="" href=""></a>
                            </div>
                            <div class="">
                                <label for="username" class="text-info">Specialization:</label>
                                <a class="" href=""></a>
                            </div>
                            <div class="">
                                <label for="username" class="text-info">Time:</label>
                                <a class="" href=""></a>
                            </div>
                            <div class="">
                                <label for="username" class="text-info">App Date:</label>
                                <a class="" href=""></a>
                            </div>
                            <div class="">
                                <label for="username" class="text-info">App No:</label>
                                <a class="" href=""></a>
                            </div>
                            <div class="">
                                <label for="username" class="text-info">Patient:</label>
                                <a class="" href=""></a>
                            </div>
                            <div class="">
                                <label for="username" class="text-info">NIC:</label>
                                <a class="" href=""></a>
                            </div>
                            <div class="">
                                <label for="username" class="text-info">Phone Number:</label>
                                <a class="" href=""></a>
                            </div>
                            	
                            <div id="note">
                            	* Your Appointment is done.
                            </div>
                            
                        </form>
                            <div class="right" style="color: blue; margin-bottom: 10px;">
                                <a href="/patpage"><h3 style="color: blue;"><span class="glyphicon glyphicon-eye-open"></span> View Profile</h3></a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    
</div>

@endsection