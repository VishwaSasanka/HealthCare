}

@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/receipt.jpg');
  }
  @media(max-width: 783px){
    #ct1{
        margin-left: 20%;
        left: 20%;
        margin-top: 10px;
    }
  }
</style>
<div id="index" class="container">
    <div id="patbutton" style="right: 1px;">
      <div id="recbt">
        <button id="chat" class="btn btn left">Chat</button>
        <button id="chat" class="btn btn left">Time Table</button>
        <button id="chat" type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn left">Appointment Details</button>
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
          @csrf

        <div class="container" class="text-center">
          <div id="recAddhistory" class="text-center">
                <div class="">
                    <input type="date" name="Date" required="required" placeholder="Date">
                </div>
                <div class="">
                                
                                <select id="inputState" name="Time" class="" style="width: 50%; margin-left: 2.5%; height: 35px; color: black;"
>
                                    <option selected>Time</option>
                                    <option> 8 to 10</option>
                                    <option> 10 to 12</option>
                                </select>
                            </div>
                <div class="">
                    <input type="text" name="NIC_No" required="required" placeholder="NIC No">
                </div>
                <div class="">
                    <input type="text" name="Doctor_Name" required="required" placeholder="Doctor Name">
                </div>
                <div class="">
                    <input type="text" name="Specialization" required="required" placeholder="Specialization">
                </div>
                <div class="">
                    <input type="text" name="Appointment_No" required="required" placeholder="Appointment No">
                </div>
                
              </div>
              
              
          <div style="margin-left: 28%;">
            <button type="submit"  class="btn btn-primary" style="margin-bottom: 30px;" >Add Appointment</button>
          </div>
        </div>
        
    </div>
    </form>
      <div id="totalappo" class="left" style="width: 100%; background-color: #380B61;">
        <div style="margin-top: 40px;">
        <input type="" name="" placeholder="Specialization" style="margin-left: 20%;">
        <input type="" name="" placeholder="Doctor Name" style="width: 20%;">
        <input  id="ct1" type="" name="" placeholder="Date">
        <button class="btn" style="background-color: #0080FF; color: black;">Search</button><br>
        <label style="margin-left: 20%; color: white;">Total of Appoinment: </label><a href=""></a>
      </div>
      </div>
        
        <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div id="search" class="modal-header" style=" height: 70px;">
            <div class="serch-bar" class="text-left" style="margin-left: 5%; position: absolute; width: 50%;">
                  <div id="custom-search-input" class="table-responsive" style="margin-top: 0; margin-bottom: 0;">
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="recAddhistory" class="modal-body" class="text-center">
                <ul>
                    <li>
                        <label>Date : </label><a href=""></a>
                    </li>
                    <li>
                        <label>Time : </label><a href=""></a>
                    </li>
                    <li>
                        <label>Patient ID/NIC No : </label><a href=""></a>
                    </li>
                    <li>
                        <label>Doctor Name : </label><a href=""></a>
                    </li>
                    <li>
                        <label>Specialization : </label><a href=""></a>
                    </li>
                    <li>
                        <label>Appoinment No : </label><a href=""></a>
                    </li>
                </ul>
          </div> 
          <div class="modal-footer">
            
            <button class="btn print" style="background-color: green;">Print</button>
           
          </div>
        </div>
      </div>
    </div>


    
</div>



<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if($msg=="Appointmen Added")
<script type="text/javascript">

  swal("Success!", "{{$msg}}", "success");

</script>
 @endif



@endsection
