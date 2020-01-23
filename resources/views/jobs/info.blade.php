@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('.myform').submit(function() {
            if (confirm('Are you sure you want to delete this Job Info?')) {

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

                <h3 class="box-title">Job Info</h3>

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
                    <div class="col-sm-12" id="extr">
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">

                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <tr>

                                            <th>Owner</th>
                                            <th>Equipment</th>
                                            <th>Equipment Part</th>
                                            <td>actions</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($jobInfo as $job)
                                            <tr>

                                                <td>{{$job->owner->ownername}}</td>
                                                <td>{{$job->equipment->tag_number}}</td>
                                                <td>{{$job->part->part_name}}</td>

                                                <td><div class="btn-group btn-group-sm p8" style="float: none;">
                                                        <a href="{{url('/editJobInfo/'.$job->id)}}" class="btn btn-warning" >Edit</a>
                                                        <form class="myform p7" id="{{$job->id}}"  method="post"  action="{{url('/deleteJobInfo/'.$job->id)}}">   @csrf
                                                            {!! method_field('Delete') !!}<button type="submit" class="btn btn-danger" >Delete </button></form>
                                                    </div></td>
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

@endsection


