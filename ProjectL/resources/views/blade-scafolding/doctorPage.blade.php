
@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/book.jpg');
    background-attachment: fixed;
    background-size: cover;
    z-index: -2;
    
  }
  @media(max-width: 550px){
  #docpage #patbt #login {
        font-size: 15px;
    }
  }
  @media(min-width: 550px){
  #docpage #patbt #login {
        font-size: 19px;
    }
  }
</style>
<div id="docpage" class="container">
    <div id="patbutton" style="right: 10px;">
        <div id="patbt">
        <a><button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn">My Details</button></a>
        <a href="{{route('addPrscptn',$det->Doctor_ID)}}" style="position: absolute;"><button class="btn btn right">Prescription</button></a>
        <a id="login" href="/login" style="position: absolute; margin-left: 125px;"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>
        </div>
    </div>
    <div style=" margin-top: -20px; position: absolute;">
        <h2>Profile Photo</h2>
        <img class="img" src="<?php echo url('/'); ?>/images/profile-photo/patphoto.png" height="120" width="130" alt="avatar" style=" cursor: pointer;">
        <input type="file" name="image" accept="image/*" id="file" style="display: none;">
        <p>
            <label for="file" style="cursor: pointer;" >Upload Image</label>
        </p>
        <img id="output" width="200">
     </div>
    <div class="text-center" style="padding-top: 100px; z-index: -1;"><h1>Working Period</h1></div>
        <div class="container" class="text-center">
            <div class="table-responsive" style="margin-top: 35px;">
                <table id="doctor_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="30%">Date</th>
                            <th width="30%">Time</th>
                            <th width="20%">No of Appoinments</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                 </table>
            </div>
        </div>
    </div>
        
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">My Details</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="">
                    <label for="username" class="text-info">Name:{{$det->Doctor_Name}}</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">Address:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">Specialization:{{$det->Specialization}}</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">ID:{{$det->Doctor_ID}}</label>
                    <a class="" href=""></a>
                </div>
              </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    
</div>

@endsection

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 

