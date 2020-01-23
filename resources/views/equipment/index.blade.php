@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.myform').submit(function() {
                if (confirm('Are you sure you want to delete this Equipment?')) {

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

                <h3 class="box-title">Equipments</h3>

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
                                    <a href="{{url('/addEquipment')}}" class="btn btn-success" >Add Equipment</a>
                                    <h5></h5>
                                </div>
                                <div class="card-body">

                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                            <tr>

                                                <th>Tag number</th>
                                                <th>Unit vessel</th>
                                                <th>Code stamp</th>
                                                <th>Service</th>
                                                {{--<th>Manufacture</th>--}}
                                                {{--<th>Model number</th>--}}
                                                <th>Created at</th>
                                                <th>Created by</th>
                                                <th>updated by</th>
                                                {{--<th>Maintenance_for</th>--}}
                                                {{--<th>Date taster</th>--}}
                                                {{--<th>Total repair_cost</th>--}}
                                                {{--<th>Set pressure</th>--}}
                                                {{--<th>Final test_press</th>--}}
                                                {{--<th>Status</th>--}}
                                                {{--<th>Comment</th>--}}
                                                {{--<th>Template</th>--}}
                                                {{--<th>Saved template</th>--}}
                                                {{--<th>Current template</th>--}}
                                                {{--<th>Internal</th>--}}
                                                {{--<th>Saved internal</th>--}}
                                                {{--<th>Current internal</th>--}}
                                                {{--<th>Nb registration</th>--}}
                                                {{--<th>Set vacuum</th>--}}
                                                {{--<th>Next test date</th>--}}
                                                {{--<th>Next maintenance date</th>--}}
                                                {{--<th>Next maintenance for</th>--}}
                                                {{--<th>Valve size</th>--}}
                                                {{--<th>Job number</th>--}}
                                                {{--<th>Risk</th>--}}
                                                {{--<th>Universal</th>--}}
                                                {{--<th>Device type</th>--}}
                                                {{--<th>Serial number</th>--}}
                                                {{--<th>Owner</th>--}}
                                                {{--<th>Plant</th>--}}
                                                {{--<th>Equipment type</th>--}}
                                                <td>actions</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($equipments as $equipment)
                                                <tr>

                                                    <td>{{$equipment->tag_number}}</td>
                                                    <td>{{$equipment->unit_vessel}}</td>
                                                    <td>{{$equipment->code_stamp}}</td>
                                                    {{--<td>{{$equipment->service}}</td>--}}
                                                    {{--<td>{{$equipment->manufacture}}</td>--}}
                                                    <td>{{$equipment->model_number}}</td>
                                                    <td>{{$equipment->created_at}}</td>
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
                                                    {{--<td>{{$equipment->maintenance_for}}</td>--}}
                                                    {{--<td>{{$equipment->date_taster}}</td>--}}
                                                    {{--<td>{{$equipment->total_repair_cost}}</td>--}}
                                                    {{--<td>{{$equipment->set_pressure}}</td>--}}
                                                    {{--<td>{{$equipment->final_test_press}}</td>--}}
                                                    {{--<td>{{$equipment->status}}</td>--}}
                                                    {{--<td>{{$equipment->comment}}</td>--}}
                                                    {{--<td>{{$equipment->template}}</td>--}}
                                                    {{--<td>{{$equipment->saved_template}}</td>--}}
                                                    {{--<td>{{$equipment->current_template}}</td>--}}
                                                    {{--<td>{{$equipment->internal}}</td>--}}
                                                    {{--<td>{{$equipment->saved_internal}}</td>--}}
                                                    {{--<td>{{$equipment->current_internal}}</td>--}}
                                                    {{--<td>{{$equipment->nb_registration}}</td>--}}
                                                    {{--<td>{{$equipment->set_vacuum}}</td>--}}
                                                    {{--<td>{{$equipment->next_test_date}}</td>--}}
                                                    {{--<td>{{$equipment->next_maint_date}}</td>--}}
                                                    {{--<td>{{$equipment->next_maint_for}}</td>--}}
                                                    {{--<td>{{$equipment->valve_size}}</td>--}}
                                                    {{--<td>{{$equipment->risk}}</td>--}}
                                                    {{--<td>{{$equipment->universal}}</td>--}}
                                                    {{--<td>{{$equipment->device_type}}</td>--}}
                                                    {{--<td>{{$equipment->serial_number}}</td>--}}
                                                    {{--<td>{{$equipment->owner->ownername}}</td>--}}
                                                    {{--<td>{{$equipment->plant->location}}</td>--} }
                                                    {{--<td>{{$equipment->equipment->name}}</td>--}}
                                                    <td><div class="btn-group btn-group-sm p8" style="float: none;">
                                                            <a  href="{{url('/addPart/'.$equipment->id)}}" class="btn btn-warning" >Add Part</a>
                                                            <br>
                                                            <a  href="{{url('/parts/'.$equipment->id)}}" class="btn btn-warning" >Parts</a>
                                                            <br>
                                                            <a href="{{url('/details/'.$equipment->id)}}" class="btn btn-warning" >Details</a>
                                                            <br>
                                                            <a href="{{url('/editEquipment/'.$equipment->id)}}" class="btn btn-warning" >Edit</a>
                                                            <form class="myform p7" id="{{$equipment->id}}"  method="post"  action="{{url('/deleteEquipment/'.$equipment->id)}}">   @csrf
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


