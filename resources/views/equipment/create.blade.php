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

                <h3 class="box-title">Add New Equipment</h3>

            </div>



                                        <form id="validation-form123" action="{{url('/storeEquipment')}}" method="post">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Tag number</label>
                                                        <input type="number" class="form-control" name="tag_number" placeholder="tag_number" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Unit vessel</label>
                                                        <input type="text" class="form-control" name="unit vessel" placeholder="unit_vessel" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Code stamp</label>
                                                        <input type="text" class="form-control" name="code_stamp" placeholder="code_stamp" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Service</label>
                                                        <input type="text" class="form-control" name="service" placeholder="service" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Manufacture</label>
                                                        <input type="text" class="form-control" name="manufacture" placeholder="manufacture" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Model number</label>
                                                        <input type="number" class="form-control" name="model_number" placeholder="model_number" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Maintenance for</label>
                                                        <input type="text" class="form-control" name="maintenance_for" placeholder="maintenance_for" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Date taster</label>
                                                        <input type="date" class="form-control" name="date_taster" placeholder="date_taster" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Total repair_cost</label>
                                                        <input type="number" class="form-control" name="total_repair_cost" placeholder="total_repair_cost" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Set pressure</label>
                                                        <input type="text" class="form-control" name="set_pressure" placeholder="set_pressure" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Final test press</label>
                                                        <input type="text" class="form-control" name="final_test_press" placeholder="final_test_press" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Status</label>
                                                        <input type="text" class="form-control" name="status" placeholder="status" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Comment</label>
                                                        <input type="text" class="form-control" name="comment" placeholder="comment" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Template</label>
                                                        <input type="text" class="form-control" name="template" placeholder="template" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Saved template</label>
                                                        <input type="text" class="form-control" name="saved_template" placeholder="saved_template" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Internal</label>
                                                        <input type="text" class="form-control" name="internal" placeholder="internal" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Saved internal</label>
                                                        <input type="text" class="form-control" name="saved_internal" placeholder="saved_internal" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Current internal</label>
                                                        <input type="text" class="form-control" name="current_internal" placeholder="current_internal" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Nb registration</label>
                                                        <input type="text" class="form-control" name="nb_registration" placeholder="nb_registration" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Current template</label>
                                                        <input type="text" class="form-control" name="current_template" placeholder="current_template" required>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Set vacuum</label>
                                                        <input type="text" class="form-control" name="set_vacuum" placeholder="set_vacuum" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Next test date</label>
                                                        <input type="date" class="form-control" name="next_test_date" placeholder="next_test_date" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Next maintenance date</label>
                                                        <input type="date" class="form-control" name="next_maint_date" placeholder="next_maint_date" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Next maintenance for</label>
                                                        <input type="text" class="form-control" name="next_maint_for" placeholder="next_maint_for" required>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Valve size</label>
                                                        <input type="text" class="form-control" name="valve_size" placeholder="valve_size" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Job number</label>
                                                        <input type="number" class="form-control" name="job_number" placeholder="job_number" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Risk</label>
                                                        <input type="text" class="form-control" name="risk" placeholder="risk" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Universal</label>
                                                        <input type="text" class="form-control" name="universal" placeholder="universal" required>

                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Serial number</label>
                                                        <input type="text" class="form-control" name="serial_number" placeholder="serial_number" required>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Equipment Type</label>
                                                        <select name="equipment" class="form-control" required>
                                                            @foreach($equipment_types as $equipment_type)
                                                                <option value="{{$equipment_type->id}}">{{$equipment_type->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Owners</label>
                                                        <select name="owner" id="owner" onchange="owners()" class="form-control">
                                                            @foreach($owners as $owner)
                                                                <option value="{{$owner->id}}">{{$owner->ownername}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Plants</label>
                                                        <select name="plant" id="plants" class="form-control">

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 ">

                                                    <button type="submit" class="btn btn-primary" >

                                                        {{ __('Add') }}

                                                    </button>

                                                </div>

                                            </div>
                                        </form>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        function owners() {
            $.ajax({
                url: '/getPlants/'+$('#owner').val(),
                type: 'get',
                success:function (data) {
                    $('#plants').empty();
                    for (var x=0;x<data.length; x++){
                        $('#plants').append('<option value="'+data[x].id+'">'+data[x].location+'</option>');
                    }

                }
            });
        }
    </script>
    @endsection

