@extends('layouts.master')
@section('content')

    <!-- [ chat message ] end -->


    <!-- [ Main Content ] start -->
    <div class="">

        <div class="box">

            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif



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

            <div class="box-header">

                <h3 class="box-title">Equipment Details</h3>

            </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Tag number</label>
                           <h3>{{$equipment->tag_number}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Unit vessel</label>
                            <h3 >{{$equipment->unit_vessel}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Code stamp</label>
                            <h3 >{{$equipment->code_stamp}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Service</label>
                            <h3 >{{$equipment->service}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Manufacture</label>
                            <h3>{{$equipment->manufacture}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Model number</label>
                            <h3 >{{$equipment->model_number}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Maintenance for</label>
                            <h3 >{{$equipment->maintenance_for}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Date taster</label>
                            <h3 >{{$equipment->date_taster}} </h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Total repair cost</label>
                            <h3 >{{$equipment->total_repair_cost}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Set pressure</label>
                            <h3 >{{$equipment->set_pressure}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Final test press</label>
                            <h3 >{{$equipment->final_test_press}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Status</label>
                            <h3 >{{$equipment->status}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Comment</label>
                            <h3 >{{$equipment->comment}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Template</label>
                            <h3 >{{$equipment->template}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Saved template</label>
                            <h3 >{{$equipment->saved_template}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Internal</label>
                            <h3>{{$equipment->internal}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Saved internal</label>
                            <h3 >{{$equipment->saved_internal}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Current internal</label>
                            <h3 >{{$equipment->current_internal}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Nb registration</label>
                            <h3>{{$equipment->nb_registration}}></h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Current template</label>
                            <h3 >{{$equipment->current_template}}</h3>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Set vacuum</label>
                            <h3 >{{$equipment->set_vacuum}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Next test date</label>
                            <h3 >{{$equipment->next_test_date}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Next maintenance date</label>
                            <h3 >{{$equipment->next_maint_date}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Next maintenance for</label>
                            <h3 >{{$equipment->next_maint_for}}</h3>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Valve size</label>
                            <h3 >{{$equipment->valve_size}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Job number</label>
                            <h3>{{$equipment->job_number}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Risk</label>
                            <h3 >{{$equipment->risk}}</h3>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Universal</label>
                            <h3 >{{$equipment->universal}}</h3>

                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Serial number</label>
                            <h3 >{{$equipment->serial_number}}</h3>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Equipment Type</label>
                            <h3 >{{$equipment->equipment->name}}</h3>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Owners</label>
                            <h3 >{{$equipment->owner->ownername}}</h3>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Plants</label>
                            <h3 >{{$equipment->plant->location}}</h3>

                        </div>
                    </div>

                </div>
        </div>
    </div>
    </div>
    <!-- [ Form Validation ] end -->
    </div>
    <!-- [ Main Content ] end -->
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

@endsection

