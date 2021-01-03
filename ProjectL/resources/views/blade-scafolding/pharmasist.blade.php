@extends('blade-scafolding.layout.content')


@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/med1.jpg');
  }
  @media(max-width: 1120px){
    #patbt #stock button{
        margin-right: 150px;
    }
  }
  @media(min-width: 800px){
      td button{ 
        width: 80%;
      }
  }
    #ppage button {
    background-color: blue;
    color: white;
    border: 0 solid;
    margin: 10px 10px 10px 10px;
}
#ppage #phar_table{
    background-color: white;
    color: black;
    outline: 1px solid;
    outline-color: black;
}
#ppage table{
    color: black;
} 
#ppage #tbl tr{
    border-bottom-style: solid;
}
#ppage h1 {
    font-weight: bold;
}
#ppage {
    height: 500px;
}
@media(max-width: 852px){
    #ppage {
        height: 600px;
    }
}
@media (min-width: 1200px) {
        #ppage h1 {
        color: #120A2A;
        backdrop-filter: blur(5px);
        
    }
}
</style>

<div id="ppage" class="container">
    <div class="text-center">
        <h1>Life Care Pharmacy</h1>
    </div>
    <div id="patbutton" style="right: 1px;">
        <div id="patbt">
            <a id="stock" href="/medicine_stocks"><button class="btn btn right">stock</button></a>
            <a id=""><button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn right">Invoice</button></a>
            <a href="/login" style="position: absolute; right: 10px;"><span class="glyphicon glyphicon-log-out"></span>  Log-out</a>
        </div>
    </div>
    <div id="pharm" class="text-right" style="position: absolute;">
        <label>Date:</label><br>
        <label>Bill No:</label><br>
        <label>Ptient ID:</label>
    </div>


    <div class="text-center" style="padding-top: 100px;"><h1></h1></div>
        <div class="container" class="text-center">
            <div class="table-responsive" style="margin-top: 10px;">
                <table id="phar_table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="30%">Medicine Name</th>
                            <th width="20%">Quantity</th>
                            <th width="20%">Unit Price</th>
                            <th width="20%">Amount</th>
                            <th width="10%">action</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="text-align: center;"><button class="btn" style="margin: 0 0 0 0;">Add</button></td>
                        </tr>
                    </thead>
                 </table>
                 
            </div>
            <div class="row">                        
                <div class="col-lg-4 col-sm-5 ml-auto" class="right">
                            <table id="tbl" class="table table-clear">
                                <tbody>
                                    <tr>
                                        <td class="left"><strong>Subtotal</strong></td>
                                        <td class="right"></td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>Discount (10%)</strong></td>
                                        <td class="right"></td>
                                    </tr>
                                    <tr>
                                        <td class="left"><strong>Total</strong></td>
                                        <td class="right"><strong></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pull-right"> <a class="btn btn-sm btn-success" href="#" data-abc="true"><i class="fa fa-paper-plane mr-1"></i> Proceed to payment</a>
                            </div>
                        </div>
                    </div>
                <div id="note">
                     <p>Thank you for your business should you have any enquiries concerning the bill,</p>
                     <p>Please Contact: 011-25 70 120</p>
                 </div>
        </div>
    </div>
        
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="text-center" class="modal-title" id="exampleModalLongTitle">Invoice</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="">
                    <label for="username" class="text-info">:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">:</label>
                    <a class="" href=""></a>
                </div>
                <div class="">
                    <label for="username" class="text-info">:</label>
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

