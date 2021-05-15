@extends('blade-scafolding.layout.admin')

@section('content')

<!--search -->
    
  <div class="serch-bar" class="text-left" style="width: 250px; margin-right: 10%;">
        <div id="custom-search-input" class="table-responsive">
            <div class="input-group col-md-12">
                <span class="input-group-btn">
                    <button class="btn btn-info btn-lg" type="button">
                    <i class="fa fa-search" aria-hidden="true" style="margin-top: 12px;"></i>
                    </button>
                </span>
                <input type="text" class="form-control input-lg" placeholder="User-ID" style="margin-left: 35px;" />
            </div>
        </div>
    </div>
    
    <br>
    <!--End search -->

    <!--search table -->
    <div id="srch" class="text-center" style="width: 80%; margin-left: 10%; margin-top: 40px;">
        <table class="table">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>View</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--search table -->

@endsection