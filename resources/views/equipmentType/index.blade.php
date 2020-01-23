@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('.myform').submit(function() {
            if (confirm('Are you sure you want to delete this Equipment Type?')) {

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

                <h3 class="box-title">Equipment Type</h3>

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
                            <div class="card-header">
                                <a data-toggle="modal" data-target="#add-equipment-type" class="btn btn-success" >Add Equipment Type</a>
                                <h5>Equipment Type</h5>
                            </div>
                            <div class="card-body">

                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <tr>

                                            <th>Name</th>
                                            <th>Created by</th>
                                            <th>Updated by</th>

                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($equipments as $equipment)
                                            <tr>

                                                <td>{{$equipment->name}}</td>
                                                @if($equipment->created_by !=null)
                                                <td>{{$equipment->getCreated->first_name.' '.$equipment->getCreated->last_name}}</td>
                                                @else
                                                 <td>{{$equipment->created_by}}</td>
                                                @endif
                                                @if($equipment->updated_by !=null)
                                                <td>{{$equipment->getUpdated->first_name.' '.$equipment->getUpdated->last_name}}</td>
                                                @else
                                                    <td>{{$equipment->updated_by}}</td>
                                                @endif
                                                <td><div class="btn-group btn-group-sm" style="float: none;"><a data-toggle="modal" data-target="#edit-equipment-type-{{$equipment->id}}" class="btn btn-warning" >Edit</a> <form class="myform" id="{{$equipment->id}}"  method="post"  action="{{(route('equipmentType.destroy',$equipment->id))}}">   @csrf
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
    <div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Woohoo, you're reading this text in a modal!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="add-equipment-type">
        <form method="post" action="{{route('equipmentType.store')}}" role="form" class="form-horizontal">
            {{csrf_field()}}
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">

                    <div class="modal-body">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="name" required>

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
    @foreach($equipments as $equipment)
        <div class="modal fade" id="edit-equipment-type-{{$equipment->id}}">
            <form method="post" action="{{route('equipmentType.update',$equipment->id)}}" role="form" class="form-horizontal">
                {{csrf_field()}}
                {!! method_field('PUT') !!}

                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">

                        <div class="modal-body">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" value="{{$equipment->name}}" class="form-control" name="name" placeholder="name">

                                </div>
                            </div>

                            <div class="modal-footer border-top myspc">
                                <button type="submit" class="btn btn-info btn-sm mr-auto">Edit</button>
                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach
@endsection


