@extends('blade-scafolding.layout.content')

@section('content')
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/rep2.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  #item div{
    margin-bottom: 20px;
  }
</style>
<div class="container">
    <div class="text-center" style="color: blue; font-weight: bold; font-size: 30px;">
        Appointment Details
    </div>
	<div id="item" style="color: black; margin-left: 20%; font-weight: bold;">

        <div>
            Date:
        </div>
        <div>
            Period Time:
        </div>
        <div>
            Doctor:
        </div>
        <div>
            Patient ID:
        </div>
        <div>
            Specialization:
        </div>
        <div>
            Appoinment No:
        </div>

    </div> 
</div>

@endsection