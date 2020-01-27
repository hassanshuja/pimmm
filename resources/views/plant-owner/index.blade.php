@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>
    .selected {
        background: lightgray !important;
    }
</style>
<script>
    $(document).ready(function () {

        $('.myform').submit(function () {
            if (confirm('Are you sure you want to delete this Owner?')) {

                return true;
            } else {
                return false;
            }
            // your code here
        });
    });
</script>


@section('content')

    <!-- [ chat message ] end -->


    <!-- [ Main Content ] start -->
    <div class="owner-plant">

        <div class="box">

            <div class="box-header">

                <h3 class="box-title"></h3>

            </div>


            <div class="box-body">

                @if (Session::get("success"))

                    <div class="alert alert-success" role="alert">

                        {{Session::get("success")}}

                    </div>

                @endif

                @if (Session::get("error"))

                    <div class="alert alert-danger" role="alert">

                        {{Session::get("error")}}

                    </div>

                @endif
                <div class="row">

                    <div class="col-md-6">
                        <h4 class="heading-purple">Add Owner</h4>
                        <div class="owner-area">
                            <form id="validation-form123" action="{{route('owner.store')}}" method="post">
                                {!! csrf_field() !!}

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control" name="company_name"
                                               placeholder="Company Name">

                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" name="first_name"
                                               placeholder="last name">

                                    </div>
                                </div> --}}
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control" name="last_name"
                                               placeholder="last name">

                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Phone</label>
                                        <input type="text" class="form-control" name="phone" placeholder="phone">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        @if ($errors -> has("email"))

                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors -> first("email") }}
                                            </div>
                                        @endif
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control mail" name="email" placeholder="Email">
                                    </div>

                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="validation-password"
                                               placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control"
                                               name="validation-password-confirmation" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Note</label>
                                        <textarea name="notes"></textarea>
                                    </div>
                                </div>


                                <div class="col-md-3 ">

                                    <button type="submit" class="btn btn-primary">

                                        {{ __('Add Owner') }}

                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <h4 class="heading-purple">Add Plants</h4>
                        <div class="plan-area">
                            <form id="validation-form123" action="{{url('/storePlant/')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control spaces" name="location"
                                                   placeholder="location" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Area</label>
                                            <input type="text" class="form-control" name="area" placeholder="area"
                                                   required>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Account</label>
                                            <input type="text" class="form-control" name="account" placeholder="account"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Universal</label>
                                            <input type="text" class="form-control" name="universal"
                                                   placeholder="universal" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Select Owner</label>
                                            <select name="plant_owner" class="form-control small-box">
                                                <option value=""> Select Owner</option>
                                                @foreach($owners as $owner)
                                                    <option value="{{ $owner->id }}">
                                                        {{$owner->first_name}} {{$owner->last_name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Note</label>
                                            <textarea name="notes"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-3 ">

                                        <button type="submit" class="btn btn-primary">

                                            {{ __('Add Plant') }}

                                        </button>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- [ breadcrumb ] end -->
                <!-- [ Main Content ] start -->

                <div class="row">
                    <!-- Zero config table start -->
                    <div class="col-sm-12">
                        <div class="card">

                            <div class="card-body">
                                <div class="fulldivs">
                                    <!--
                                    <button onclick="ownerdataID()" class="btn btn-primary" >Use Owner</button>

                                    <button onclick="location.href='ownerplantReport'" class="btn btn-primary" >Use Plant</button>
                                    <button onclick="location.href='ownerplantReport'" class="btn btn-primary" >Use All</button>
                                    -->
                                    {{-- <button onclick="ownerdataID()" class="btn btn-primary">Create New Report</button> --}}

                                    <!--<button onclick="location.href='ownerplantReport'" class="btn btn-primary" >View Existing Report</button>-->
                                    <button onclick="owneralldata()" class="btn btn-primary">View Report
                                    </button>

                                    {{-- <button onclick="userownerplantReport()" class="btn btn-primary">Use Existing
                                        Report
                                    </button> --}}
                                </div>
                                <div class="col-md-6" style="padding-left:0px">
                                    <h4 class="heading-purple">Owners</h4>
                                    <div class="owner-table">

                                        <div class="dt-responsive table-responsive">
                                            <table id="example2" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th style="display:none;">Id</th>

                                                    <th> Name</th>
                                                    <th>Email</th>
                                                    <th>Note</th>
                                                    <th>Created by</th>
                                                    <th>Updated by</th>
                                                    <th>Action</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($owners as $owner)
                                                    <tr>
                                                        <td style="display: none;">{{$owner->id}}</td>

                                                        {{-- <td>{{$owner->first_name.' '.$owner->last_name}}</td> --}}
                                                        <td>{{ $owner->company_name }}</td>
                                                        <td>{{$owner->email}}</td>
                                                        <td>{{$owner->notes}}</td>
                                                        @if($owner->created_by!=null)
                                                            <td>{{$owner->createdOwner}}</td>
                                                        @else
                                                            <td>{{$owner->created_by}}</td>
                                                        @endif
                                                        @if($owner->updated_by!=null)
                                                            <td>{{$owner->updatedOwner}}</td>
                                                        @else
                                                            <td>{{$owner->updated_by}}</td>
                                                        @endif
                                                        <td>
                                                            <div class="btn-group btn-group-sm" style="float: none;"><a
                                                                        onclick="updateOwner({{$owner->id}})"
                                                                        class="btn btn-warning">Edit</a>
                                                                <form class="myform" id="{{$owner->id}}" method="post"
                                                                      action="{{(route('owner.destroy',$owner->id))}}">   @csrf
                                                                    {!! method_field('Delete') !!}
                                                                    <button type="submit" class="btn btn-danger">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach


                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6" style="padding-right:0px">
                                    <h4 class="heading-purple">Plants</h4>
                                    <div class="plants-table">
                                        <div class="table-responsive">
                                        {{-- <div class="dt-responsive table-responsive"> --}}
                                            <table id="example" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                <tr>
                                                    <th style="display:none;">id</th>
                                                    <th>Plant Owner</th>
                                                    <th>Location</th>
                                                    <th>Area</th>
                                                    <th>Account</th>
                                                    <th>Universal</th>
                                                    <th>Note</th>
                                                    <th>Created by</th>
                                                    <th>Updated by</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                               
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Zero config table end -->
                    <!-- Default ordering table start -->
                    <!-- Default ordering table end -->
                    <!-- Multi-column table start -->
                    <!-- Multi-column table end -->
                    <!-- Complex-header table start -->
                    <!-- Complex-header table end -->
                    <!-- DOM Positioning table start -->
                    <!-- DOM Positioning table end -->
                    <!-- Alternative Pagination table start -->
                    <!-- Alternative Pagination table end -->
                    <!-- Scroll - Vertical table start -->
                    <!-- Scroll - Vertical table end -->
                    <!-- Scroll - Vertical, Dynamic Height table start -->
                    <!-- Scroll - Vertical, Dynamic Height table end -->
                    <!-- Language - Comma Decimal Place table start -->
                    <!-- Language - Comma Decimal Place table end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
    </div>
    </div>
    </div>
    </section>
    @foreach($owners as $owner)

        <div class="modal fade" id="add-order-{{$owner->id}}">
            <form method="post" action="{{url('/storePlant/'.$owner->id)}}" role="form" class="form-horizontal">
                {{csrf_field()}}
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">

                        <div class="modal-body">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Location</label>
                                    <input type="text" class="form-control" name="location" placeholder="location"
                                           required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Area</label>
                                    <input type="text" class="form-control" name="area" placeholder="area" required>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Account</label>
                                    <input type="text" class="form-control" name="account" placeholder="account"
                                           required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Universal</label>
                                    <input type="text" class="form-control" name="universal" placeholder="universal"
                                           required>
                                </div>
                            </div>

                            <div class="modal-footer border-top">
                                <button type="submit" class="btn btn-info btn-sm mr-auto">Add</button>
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>


        </div>
    @endforeach

    <div class="modal" id="updateOwner" tabindex="-1" role="dialog">
        <input type="hidden" id="plant_id" value="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <input type="hidden" id="owner_id" value="">

                <form method="post" class="miv">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="heading-purple">@lang( 'Update Owner' )</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">First Name</label>
                                <input type="text" id="first_name" class="form-control" name="first_name"
                                       placeholder="Name">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" id="last_name" class="form-control" name="last_name"
                                       placeholder="Name">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Email</label>
                                <input type="text" id="email" class="form-control mail" name="email"
                                       placeholder="Email">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">phone</label>
                                <input type="text" id="phone" class="form-control" name="phone" placeholder="Email">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="form-label">Note</label>
                                <input type="text" class="form-control" id="notes2" name="notes" placeholder="notes">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="modal-footer kiv">
                                <button type="button" onclick="storeOwnerData()" class="btn btn-primary">save</button>
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="ownerplantReports" tabindex="-1" role="dialog" style="overflow: scroll;">
        <input type="hidden" id="plant_id" value="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" action="/storeDouble">
                    {{ csrf_field() }}

                    <div class="modal-header">
                        <h4 class="heading-purple">@lang( 'Exist Report')</h4>
                    </div>
                    <input type="hidden" name="job_id" id="jobReportid">
                    <input type="hidden" name="plantID" id="plantID" value="">
                    <input type="hidden" name="ownerIDID" id="ownerIDID" value="">
                    <div class="modal-body">

                        <div class="table-responsive">
                            <table id="exam" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Tag Number</th>
                                    <th>Serial Number</th>
                                    <th>Model Number</th>
                                    <th>Data Received</th>
                                    <th>Value Size</th>
                                    <th>Description</th>
                                    <th>Equipment Location</th>
                                    <th>Date Tested</th>
                                    <th>Choose Job</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($jobs as $job)
                                    <tr>
                                        <td>{{$job->equipment->tag_number}}</td>
                                        <td>{{$job->equipment->serial_number}}</td>
                                        <td>{{$job->equipment->model_number}}</td>
                                        <td>{{date('Y-m-d')}}</td>
                                        <td>{{$job->equipment->sizing_text}}</td>
                                        <td>{{$job->equipment->description}}</td>
                                        <td>{{$job->equipment->equipment_location}}</td>
                                        <td><{{$job->equipment->date_tested}}/td>
                                        <td>
                                            <button onclick="jobID({{$job->id}})">Select</button>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>

                        <div class="col-md-6">
                            <div class="modal-footer kiv">
                                <button type="button" class="btn btn-secondary btn-sm" onclick="cancel()"
                                        data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal" id="update" tabindex="-1" role="dialog">
        <input type="hidden" id="plant_id" value="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="post" class="miv">
                    {{ csrf_field() }}
                    <input type="hidden" id="plant_id" value="">
                    <div class="modal-header">
                        <h4 class="heading-purple">@lang( 'update plant')</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Location</label>
                                <input type="text" id="location" class="form-control" name="location"
                                       placeholder="location">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Area</label>
                                <input type="text" id="area" class="form-control" name="area" placeholder="area">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="form-label">Account</label>
                                <input type="text" class="form-control" id="account" name="account"
                                       placeholder="account">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="form-label">Universal</label>
                                <input type="text" class="form-control" id="universal" name="universal"
                                       placeholder="universal">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                <label class="form-label">Note</label>
                                <input type="text" class="form-control" id="notes" name="notes" placeholder="universal">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="modal-footer kiv">
                                <button type="button" onclick="storePlantData()"
                                        class="btn btn-primary">@lang( 'save' )</button>
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": false,
                        "positionClass": "toast-bottom-center",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    }
    </script>

    <script>
        function userownerplantReport() {
            if (plants.length == 0) {
                alert("please select Plant");
                return;

            }
            if (owners.length == 0) {
                alert("please select Owner");
                return;

            }
            // else{
            $('#ownerplantReports').show();
            $('#plantID').val(plantid);
            $('#ownerIDID').val(ownerid);
            // }
        }

    </script>
    <script>
        function cancel() {
            $('#ownerplantReports').hide();
        }
    </script>
    <script>
        function jobID(x) {
            $('#jobReportid').val(x);
            alert('job selected');
        }
    </script>
    <script>
        var plantid = null;
        var ownerid = null;
        var plants = [];
        var owners = [];
        var owner = '';

        // $('#example').dataTable({
        //     "bPaginate": false
        // });

        $('#exam').dataTable({
            "bPaginate": false
        });

        $('#example2').dataTable({
            "bPaginate": false
        });

        // var table = $('#example').DataTable();

        $('#example').on('click', 'tr', function () {
            $('#example tr.selected').removeClass('selected');
            // $(this).toggleClass('selected');
            
            // if ($(this).hasClass('selected')) {
                // alert('IF CONDITION');
                // $(this).removeClass('selected');
                // var row = $(this).closest("tr");
                // alert(row.length);

                // var row = $(this).closest("tr");
                // var plant_owner = row.find("td:eq(0)").text();

                // var aa = plants.find(element => element.company_name === plant_owner);
                // var column = row.find('td');

                // alert(row);
                // alert(column);

                // $(this).removeClass('selected');
                // plantid = $('#example').row(this).data()[0];
                // plantid = $('#example').val();
                // plantid = table.row(this).data()[0];
                //$('#part').val(partid);
                // plants.push(plantid);
            // } else {
                $(this).addClass('selected');
                // console.log(aa.id, '==============================');
                var row = $(this).closest("tr");
                plantid = row.find("td:eq(0)").text();
                // plant_id = table.row(this).data()[0];
                // alert(plantid + ' PLANT ID');
                // var index = plants.indexOf(plantid);
                // plants.splice(index, 1);
                // console.log(plants);
                // $('#part').val(partid);
            // }

        });

        var table2 = $('#example2').DataTable();

        $('#example2 tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');

                // ownerid = table2.row( this ).data()[0];
                // owners.push(ownerid);
                // console.log(owners, 'checking click');
            }
            else {
                table2.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');

                ownerid = table2.row( this ).data()[0];
                owner = ownerid;

                getPlantsOfUser(owner);
                // owners = [];
                // owners.push(ownerid);
                // console.log(owners);
                // var index = owners.indexOf(ownerid);
                // owners.splice(index, 1);
                // console.log(owners);
            }

        });

        function getPlantsOfUser(owner) {
            
            // var url = 'ownerPlants/' + owner +'/plants';
            var url = 'ownerPlants/' + owner +'/plants';
            fetch(url)
            .then( (response) => {
                return response.json();
            })
            .then(data => {
                if (data.length > 0) {
                    plants = data;
                    var rows = null;

                /** Remove data and empty row from Plants table **/
                $('#example tbody tr').remove();

                /** Create rows with Plants Data **/
                plants.forEach( (item, index) => {
                    rows = "<tr role='row'>";
                    
                    rows += "<td style='display: none'>"+ item.id +"</td>"
                    rows += "<td>" + item.company_name + "</td>"
                    // rows += "<td>" + item.first_name + item.last_name + "</td>" ;
                    rows += "<td>" + item.location + "</td>" ;
                    rows += "<td>" + item.area + "</td>" ;
                    rows += "<td>" + item.account + "</td>" ;
                    rows += "<td>" + item.universal + "</td>" ;
                    rows += "<td>" + item.notes + "</td>" ;
                    rows += "<td>" + item.created_by + "</td>" ;
                    rows += "<td>" + item.updated_by + "</td>" ;
                    rows += "<td>" + "<a onclick='updatePlant("+item.id+")' class='btn btn-warning'>Edit</a>";
                    rows += "<form class='myform' id='"+item.id+"'" + "method='post' ";
                    rows += 'action="deletePlant/'+item.id+'">';
                    rows += '@csrf @method("Delete") <button type="submit" class="btn btn-danger">Delete</button>';
                    rows += "</form>";
                    rows +="</td>";

                    rows +=  "</tr>";

                /** Append Rows to Plants Table of Select Owner **/
                    $('#example tbody').append(rows);

                }); // forEach

                } // if
                else {
                    /** Remove data and empty row from Plants table **/
                    $('#example tbody tr').remove();
                    rows = "<tr class='odd'><td valign='top' colspan='9' class='dataTables_empty'>No data available</td></tr>";

                    $('#example tbody').append(rows);
                }
            });
        }
        // var table2 = $('#example2').DataTable();
        //
        // $('#example2 tbody').on( 'click', 'tr', function () {
        //
        //
        //     if ( $(this).hasClass('selected') ) {
        //         $(this).removeClass('selected');
        //         ownerid=null;
        //     }
        //     else {
        //         table2.$('tr.selected').removeClass('selected');
        //         $(this).addClass('selected');
        //         ownerid=table2.row( this ).data()[0] ;
        //     }
        // } );
        function ownerPlant() {
            var plant_id = plantid;
            var owner_id = ownerid
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '/ownerplant',
                type: 'post',
                data: {_token: _token, plant_id: plant_id, owner_id: owner_id},
                success: function (data) {
                    if (data == 1) {

                        alert("success");
                    } else if (data == 0) {
                        alert("this plant and owner are selected before");
                    }
                }
            });

        }
    </script>
    <script>
        function updatePlant(id) {
            $.ajax({
                url: 'editPlantData/' + id,
                type: 'get',
                success: function (data) {
                    if (data != '') {
                        $('#location').val(data.location);
                        $('#area').val(data.area);
                        $('#account').val(data.account);
                        $('#universal').val(data.universal);
                        $('#notes').val(data.notes);
                        $('#plant_id').val(data.id);
                        $('#update').show();
                    }
                }
            });
        }

    </script>

    <script>
        function updateOwner(id) {
            $.ajax({
                url: 'editOwnerData/' + id,
                type: 'get',
                success: function (data) {
                    if (data != '') {
                        $('#first_name').val(data.first_name);
                        $('#last_name').val(data.last_name);
                        $('#phone').val(data.phone);
                        $('#email').val(data.email);
                        $('#notes2').val(data.notes);
                        $('#owner_id').val(data.id);
                        $('#updateOwner').show();
                    }
                }
            });
        }

    </script>

    <script>
        function storePlantData() {
            var locationData = $('#location').val();
            var area = $('#area').val();
            var account = $('#account').val();
            var universal = $('#universal').val();
            var notes = $('#notes').val();
            var _token = $('input[name="_token"]').val();
            var id = $('#plant_id').val();

            $.ajax({
                url: 'storePlantData/' + id,
                type: 'post',
                data: {
                    _token: _token,
                    location: locationData,
                    area: area,
                    account: account,
                    universal: universal,
                    notes: notes
                },
                success: function (data) {
                    if (data == 1) {
                        setTimeout(function () {// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 100);
                        toastr.success("success");
                    } else {
                        toastr.error("error");
                    }
                }
            });
        }
    </script>

    <script>
        function storeOwnerData() {
            var first_name = $('#first_name').val();
            var last_name = $('#last_name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var notes = $('#notes2').val();
            var _token = $('input[name="_token"]').val();
            var id = $('#owner_id').val();
            $.ajax({
                url: 'storeOwnerData/' + id,
                type: 'post',
                data: {
                    _token: _token,
                    first_name: first_name,
                    email: email,
                    notes: notes,
                    last_name: last_name,
                    phone: phone
                },
                success: function (data) {
                    if (data == 1) {
                        toastr.success("Owner Updated");
                        setTimeout(function () {// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 300);
                    } else {
                        toastr.error("Error: Owner not Updated");
                    }
                }
            });
        }
    </script>
    <script>
        function ownerdataID() {
            if (plants.length == 0) {
                alert("please select Plant");
                return;

            }
            if (owners.length == 0) {
                alert("please select Owner");
                return;

            }

            location.href = 'ownerplantReport/' + ownerid + '/' + plantid;


        }

        function owneralldata() {
            if (plants.length == 0) {
                alert("please select Plant");
                return;

            }
            // if (owners.length == 0) {
            if (owner.length == 0 || owner === '') {
                alert("please select Owner");
                return;
            }

            location.href = 'ownerplantReport/' + ownerid + '/' + plantid;
        }
    </script>
@endsection