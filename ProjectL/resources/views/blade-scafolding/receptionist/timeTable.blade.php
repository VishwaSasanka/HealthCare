@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/rep4.jpg');
    background-attachment: fixed;
    background-size: cover;
}

.rounded-lg {
  border-radius: 1rem;
}

.navbar-nav .nav-link {
  color: #555;
}

.navbar-nav .nav-link.active {
  color: #fff;
}
#collapsable-nav{
  text-align: center;
}
#collapsable-nav ul li{
  display:inline;
}
td{
  color: black;
}
@media(min-width: 1172px){
  #collapsable-nav ul{
    padding: 0 20%;
  }
}
@media(max-width: 1172px){
  #collapsable-nav ul{
    padding: 0 13%;
  }
}
#srch tr{
  border-bottom-style: solid;
}
#srch th{
  text-align: center;
}
#srch td{
  color: #C9FFE5;
}
#srch {
  color: white;
  margin-top: 50px;
}
#search1{
	position: absolute; 
	margin-left: 280px; 
	margin-top: 10px;
}
#search{
	position: absolute; 
	margin-left: 510px;
}
#inp{
	width: 200px; 
	height: 42px; 
	border-radius: 20px; 
	background-color: white; 
	padding-left: 15px;
}
#searchbtn{
	position: absolute; 
	margin-left: 750px;
	margin-top: 18px;
	width: 100px;
	background-color: lightblue;
	color: black;
}
@media(max-width: 780px){
	#search1{
		margin-top: 60px;
		margin-left: 0; 
	}
	#search{
		margin-top: 100px;
		margin-left: 0; 
	}
	#inp{
		width: 250px;
	}
	#srch{
		margin-top: 150px;
	}
	#searchbtn{
		margin-top: 118px;
		margin-left: 270px; 
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>

<div class="container">

    <!--search by docid or Specialization-->
    <form>
	    <div class="serch-bar" class="text-left" style="position: absolute; width: 250px;">
	        <div id="custom-search-input" class="table-responsive">
	            <div class="input-group col-md-12">
	                <span class="input-group-btn">
	                    <button class="btn btn-info btn-lg" type="button">
	                    <i class="fa fa-search" aria-hidden="true"></i>
	                    </button>
	                </span>
	                <input type="text" class="form-control input-lg" placeholder="Doctor ID/Doctor Name" style="padding: 0 0 0 0;" />
	            </div>
	        </div>
	    </div>
	    <div id="search1">
	            <select id="inp">
	                <option selected> Specialization</option>
	                <option>Consultant</option>
	                <option>Cardiologist</option>
	            </select>
	    </div> 
	    <div id="search" class="form-group">
	        <input id="inp" type="date" name="birthday" id="birthday" class="form-control" >
	    </div>
	    <button id="searchbtn" class="btn">go</button>
    </form>
    <br>
    <!--End search by docid or Specialization-->

    <!--search table -->
    <div id="srch" class="text-center">
        <table class="table" style="width: 100%;">
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Period Time</th>
                    <th>Doctor ID</th>
                    <th>Doctor Name</th>
                    <th>Specialization</th>
                    <th>No of Patients</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--search table -->

    <!--Time table-->
    <div class="text-center" style="color: blue; font-weight: bold; font-size: 27px; margin-top: 40px;">
        Time Table
    </div>

    <table class="table table-bordered" style="background-color: white; margin-top: 10px;">
        <thead>
          <tr>
          	<th scope="col">Date</th>
            <th scope="col">Period Time</th>
            <th scope="col">Doctor ID</th>
            <th scope="col">Doctor Name</th>
            <th scope="col">Specialization</th>
            <th scope="col">No of Patients</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    <!--End Time table-->

</div>

@endsection
