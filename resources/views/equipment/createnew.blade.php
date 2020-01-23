@extends('layouts.master')
@section('content')

<!-- [ chat message ] end -->


<!-- [ Main Content ] start -->
 <div class="own-report">
     <form action="/storeNewEquipemtn" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">
<input type="hidden" name="part" id="part" >
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



                    {!! csrf_field() !!}

                    <ul class="nav nav-tabs">
                        <li class="active" ><a href="#tab-data" data-toggle="tab">General</a></li>
                        <li><a href="#tab-links" data-toggle="tab">Valve Gonfig</a></li>
                        <li><a href="#tab-attribute" data-toggle="tab">Process / Nameplates</a></li>
                        <li><a href="#tab-four" data-toggle="tab">Con'd / Parts</a></li>
                        <li><a href="#tab-five" data-toggle="tab">Test Date</a></li>
                        <li><a href="#tab-six" data-toggle="tab">Critical Dim's</a></li>
                        <li><a href="#tab-seven" data-toggle="tab">Costs QC</a></li>
                        <li><a href="#tab-eight" data-toggle="tab">Images</a></li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tag number</label>
                                        <input type="text" class="form-control" name="tag_number" placeholder="tag_number" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Unit vessel</label>
                                        <input type="text" class="form-control" name="unit_vessel" placeholder="unit_vessel" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="name" required>

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
                                        <label class="form-label">Universal 1</label>
                                        <input type="text" class="form-control" name="universal1" placeholder="universal1" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Model number</label>
                                        <input type="text" class="form-control" name="model_number" placeholder="model_number" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Nb Registratio</label>
                                        <input type="text" class="form-control" name="nb_registration" placeholder="nb_registration" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Sizing Basic</label>
                                        <input type="text" class="form-control" name="sizing_text" placeholder="Sizing Basic" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Purshase Price</label>
                                        <input type="text" class="form-control" name="purchase_price" placeholder="purshase price" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Service</label>
                                        <input type="text" class="form-control" name="service" placeholder="Service" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Code Stamp</label>
                                        <input type="text" class="form-control" name="code_stamp" placeholder="code_stamp" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Serial Number</label>
                                        <input type="text" class="form-control" name="serial_number" placeholder="serial number" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Device Type</label>
                                        <input type="text" class="form-control" name="device_type" placeholder="device_type" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Equipment Location</label>
                                        <input type="text" class="form-control" name="equipment_location" placeholder="location_type" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Equipment Link</label>
                                        <input type="text" class="form-control" name="equipment_link" placeholder="equipment link" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Job Number</label>
                                        <input type="text" class="form-control" name="job_number" placeholder="job number" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Manufacturer</label>
                                        <input type="text" class="form-control" name="manufacturer" placeholder="manufacturer" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Registration</label>
                                        <input type="text" class="form-control" name="registration" placeholder="registration" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Universal 2</label>
                                        <input type="text" class="form-control" name="universal2" placeholder="universal2" required>

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
                                        <label class="form-label">Product</label>
                                        <input type="text" class="form-control" name="product" placeholder="Product" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Code Required</label>
                                        <input type="text" class="form-control" name="code_required" placeholder="code required" required>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Capacity</label>
                                        <input type="text" class="form-control" name="capacity" placeholder="capacity" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Description</label>
                                        <textarea name="description"class="form-control"></textarea>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane" id="tab-links">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Inlet Size</label>
                                    <input type="text" class="form-control" name="inlet_size1" placeholder="inlet Size" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Inlet Rating</label>
                                    <input type="text" class="form-control" name="inlet_rating1" placeholder="Inlet Size" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Inlet Facing</label>
                                    <input type="text" class="form-control" name="inlet_facing1" placeholder="inlet_facing" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Inlet Other</label>
                                    <input type="text" class="form-control" name="inlet_other1" placeholder="inlet_other" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Soft Seat Mat 1</label>
                                    <input type="text" class="form-control" name="soft_seat_mat11" placeholder="soft seat" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Body Matrial</label>
                                    <input type="text" class="form-control" name="body_material1" placeholder="body matrial" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Trim Matrial</label>
                                    <input type="text" class="form-control" name="trim_material1" placeholder="trim matrial" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Spring Number</label>
                                    <input type="text" class="form-control" name="spring_number1" placeholder="spring number" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Spring Matrial</label>
                                    <input type="text" class="form-control" name="spring_material1" placeholder="spring matrial" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Style</label>
                                    <input type="text" class="form-control" name="style1" placeholder="style" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Traveller</label>
                                    <input type="text" class="form-control" name="traveller1" placeholder="traveller" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Class</label>
                                    <input type="text" class="form-control" name="class1" placeholder="class" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Discharges To</label>
                                    <input type="text" class="form-control" name="discharges_to1" placeholder="discharges to" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Office Designation</label>
                                    <input type="text" class="form-control" name="orifice_designation1" placeholder="office designation" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Mfg Lift</label>
                                    <input type="text" class="form-control" name="mfg_lift1" placeholder="mfg_lift" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Outet Size</label>
                                    <input type="text" class="form-control" name="outlet_size1" placeholder="outet size" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Outlet Rating</label>
                                    <input type="text" class="form-control" name="outlet_rating1" placeholder="Outlet Rating" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Outlet Facing</label>
                                    <input type="text" class="form-control" name="outlet_facing1" placeholder="Outlet Rating" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Outlet Other</label>
                                    <input type="text" class="form-control" name="outlet_other1" placeholder="Outlet Other" required>

                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Config Universal</label>
                                    <input type="text" class="form-control" name="config_universal1" placeholder="Config Universal" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Bonnet Material</label>
                                    <input type="text" class="form-control" name="bonnet_material1" placeholder="bonnet material" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Bellows Material</label>
                                    <input type="text" class="form-control" name="bellows_material1" placeholder="bellows material" required>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Spring Range From</label>
                                    <input type="text" class="form-control" name="spring_range_from1" placeholder="spring range from" required>

                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Spring Range To</label>
                                        <input type="text" class="form-control" name="spring_range_to1" placeholder="spring range to" required>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Bonnet</label>
                                        <input type="text" class="form-control" name="bonnet1" placeholder="Bonnet" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Cap Type</label>
                                        <input type="text" class="form-control" name="cap_type1" placeholder="cap type" required>

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Config Univ 2</label>
                                        <input type="text" class="form-control" name="config_univ21" placeholder="config unit2" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Alternate Relief</label>
                                        <input type="text" class="form-control" name="alternate_relief1" placeholder="alternate_relief" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Area</label>
                                        <input type="text" class="form-control" name="area1" placeholder="Area" required>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Restricted Lift</label>
                                        <input type="text" class="form-control" name="restricted_lift1" placeholder="restricted lift" required>

                                    </div>
                                </div>
                        </div>
                        </div>
                        <div class="tab-pane" id="tab-attribute">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Set Pressure</label>
                                        <input type="text" class="form-control" name="set_pressure3"  placeholder="Set Pressure">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">MAWP</label>
                                        <input type="text" class="form-control" name="mawp3" placeholder="MAWP" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Back Pressure</label>
                                        <input type="text" class="form-control" name="back_pressure3" placeholder="Back Pressure" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">ASME Capacity</label>
                                        <input type="text" class="form-control" name="asme_capacity3" placeholder="ASME Capacity" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">If Required</label>
                                        <input type="text" class="form-control" name="required3" placeholder="If Required" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Blow Down</label>
                                        <input type="text" class="form-control" name="blow_down3"  placeholder="blow_down">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Set Pressure</label>
                                        <input type="text" class="form-control" name="set_pressure13" placeholder="Set Pressure" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Capacity</label>
                                        <input type="text" class="form-control" name="capacity3" placeholder="Capacity" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Temperature</label>
                                        <input type="text" class="form-control" name="temperature3" placeholder="Temperature">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mode Number</label>
                                        <input type="text" class="form-control" name="model_number3" placeholder="model number" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Operating Temp</label>
                                        <input type="text"  class="form-control" name="operating_temp3" placeholder="operating temp" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Operating Press</label>
                                        <input type="text" class="form-control" name="operating_press3" placeholder="operating press" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Cold Diff Set Press</label>
                                        <input type="text" class="form-control" name="cold_diff3" placeholder="Cold Diff Set Press" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Amount Constant</label>
                                        <input type="text" class="form-control" name="amount_constant3" placeholder="Amount Constant" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Req Blow Down</label>
                                        <input type="text" class="form-control" name="req_blow_down3" placeholder="Req Blow Down" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Set Pressure</label>
                                        <input type="date" class="form-control" name="set_pressure23" placeholder="Set Pressure" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Capacity</label>
                                        <input type="text" class="form-control" name="capacity23" placeholder="Capacity" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Temperature</label>
                                        <input type="text" class="form-control" name="temperature23" placeholder="Temperature">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Mode Number</label>
                                        <input type="text" class="form-control" name="model_number23" placeholder="model number" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Prev Require Company</label>
                                        <input type="text" class="form-control" name="repair_company3" placeholder="Prev Require Company" >
                                    </div>
                                </div>



                            </div>


                        </div>
                        <div class="tab-pane" id="tab-four">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Received</label>
                                        <input type="date" class="form-control" name="date_received5" placeholder="Date Received" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Received By</label>
                                        <input type="text" class="form-control" name="received_by5" placeholder="Received By" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Rec Universal</label>
                                        <input type="text" class="form-control" name="universal5" placeholder="Rec Universal" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Dicmb/insp By</label>
                                        <input type="text" class="form-control" name="dismb5"  placeholder="Dicmb insp By">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Maintenance</label><br/>
                                        <input type="checkbox" name="maintenance_is5" value="Scheduled">Scheduled
                                        <input type="checkbox" name="maintenance_is5" value="Unscheduled" checked>Unscheduled
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">For</label>
                                        <input type="text" class="form-control" name="for5" placeholder="for" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Special Cleaning Req'd</label><br/>
                                        <input type="checkbox" name="special_cleaning5" value="0">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Due Date</label>
                                        <input type="date" class="form-control" name="date5" placeholder="due date" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Pretest</label><br/>
                                        <input type="checkbox" name="pretest5" value="performed">Performed  
                                        <input type="checkbox" name="pretest5" value="notperformed" checked>Not performed
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Prepop Reason</label>
                                        <input type="text" class="form-control" name="prepop_reason5" placeholder="Prepop Reason" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Prepop Reason1</label>
                                        <input type="text" class="form-control" name="prepop_reason25" placeholder="Prepop Reason1" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">popped@</label>
                                        <input type="text" class="form-control" name="propped5" placeholder="popped@" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Leak Test</label>
                                        <input type="text" class="form-control" name="leak_test5" placeholder="Leak Test" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">@</label>
                                        <input type="text" class="form-control" name="option5" placeholder="@" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Comp Screw Recd</label>
                                        <input type="date" class="form-control" name="comp_screw_recd5" placeholder="Comp Screw Recd" >
                                    </div>
                                </div>

                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="form-label">Nameplate</label>--}}
                                        {{--<input type="text" class="form-control" name="prev_repair_compant5" placeholder="nameplate" >--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Seal</label>
                                        <input type="text" class="form-control" name="seal_id5" placeholder="Seal" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Prev Repair Company</label>
                                        <input type="text" class="form-control" name="prev_repair_compant5" placeholder="Prev Repair Company" >
                                    </div>
                                </div>
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label class="form-label">Seal ID</label>--}}
                                        {{--<input type="date" class="form-control" name="seal_id" placeholder="Seal ID" >--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-five">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Repair Company</label>
                                        <input type="text" class="form-control" name="repair_company4" placeholder="repair company" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Date Tested</label>
                                        <input type="date" class="form-control" name="date_tested4"  placeholder="Date Tested">
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Assembled By</label>
                                        <input type="text" class="form-control" name="assembled_by4" placeholder="Assembled By" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Test Media</label>
                                        <input type="text" class="form-control" name="test_media4" placeholder="test media" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Gaug 1</label>
                                        <input type="text" class="form-control" name="gauge14" placeholder="Gaug 1">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Test Uni1</label>
                                        <input type="text" class="form-control" name="test_univ24" placeholder="Test Uni1" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Tested By</label>
                                        <input type="text"  class="form-control" name="test_by4" placeholder="Tested By" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Witnessed By</label>
                                        <input type="text" class="form-control" name="witnessed_by4" placeholder="Witnessed By" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Gaug 2</label>
                                        <input type="text" class="form-control" name="gauge24" placeholder="Gaug 2">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Final Test Press</label>
                                        <input type="text" class="form-control" name="finial_test4" placeholder="Final Test Press" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Reseat Press</label>
                                        <input type="text" class="form-control" name="reset_press4" placeholder="Reseat Press" >
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Blow Down</label>
                                        <input type="text" class="form-control" name="blow_down4" placeholder="Blow Down" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Measured Lift</label>
                                        <input type="text" class="form-control" name="measured_lift4" placeholder="Measured Lift" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Db Ring Up</label>
                                        <input type="text" class="form-control" name="ring_up4" placeholder="Db Ring Up" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Next Maint Is</label><br/>
                                        <input type="checkbox" name="next_maint_is4"   value="Scheduled">Scheduled
                                        <input type="checkbox" name="next_maint_is4" value="Unscheduled" checked>Unscheduled
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">For</label>
                                        <input type="text" class="form-control" name="for4" placeholder="for" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Replace Valve Next Repair</label><br/>
                                        <input type="checkbox" name="replace_valve_next4"   value="1">Scheduled
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Leakage Rate</label>
                                        <input type="text" class="form-control" name="leaking_reate4" placeholder="Leakage Rate" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">@</label>
                                        <input type="text" class="form-control" name="option14" placeholder="@" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Back Press Test</label>
                                        <input type="text" class="form-control" name="back_press_test4" placeholder="Back Press Test" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">@</label>
                                        <input type="text" class="form-control" name="option24" placeholder="@" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Comp Screw Set</label>
                                        <input type="text" class="form-control" name="comp_screw_test4" placeholder="Comp Screw Set" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Overlap Collar</label>
                                        <input type="text" class="form-control" name="over_lap4" placeholder="Overlap Collar" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">BD Ring - lower</label>
                                        <input type="text" class="form-control" name="bd_ring4" placeholder="BD Ring - lower" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Next Maint Date</label>
                                        <input type="date" class="form-control" name="next_main_date4" placeholder="Next Maint Date" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Next Test Date</label>
                                        <input type="date" class="form-control" name="next_test_date4" placeholder="next test date" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Comment</label>
                                        <textarea name="comment4"class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane" id="tab-six">
                            <div class="row">


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured16" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers16" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured26" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers26" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured36" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers36" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured46" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers46" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured56" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers56" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured66" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers66" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured76" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers76" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured86" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers86" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured96" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers96" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undefined Equipment</label>
                                        <input type="text" class="form-control" name="measured106" placeholder="measured" >
                                        <input type="text" class="form-control" name="manufactuers106" placeholder="manufacturers Min/Max" >

                                    </div>
                                </div>



                            </div>


                        </div>
                        <div class="tab-pane" id="tab-seven">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment11" placeholder="measured" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment12" placeholder="measured" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment13" placeholder="measured" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment14" placeholder="measured" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment15" placeholder="measured" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment16" placeholder="measured" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment17" placeholder="measured" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment18" placeholder="measured" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment19" placeholder="measured" >

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment110" placeholder="measured" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment111" placeholder="measured" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Undef Equip</label>
                                        <input type="text" class="form-control" name="equipment112" placeholder="measured" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Parts Cost</label>
                                        <input type="text" class="form-control" name="parts_cost2" placeholder="parts costs" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">labor Cost</label>
                                        <input type="text" class="form-control" name="labor_cost2" placeholder="labor costs" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Misc Cost</label>
                                        <input type="text" class="form-control" name="misc_cost2" placeholder="misc costs" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">handing Cost</label>
                                        <input type="text" class="form-control" name="handing_cost2" placeholder="handing costs" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Total Cost</label>
                                        <input type="text" class="form-control" name="total_cost2" placeholder="total costs" >

                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Total Repair Time</label>
                                        <input type="text" class="form-control" name="total_repair_time2" placeholder="total repair time" >

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Field Time</label>
                                        <input type="text" class="form-control" name="field_time2" placeholder="field time" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">QC Inspector</label>
                                        <input type="text" class="form-control" name="qc_inspector2" placeholder="QC Inspector" >

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Comment</label>
                                        <input type="text" class="form-control" name="comment2" placeholder="QC Inspector" >

                                    </div>
                                </div>

                            </div>


                        </div>
                        <div class="tab-pane" id="tab-eight">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Images</label>
                                        <input type="file" class="form-control" name="images" multiple required>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">



                    </div>
                                    </div>
         <button type="submit" class="btn btn-primary" >

             {{ __('Add Equipment') }}

         </button>
     </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
     <script>
         var  partid=null;

         var table = $('#example').DataTable();


         $('#example tbody').on( 'click', 'tr', function () {


             if ( $(this).hasClass('selected') ) {
                 $(this).removeClass('selected');
                 partid=null;
                 $('#part').val('');

             }
             else {
                 table.$('tr.selected').removeClass('selected');
                 $(this).addClass('selected');
                 partid=table.row( this ).data()[0] ;
                 $('#part').val(partid);

             }
         } );




     </script>


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

