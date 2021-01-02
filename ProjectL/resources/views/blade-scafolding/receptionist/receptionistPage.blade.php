
@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/receipt.jpg');
    background-attachment: fixed;
    background-size: cover;
  }
  @media(max-width: 783px){
    #ct1{
        margin-left: 20%;
        left: 20%;
        margin-top: 10px;
    }
  }
</style>
<div id="recPage" class="container">
    <div id="patbutton" style="right: 1px;">
      <div id="recbt">
        <button id="chat" class="btn btn left">Chat</button>
        <button id="chat" class="btn btn left">Time Table</button>
        <button id="chat" type="" class="btn btn left">Appointment Details</button>
        <a href="/login"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>
      </div>
    </div>
    
    <div class="text-center" style="padding-top: 80px;"><h1>Add Appointment</h1></div>

     @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

    <form method="post" action="/appointment">
          {{csrf_field()}}
        <div class="container" class="text-center">
          <div id="recAddhistory" class="text-center">
                <div class="">
                    <input type="Date" name="Date" required="required" placeholder="Date">
                </div>
                <div class="">
                    <select id="inputState" class="" name="Time" style="width: 50%; margin-left: 2.5%; height: 35px; color: black;">
                        <option selected>Time</option>
                        <option> 8.00</option>
                        <option> </option>
                    </select>
                </div>
                <div class="">
                    <input type="" name="NIC_No" required="required" placeholder="NIC No">
                </div>
                <div class="">
                    <input type="" name="Doctor_Name" required="required" placeholder="Doctor Name">
                </div>
                <div class="">
                    <input type="" name="Specialization" required="required" placeholder="Specialization">
                </div>
                <div class="">
                    <input type="" name="Appointment_No" required="required" placeholder="Appointment No">
                </div>
                
              </div>
          <div style="margin-left: 28%;">
            <button type="submit" class="btn btn-primary" style="margin-bottom: 30px;">Add Appointment</button>
          </div>
        </div>
    </div>
  </form>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if($msg=="Appointmen Added")
<script type="text/javascript">

  swal("Success!", "{{$msg}}", "success");

</script>
 @endif 
@endsection

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 

