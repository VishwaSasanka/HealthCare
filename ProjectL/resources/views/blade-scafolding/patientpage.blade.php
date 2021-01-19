
@extends('blade-scafolding.layout.content')

@section('content')
<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/pat3.png');
    background-attachment: fixed;
    background-size: cover;
  }
  @media(max-width: 670px){
        table{
            background-color: white;
        }
    }
    @media(min-width: 995px){
      #photo{
       position: absolute;
        margin-left: 35%;
      }
    }
    @media(max-width: 995px) and (min-width: 669px){
      #photo{
       position: relative;
       margin-left: 50%;
      }
    }
    @media(max-width: 669px){
      #photo{
       position: relative;
       margin-left: 30%;
      }
    }
</style>

<div id="patbutton" class="right" style="margin-right: 12%; background-color: transparent;">
    <div id="patbt">
    <a href="{{route('patRecord',$det->Pat_id)}}"><button class="btn">My Records</button></a>
    <button class="btn" data-toggle="modal" data-target="#exampleModalCenter1">My Details</button>
    <a href="/login"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>
    </div>
</div>
<div id="home" class="form">
        <div class="container">
            <div id="home-row" class="row justify-content-center align-items-center">
                <div id="home-column" class="col-md-6">

                  <div id="photo" style=" margin-top: 100px;">
                    <h2>Profile Photo</h2>
                    <img class="img" src="<?php echo url('/'); ?>/images/profile-photo/patphoto.png" height="120" width="130" alt="avatar" style=" cursor: pointer;">
                    <input type="file" name="image" accept="image/*" id="file" style="display: none;">
                    <p>
                        <label for="file" style="cursor: pointer;" >Upload Image</label>
                    </p>
                    <img id="output" width="200">
                 </div>

                    <div id="home-box" class="col-md-12">
                    <form id="home-form" class="form" method="post" style="margin-top: 10px;" action="/docsearch">
                        {{csrf_field()}}

                            <div class="form-group">
                                <label for="" class="text-info">Specialization:</label><br>
                                <input type="text" name = "specialization" id="ingname" class="form-control" list="ingredients">
                    <datalist id="ingredients">
                    <option value="">
                         <option value="physian">
                         <option value="orthopisian">
                         <option value="surgereon">
                         
                    </datalist>

                              
                            </div>
                            
                            <div class="form-group">
                                <label for="date" class="date-info">Date:</label><br>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                            <div id="home-button">
                                <!-- <input type="submit" class="button" name=""> -->
                                <button class="btn btn-left" type="submit" >SEARCH</button>
                            </div>
                            
                        </form>

                           
                            <table class="table table-bordered" style="color: black;">
                                <thead>
                                    <tr>
                                        <th width="60%">Doctor name</th>
                                        <th width="20%">Date</th>
                                        <th width="20%">Time</th>
                                    </tr>
                                 
                                                  @if($p=session()->get('p'))
                                             <?php $period=$p; ?>
                                             @else
                                             <?php $period=$c; ?>
                                             @endif
                                             <tbody>
                                                  @if(count($period) > 0)
                                                  <?php $no = 0; ?>
                                                  @foreach($period as $pe)
                                               


                                    <tr>
                                        <td>{{$pe->Doctor_Name}}</td>
                                        <td>{{$pe->Date}}</td>
                                        <td>{{$pe->Time_Period}}</td>
                                        <td><a href="{{route('book',['id'=>$pe->Period_ID,'patid'=>$det->Pat_id])}}"class="book"><button class="btn print" >book </button></a></td>
                                    </tr>
                                   
                                                  @endforeach
                                                  @else
                                                  <tr>
                                                       <td colspan="7"><h3 style=" color:black;text-align: center;">No Time Periods Available</h3></td>
                                                  </tr>
                                                  @endif


                                </thead>
                            </table>

                    </div>
                </div>
            </div>
            <br>  <br>  <br>  <br>  <br>    
            <div class="text-center">
              <h1 style="color: white;">Your Reservations</h1>
              <table class="table" style="color: black;">
                  <thead>
                    <tr>
                      <th>Date</th>
                      <th>Doctor Name</th>
                      <th>Time</th>
                      <th>Appointment No</th>
                      <th>Action</th>
                    </tr>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a class="book"><button class="btn print">Delete </button></a></td>
                      </tr>
                    </tbody>
                  </thead>
            </table>
            </div>
            <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                    <label for="username" class="text-info">Name:{{$det->Pat_name}}</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">Address:{{$det->Pat_address}}</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">User ID:{{$det->Pat_id}}</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="nic" class="text-info">NIC no:{{$det->Pat_Nic}}</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="phone">Telephone number:{{$det->Pat_MobileNo}}</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="gender" class="text-info">Gender:{{$det->Pat_Gender}}</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="birthday" class="date-info">Date of Birth:{{$det->Pat_DateOfBirth}}</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="form_email">E-mail:{{$det->Pat_Email}}</label>
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
    
</div>

@endsection 

<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 
