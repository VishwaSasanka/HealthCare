@extends('blade-scafolding.layout.master')

@section('content1')

<div id="home" class="form" style="background-image:url('<?php echo url('/'); ?>/images/slider-bg1.jpg'); background-attachment: fixed; background-size: cover; height: 500px; ba">
        <div class="container">
            <div id="home-row" class="row justify-content-center align-items-center">

                <div id="home-column" class="col-md-6">
                    <div id="home-box" class="col-md-12">
                        <form id="home-form" class="form" method="post" style="margin-top: 100px;">

                            <div class="form-group">
                                <label for="" class="text-info">Specialization:</label><br>
                                <select id="inputState" class="form-control">
                                    <option selected>any</option>
                                    <option> </option>
                                    <option> </option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="date" class="date-info">Date:</label><br>
                                <input type="date" name="date" id="date" class="form-control">
                            </div>
                            
                        </form>

                            <div id="home-button">
                                <!-- <input type="submit" class="button" name=""> -->
                                <button class="btn btn-left" type="submit" data-toggle="modal" data-target="#exampleModalCenter">SEARCH</button>
                            </div>
                    </div>
                </div>

            </div>
            <!-- Modal book page -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">Choose Your Doctor</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div id="table" class="table-responsive">
                            <table id="doctor_data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="60%">Doctor name</th>
                                        <th width="20%">Time</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><a class="book"><button class="btn print" data-dismiss="modal" onclick="myFunction()">book </button></a></td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!--End model-->

            <!--Register Form-->
            <div id="myDIV" id="homeregist" class="container" class="text-center" style="display: none;">
                <div style="margin-top: 20px;">
                    <h2 style="backdrop-filter: blur(5px);">Already a member? <a onclick="login()" href="#" style="color: #0040FF;">Login</a> </h2>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="myFunction()">
                      <span aria-hidden="true">&times;</span>
                    </button>
                <hr>
                <form method="post">
                    <h2 class="text-center text-info" style="font-weight: bold;">Patient Registration</h2>
                        <div class="scrollbar scrollbar-lady-lips">
                            <div class="force-overflow">
                            <div class="form-group" id="form">
                                <label for="username" class="text-info">First Name:</label><br>
                                <input type="text" name="PatName" id="PatName" class="form-control">
                            </div>
                            <div class="form-group" id="form">
                                <label for="username" class="text-info">Last Name:</label><br>
                                <input type="text" name="PatName" id="PatName" class="form-control">
                            </div>
                            <div class="form-group" id="form">
                                <label for="nic" class="text-info">NIC no:</label><br>
                                <input type="text" name="nic" id="nic" class="form-control">
                            </div>
                            <div class="form-group" id="form">
                                <label for="address" class="control-label">Address:</label><br>
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                            
                            <div class="form-group" id="form">
                                <label for="phone">Telephone number:</label><br>
                                <input type="tel" name="phone" id="phone" class="form-control">
                            </div>
                            <div class="form-group" id="form">
                                <label for="sex" class="text-info">Gender:</label><br>
                                <select id="inputState" class="form-control" placeholder="Gender">
                                    <option selected></option>
                                    <option> Male</option>
                                    <option> Female</option>
                                </select>
                            </div>
                            <div class="form-group" id="form">
                                <label for="birthday" class="date-info">Date of Birth:</label><br>
                                <input type="date" name="birthday" id="birthday" class="form-control">
                            </div>
                            <div class="form-group" id="form">
                                <label for="form_email">E-mail:</label><br>
                                <input type="email" name="email" id="form_email" class="form-control" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group" id="form">
                                <label for="psw">Password</label>
                                <input type="password" class="form-control"name="psw" required> 
                            </div>   
                            <div class="form-group" id="form">
                                <label for="psw-repeat">Repeat Password</label>
                                <input type="password" class="form-control"name="psw-repeat" required>
                            </div>

                            <div class="form-group" id="note" style="color: black;">
                                <P>* If you co-operate with us again, you can directly login by using your user name and password</P>
                            </div>
                            <div class="divider"></div>
                            <div class="text-center">
                            <label class="text-info" style="width: 100%; color: black;">Emergency Contact</label></div>

                            <div class="form-group" id="form">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group" id="form">
                                <input type="text" name="relation" id="relation" class="form-control" placeholder="Relationship">
                            </div>
                            <div class="form-group" id="form">
                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Telephone number">
                            </div>

                            <div class="form-group">
                                <button class="button button-block"/><a href="/channel">Register</button></a>
                            </div>
                        </div>
                        </div>
                    </form>
                
            </div>
            <!--end Register Form-->
            <!--Login page-->
            <div id="myDIV2" style="display: none;">
                 <div class="container">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12">
                                <form id="login-form" class="form" action="" method="post" style="margin-left: 35%; margin-top: 10px; width: 100%;">
                                    <h2 class="text-center text-info">Login</h2>
                                    <button id="btnclose" type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="loginclose()">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    <hr>
                                    <div class="form-group" id="labl1">
                                        <label for="username" class="text-info">Username:</label><br>
                                        <input type="text" name="username" id="username" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="text-info">Password:</label><br>
                                        <input type="text" name="password" id="password" class="form-control">
                                    </div>

                                    <div class="form-group" class="text-info">
                                        <p class="forgot"><a href="#">Forgot Password?</a></p>
                                        <a onclick="login()" href="#" id="reg-link" style="color: blue;">Register here</a></p>
                                        <a href="/channel"><button class="button button-right"/>Log In</button></a>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Login page-->

        </div>
</div>

@endsection  
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
function login() {
    var x = document.getElementById("myDIV");
  var y = document.getElementById("myDIV2");
  if (y.style.display === "none") {
    y.style.display = "block";
    x.style.display = "none";
  } else {
    y.style.display = "none";
    x.style.display = "block";
  }
}
function loginclose(){
    var y = document.getElementById("myDIV2");
    y.style.display = "none";
}

</script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script> 
