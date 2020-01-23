@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.myform').submit(function() {
                if (confirm('Are you sure you want to delete this Owner?')) {

                    return true;
                }
                else
                {
                    return false;
                }
                // your code here
            });
        });
    </script>


@section('content')

    <!-- [ chat message ] end -->


    <!-- [ Main Content ] start -->
   <div class="">

        <div class="box">

            <div class="box-header">

                <h3 class="box-title">Owners</h3>

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
                            <!-- [ breadcrumb ] end -->
                            <!-- [ Main Content ] start -->
                           <div class="row">
                                <!-- Zero config table start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                   
                                        <div class="card-body">

                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>

                                                        <th> Name</th>
                                                        <th>Email</th>
                                                        <th>Created by</th>
                                                        <th>Updated by</th>
                                                        <th>Action</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($owners as $owner)
                                                    <tr>

                                                        <td>{{$owner->ownername}}</td>
                                                        <td>{{$owner->email}}</td>
                                                        @if($owner->created_by!=null)
                                                            <td>{{$owner->create->first_name.' '.$owner->create->last_name}}</td>
                                                        @else
                                                            <td>{{$owner->created_by}}</td>
                                                        @endif
                                                        @if($owner->updated_by!=null)
                                                            <td>{{$owner->entry->first_name.' '.$owner->entry->last_name}}</td>
                                                        @else
                                                            <td>{{$owner->updated_by}}</td>
                                                        @endif
                                                        <td><div class="btn-group btn-group-sm" style="float: none;"><div class="btn-group btn-group-sm" style="float: none;"><a data-toggle="modal"  data-target="#add-order-{{$owner->id}}" class="btn btn-warning" >Add Plant</a></div> <br> <div class="btn-group btn-group-sm" style="float: none;"><a href="{{url('/plants/'.$owner->id)}}" class="btn btn-warning" >Plants</a></div> <br> <a href="{{route('owner.edit',$owner->id)}}" class="btn btn-warning" >Edit</a>  <form class="myform" id="{{$owner->id}}"  method="post"  action="{{(route('owner.destroy',$owner->id))}}">   @csrf
                                                                    {!! method_field('Delete') !!}<button type="submit" class="btn btn-danger" >Delete </button></form></div></td>
                                                    </tr>
                                                        @endforeach


                                                    </tbody>

                                                </table>
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
                            <input type="text" class="form-control" name="location" placeholder="location" required>

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
                            <input type="text" class="form-control" name="account" placeholder="account" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Universal</label>
                            <input type="text" class="form-control" name="universal" placeholder="universal" required>
                        </div>
                    </div>

                    <div class="modal-footer border-top">
                            <button type="submit" class="btn btn-info btn-sm mr-auto">Add</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                </div>
            </form>



        </div>
    @endforeach

@endsection


