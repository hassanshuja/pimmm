@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.myform').submit(function() {
                if (confirm('Are you sure you want to delete this Part?')) {

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

                <h3 class="box-title">Parts</h3>

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
                                    <a href="/equipment" class="btn btn-primary" >Back</a>
                                    <h5></h5>
                                </div>
                                <div class="card-body">

                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                            <tr>

                                                <th>Tag number</th>
                                                <th>Date</th>
                                                <th>Part number</th>
                                                <th>Part name</th>
                                                <th>Condition rec</th>
                                                <th>Nd condition rec</th>
                                                <th>Material</th>
                                                <th>Source</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Cost</th>
                                                <th>Work performed</th>
                                                <th>Recommendation</th>
                                                <th>Parts code</th>
                                                <th>Parts uni</th>
                                                <th>Delivery date</th>
                                                <td>Created by</td>
                                                <td>Updated by</td>
                                                <th>Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($parts as $part)
                                                <tr>

                                                    <td>{{$part->tag_number}}</td>
                                                    <td>{{$part->date}}</td>
                                                    <td>{{$part->part_number}}</td>
                                                    <td>{{$part->part_name}}</td>
                                                    <td>{{$part->condition_rec}}</td>
                                                    <td>{{$part->nd_condition_rec}}</td>
                                                    <td>{{$part->material}}</td>
                                                    <td>{{$part->source}}</td>
                                                    <td>{{$part->quantity}}</td>
                                                    <td>{{$part->price}}</td>
                                                    <td>{{$part->cost}}</td>
                                                    <td>{{$part->work_performed}}</td>
                                                    <td>{{$part->recommendation}}</td>
                                                    <td>{{$part->parts_code}}</td>
                                                    <td>{{$part->parts_uni}}</td>
                                                    <td>{{$part->delivery_date}}</td>
                                                    @if($part->created_by !=null)
                                                        <td>{{$part->getCreated->first_name.' '.$part->getCreated->last_name}}</td>
                                                    @else
                                                        <td>{{$part->created_by}}</td>
                                                    @endif
                                                    @if($part->updated_by !=null)
                                                        <td>{{$part->getUpdated->first_name.' '.$part->getUpdated->last_name}}</td>
                                                    @else
                                                        <td>{{$part->updated_by}}</td>
                                                    @endif
                                                    {{--<td><a href="/editPlant/{{$plant->id}}"/>edit</td>--}}
                                                    <td><div class="btn-group btn-group-sm" style="float: none;"><a href="{{url('/editPart/'.$part->id)}}" class="btn btn-warning" >Edit</a>
                                                            <form class="myform" id="{{$part->id}}"  method="post"  action="{{url('/deletePart/'.$part->id)}}">   @csrf
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

@endsection


