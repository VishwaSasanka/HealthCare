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

    <div class="serch-bar" class="text-left" style="margin-left: 17%; position: absolute; width: 250px;">
        <div id="custom-search-input" class="table-responsive">
            <div class="input-group col-md-12">
                <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </span>
                <input type="text" class="form-control input-lg" placeholder="Patient-ID/NIC" />
            </div>
        </div>
    </div>

	<div id="item" style="color: black; margin-left: 20%; font-weight: bold; margin-top: 80px;">

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