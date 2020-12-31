
@extends('blade-scafolding.layout.content')

@section('content')

<style type="text/css">
  body {
    background-image:url('<?php echo url('/'); ?>/images/background/patHistory.jpg');
    background-attachment: fixed;
    background-size: cover;
  }

</style>
<div id="patHistory" class="container" style="height: 480px;">

    <div class="text-center" style="padding-top: 20px;"><h1>My Records</h1></div>
    
    <div class="container" class="text-center">
            <div class="table-responsive" style="margin-top: 10px;">
                <table id="doctor_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="25%">Patient Name</th>
                            <th width="10%">Doctor Name</th>
                            <th width="10%">Date</th>
                            <th width="25%">Diagnostic</th>
                            <th width="30%">Description</th>
                        </tr>
                        <tr>
                            <td>a</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                 </table>
            </div>
        </div>
</div>
    
</div>

@endsection
