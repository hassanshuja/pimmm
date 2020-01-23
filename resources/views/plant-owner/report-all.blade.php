@extends('layouts.master')
@section('content')

    <!-- [ chat message ] end -->


    <!-- [ Main Content ] start -->









    <div class="own-report">
        <form action="/storeNewEquipemtn" method="post" enctype="multipart/form-data" >
              {{--class="form-horizontal">--}}
            <input type="hidden" name="part" id="part">
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


                </div>


                {!! csrf_field() !!}

                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-report" data-toggle="tab">Equip List & Reports</a></li>

                    <li><a href="#tab-data" data-toggle="tab">Equip Data Sheets</a></li>
                    <li><a href="#notes" data-toggle="tab">Notes</a></li>
                    <li><a href="#new" data-toggle="tab">New/Existing Repair Jobs</a></li>
                    <li><a href="#loc" data-toggle="tab">Equip Location</a></li>
                    <li><a href="#loop" data-toggle="tab">Equip Links/Loops</a></li>


                </ul>
                <div class="tab-content">
                    <div class="tab-pane " id="tab-data">
                            {!! csrf_field() !!}

                            <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-gen" data-toggle="tab">General</a></li>
                            <li><a href="#tab-links" data-toggle="tab">Valve Gonfig</a></li>
                            <li><a href="#tab-attribute" data-toggle="tab">Process / Nameplates</a></li>
                            <li><a href="#tab-four" data-toggle="tab">Con'd / Parts</a></li>
                            <li><a href="#tab-five" data-toggle="tab">Test Date</a></li>
                            <li><a href="#tab-six" data-toggle="tab">Critical Dim's</a></li>
                            <li><a href="#tab-seven" data-toggle="tab">Costs QC</a></li>
                            <li><a href="#tab-eight" data-toggle="tab">Images</a></li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-gen">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tag number</label>
                                            <input type="text" class="form-control" name="tag_number"
                                                   placeholder="tag_number" >

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Unit vessel</label>
                                            <!--<input type="text" class="form-control" name="unit_vessel" placeholder="unit_vessel" >-->
                                            <select id="drop1" name="unit_vessel" class="form-control small-box" >
                                                <option value="#1 Compressor">#1 Compressor</option>
                                                <option value="#2 Compressor" >#2 Compressor</option>
                                                <option value="Glycol Filter" >Glycol Filter</option>
                                                <option value="Glycol Pump" >Glycol Pump</option>
                                                <option value="Seperator" >Seperator</option>
                                                <option value="Startup Gas">Startup Gas</option>
                                                <option value="Treater">Treater</option>
                                                <option value="Fuel Gas">Fuel Gas</option>
                                            </select>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(1)" id="edit1">Edit</a><a class="delete" onclick="deletedrop(1)" >Delete</a><a class="add" id="add1">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <select id="drop2" name="name" class="form-control small-box" >
                                                <option value="#1 Compressor">#1 Compressor</option>
                                                <option value="#2 Compressor" >#2 Compressor</option>
                                                <option value="Glycol Filter" >Glycol Filter</option>
                                                <option value="Glycol Pump" >Glycol Pump</option>
                                                <option value="Seperator" >Seperator</option>
                                                <option value="Startup Gas">Startup Gas</option>
                                                <option value="Treater">Treater</option>
                                                <option value="Fuel Gas">Fuel Gas</option>
                                            </select>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(2)" id="edit2">Edit</a><a class="delete" onclick="deletedrop(2)" >Delete</a><a class="add" id="add2">Add</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <!--<input type="text" class="form-control" name="status" placeholder="status" >-->
                                            <select id="drop3" name="status" class="form-control small-box" >
                                                <option>Active</option>
                                                <option>Inactive</option>
                                                <option>Spare</option>
                                                <option>Junk</option>
                                                <option>Missing</option>
                                                <option>Replaced</option>
                                                <option>New</option>
                                                <option>Transferred</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(3)" id="edit3">Edit</a><a class="delete" onclick="deletedrop(3)" >Delete</a><a class="add" id="add3">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Universal 1</label>
                                            <select id="drop4" name="universal1" class="form-control small-box" >
                                                <option>Active</option>
                                                <option>Inactive</option>
                                                <option>Spare</option>
                                                <option>Junk</option>
                                                <option>Missing</option>
                                                <option>Replaced</option>
                                                <option>New</option>
                                                <option>Transferred</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(4)" id="edit4">Edit</a><a class="delete" onclick="deletedrop(4)" >Delete</a><a class="add" id="add4">Add</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Model number</label>
                                            <input type="text" name="model_number" class="form-control" name="model_number"
                                                   placeholder="model_number" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nb Registratio</label>
                                            <input type="text" class="form-control" name="nb_registration"
                                                   placeholder="nb_registration" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Sizing Basic</label>
                                            <!-- <input type="text" class="form-control" name="sizing_text" placeholder="Sizing Basic" >-->
                                            <select id="drop5" name="sizing_text" class="form-control small-box" >
                                                <option>Blocked Flow</option>
                                                <option>Liquid Expansion</option>
                                                <option>Fire-Gas Expan</option>
                                                <option>Tube Rupture</option>
                                                <option>Thermal Expansion</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(5)" id="edit5">Edit</a><a class="delete" onclick="deletedrop(5)" >Delete</a><a class="add" id="add5">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Purshase Price</label>
                                            <input type="text" class="form-control" name="purchase_price"
                                                   placeholder="purshase price" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Service</label>
                                            <!--<input type="text" class="form-control" name="service" placeholder="Service" >-->
                                            <select name="service" class="form-control small-box" >
                                                <option>Compressible</option>
                                                <option>Mon-compressible</option>
                                                <option>Steam</option>
                                                <option>Saturated Steam</option>
                                                <option>Thermal Relief</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(6)" id="edit6">Edit</a><a class="delete" onclick="deletedrop(6)" >Delete</a><a class="add" id="add6">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Code Stamp</label>
                                            <!--  <input type="text" class="form-control" name="code_stamp" placeholder="code_stamp" >-->
                                            <select name="code_stamp" id="drop7" class="form-control small-box" >
                                                <option>Sec VIII</option>
                                                <option>Sec I</option>
                                                <option>Sec III</option>
                                                <option>Sec IV</option>
                                                <option>Non-code</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(7)" id="edit7">Edit</a><a class="delete" onclick="deletedrop(7)" >Delete</a><a class="add" id="add7">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Serial Number</label>
                                            <input type="text" class="form-control" name="serial_number"
                                                   placeholder="serial number" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Device Type</label>
                                            <!--<input type="text" class="form-control" name="device_type" placeholder="device_type" >-->
                                            <select id="drop8" class="form-control small-box" name="device_type">
                                                <option>Relief Valve</option>
                                                <option>Tank Vent</option>
                                                <option>Rupture Disk</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(8)" id="edit8">Edit</a><a class="delete" onclick="deletedrop(8)" >Delete</a><a class="add" id="add8">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Equipment Location</label>
                                            <!--  <input type="text" class="form-control" name="equipment_location" placeholder="location_type" >-->
                                            <select id="drop9" class="form-control small-box" name="equipment_location">
                                                <option>1st Stage Discharge</option>
                                                <option>2nd Stage Discharge</option>
                                                <option>3rd Stage Discharge</option>
                                                <option>Accumulator</option>
                                                <option>Boiler</option>
                                                <option>Cement Tank</option>
                                                <option>Compressor</option>
                                                <option>Dehy Tower</option>
                                                <option>Dehydration Pot</option>
                                                <option>Fuel Gas Scrubber</option>
                                                <option>Pump Jack Fuel Gas</option>
                                                <option>Fuel Gas Comp.</option>
                                                <option>Fuel Gas Separator</option>
                                                <option>Glycol Filter</option>
                                                <option>Inlet Separator</option>
                                                <option>Ln.Htr.Fuel Gas Scr.</option>
                                                <option>Protect Trailer</option>
                                                <option>Receiver</option>
                                                <option>Reboiler</option>
                                                <option>Separator</option>
                                                <option>Start Gas Comp.</option>
                                                <option>Test Separator</option>
                                                <option>Meter Skid</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(9)" id="edit9">Edit</a><a class="delete" onclick="deletedrop(9)" >Delete</a><a class="add" id="add9">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Equipment Link</label>
                                            <select id="drop10" class="form-control small-box" name="equipment_link">
                                                <option>Relief Valve</option>
                                                <option>Tank Vent</option>
                                                <option>Rupture Disk</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(10)" id="edit10">Edit</a><a class="delete" onclick="deletedrop(10)" >Delete</a><a class="add" id="add10">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Job Number</label>
                                            <select id="drop11" class="form-control small-box" name="job_number">
                                                <option>Relief Valve</option>
                                                <option>Tank Vent</option>
                                                <option>Rupture Disk</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(11)" id="edit11">Edit</a><a class="delete" onclick="deletedrop(11)" >Delete</a><a class="add" id="add11">Add</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Manufacturer</label>
                                            <!-- <input type="text" class="form-control" name="manufacturer" placeholder="manufacturer" >-->
                                            <select id="drop12" name="manufacturer" class="form-control small-box">
                                                <option>AG</option>
                                                <option>Anderson</option>
                                                <option>Axelson</option>
                                                <option>Blackmer</option>
                                                <option>Baired</option>
                                                <option>Crosby</option>
                                                <option>Consolidated</option>
                                                <option>Cemco</option>
                                                <option>Conbraco</option>
                                                <option>Farris</option>
                                                <option>Fisher</option>
                                                <option>Swagelok</option>
                                                <option>Hydroseal</option>
                                                <option>Invalco</option>
                                                <option>Kunkle</option>
                                                <option>Leser</option>
                                                <option>Lonergan</option>
                                                <option>Mercer</option>
                                                <option>Shand Jars</option>
                                                <option>Reggo</option>
                                                <option>Steuby</option>
                                                <option>Taylor</option>
                                                <option>Wellmark</option>
                                                <option>Watts</option>

                                                <option>Nupro</option>
                                                <option>kimray</option>
                                                <option>JAMES MORRISON</option>

                                                <option>C.DL..ST.L</option>
                                                <option>Conrader</option>
                                                <option>STL.MO</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(12)" id="edit12">Edit</a><a class="delete" onclick="deletedrop(12)" >Delete</a><a class="add" id="add12">Add</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Registration</label>
                                            <input type="text" class="form-control" name="registration"
                                                   placeholder="registration" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Universal 2</label>
                                            <select id="drop13" class="form-control small-box" name="universal2">
                                                <option>Relief Valve</option>
                                                <option>Tank Vent</option>
                                                <option>Rupture Disk</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(13)" id="edit13">Edit</a><a class="delete" onclick="deletedrop(13)" >Delete</a><a class="add" id="add13">Add</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Risk </label><br/>
                                            <!-- <input type="text" class="form-control" name="risk" placeholder="risk" >-->
                                            <select id="drop14" class="form-control small-box" name="risk">
                                                <option>Critical</option>
                                                <option>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                                <option>None</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(14)" id="edit14">Edit</a><a class="delete" onclick="deletedrop(14)" >Delete</a><a class="add" id="add14">Add</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Product</label>
                                            <select id="drop15" class="form-control small-box" name="product">
                                                <option>Critical</option>
                                                <option>High</option>
                                                <option>Medium</option>
                                                <option>Low</option>
                                                <option>None</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(15)" id="edit15">Edit</a><a class="delete" onclick="deletedrop(15)" >Delete</a><a class="add" id="add15">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Code </label>
                                            <!--    <input type="text" class="form-control" name="code_" placeholder="code " >-->
                                            <select id="drop16" class="form-control small-box" name="code_">
                                                <option>Sec VIII</option>
                                                <option>Sec I</option>
                                                <option>Sec III</option>
                                                <option>Sec IV</option>
                                                <option>Non-code</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(16)" id="edit16">Edit</a><a class="delete" onclick="deletedrop(16)" >Delete</a><a class="add" id="add16">Add</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Capacity</label>
                                            <input type="text" class="form-control" name="capacity"
                                                   placeholder="capacity" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane" id="tab-links">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Inlet Size</label>
                                            <input type="text" class="form-control" name="inlet_size1"
                                                   placeholder="inlet Size" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Inlet Rating</label>
                                            <!--<input type="text" class="form-control" name="inlet_rating1" placeholder="Inlet Size" >-->
                                            <select id="drop17" class="form-control small-box" name="inlet_rating1">
                                                <option>150#</option>
                                                <option>300#</option>
                                                <option>300#(Light)</option>
                                                <option>600#</option>
                                                <option>900#</option>
                                                <option>1500#</option>
                                                <option>2500#</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(17)" id="edit17">Edit</a><a class="delete" onclick="deletedrop(17)" >Delete</a><a class="add" id="add17">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Inlet Facing</label>
                                            <!--<input type="text" class="form-control" name="inlet_facing1" placeholder="inlet_facing" >-->
                                            <select id="drop18" class="form-control small-box" name="inlet_facing1">
                                                <option>BW</option>
                                                <option>FNPT</option>
                                                <option>Grayloc</option>
                                                <option>MNPT</option>
                                                <option>RF</option>
                                                <option>RFSF 125 AARH</option>
                                                <option>RFSF 63 AARH</option>
                                                <option>SW</option>
                                                <option>WN</option>
                                                <option>FLG</option>
                                                <option>RTJ</option>
                                                <option>Open</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(18)" id="edit18">Edit</a><a class="delete" onclick="deletedrop(18)" >Delete</a><a class="add" id="add18">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Inlet Other</label>
                                            <!--<input type="text" class="form-control" name="inlet_other1" placeholder="inlet_other" >-->
                                            <select id="drop19" class="form-control small-box" name="inlet_other1">
                                                <option>None</option>
                                                <option>Selector Valve</option>
                                                <option>Block Valve</option>
                                                <option>Block Valve-Sealed</option>
                                                <option>Block Valve-Open</option>
                                                <option>Block Valve-Closed</option>
                                                <option>Block Sealed Open</option>
                                                <option>Block Sealed Closed</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(19)" id="edit19">Edit</a><a class="delete" onclick="deletedrop(19)" >Delete</a><a class="add" id="add19">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Soft Seat Mat 1</label>
                                            <!-- <input type="text" class="form-control" name="soft_seat_mat11" placeholder="soft seat" >-->
                                            <select id="drop20" class="form-control small-box" name="soft_seat_mat11">
                                                <option>Metal</option>
                                                <option>Soft</option>
                                                <option>Teflon</option>
                                                <option>PTFE</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(20)" id="edit20">Edit</a><a class="delete" onclick="deletedrop(20)" >Delete</a><a class="add" id="add20">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Body Matrial</label>
                                            <!-- <input type="text" class="form-control" name="body_material1" placeholder="body matrial" >-->
                                            <select id="drop21" class="form-control small-box" name="body_material1">
                                                <option>Carbon Steel</option>
                                                <option>Chrome-moly</option>
                                                <option>316 SS</option>
                                                <option>304 SS</option>
                                                <option>Cast Iron</option>
                                                <option>Alumium</option>
                                                <option>Inconel</option>
                                                <option>Monel</option>
                                                <option>Hastelloy C</option>
                                                <option>Hastelloy B</option>
                                                <option>Titanium</option>
                                                <option>Nickel</option>
                                                <option>Alloy 20</option>
                                                <option>Chrome Alloy</option>
                                                <option>Brass</option>
                                                <option>Alloy Steel</option>
                                                <option>Bronze</option>
                                                <option>Tungston Steel</option>
                                                <option>Sp/Nace</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(21)" id="edit21">Edit</a><a class="delete" onclick="deletedrop(21)" >Delete</a><a class="add" id="add21">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Trim Matrial</label>
                                            <!-- <input type="text" class="form-control" name="trim_material1" placeholder="trim matrial" >-->
                                            <select id="drop22" class="form-control small-box" name="trim_material1">
                                                <option>Carbon Steel</option>
                                                <option>Chrome-moly</option>
                                                <option>316 SS</option>
                                                <option>304 SS</option>
                                                <option>Cast Iron</option>
                                                <option>Alumium</option>
                                                <option>Inconel</option>
                                                <option>Monel</option>
                                                <option>Hastelloy C</option>
                                                <option>Hastelloy B</option>
                                                <option>Titanium</option>
                                                <option>Nickel</option>
                                                <option>Alloy 20</option>
                                                <option>Chrome Alloy</option>
                                                <option>Brass</option>
                                                <option>Alloy Steel</option>
                                                <option>Bronze</option>
                                                <option>Tungston Steel</option>
                                                <option>Sp/Nace</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(22)" id="edit22">Edit</a><a class="delete" onclick="deletedrop(22)" >Delete</a><a class="add" id="add22">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Spring Number</label>
                                            <input type="text" class="form-control" name="spring_number1"
                                                   placeholder="spring number" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Spring Matrial</label>
                                            <!--    <input type="text" class="form-control" name="spring_material1" placeholder="spring matrial" >-->
                                            <select id="drop23" class="form-control small-box" name="spring_material1">
                                                <option>Carbon Steel</option>
                                                <option>Chrome-moly</option>
                                                <option>316 SS</option>
                                                <option>304 SS</option>
                                                <option>Cast Iron</option>
                                                <option>Alumium</option>
                                                <option>Inconel</option>
                                                <option>Monel</option>
                                                <option>Hastelloy C</option>
                                                <option>Hastelloy B</option>
                                                <option>Titanium</option>
                                                <option>Nickel</option>
                                                <option>Alloy 20</option>
                                                <option>Chrome Alloy</option>
                                                <option>Brass</option>
                                                <option>Alloy Steel</option>
                                                <option>Bronze</option>
                                                <option>Tungston Steel</option>
                                                <option>Sp/Nace</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(23)" id="edit23">Edit</a><a class="delete" onclick="deletedrop(23)" >Delete</a><a class="add" id="add23">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Style</label>
                                            <select id="drop24" class="form-control small-box" name="style1">
                                                <option>FLG-Conv</option>
                                                <option>FLG-Bellows</option>
                                                <option>Threaded</option>
                                                <option>Pilot</option>
                                                <option>Butt Weld x Flg</option>
                                                <option>Thermal</option>
                                                <option>Tank Vent</option>
                                                <option>Rupture Disk</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(24)" id="edit24">Edit</a><a class="delete" onclick="deletedrop(24)" >Delete</a><a class="add" id="add24">Add</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Traveller</label>
                                            <!--put type="text" class="form-control" name="traveller1" placeholder="traveller" >-->
                                            <select id="drop25" class="form-control small-box" name="traveller1">
                                                <option>Default</option>
                                                <option>SRV</option>
                                                <option>Threaded</option>
                                                <option>Safety</option>
                                                <option>Pilot</option>
                                                <option>Power Actuated</option>
                                                <option>Tank Vent</option>
                                                <option>Rupture Disk</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(25)" id="edit25">Edit</a><a class="delete" onclick="deletedrop(25)" >Delete</a><a class="add" id="add25">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Class</label>
                                            <input type="text" class="form-control" name="class1" placeholder="class"
                                                   >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Discharges To</label>
                                            <input type="text" class="form-control" name="discharges_to1"
                                                   placeholder="discharges to" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Office Designation</label>
                                            <!-- <input type="text" class="form-control" name="orifice_designation1" placeholder="office designation" >-->
                                            <select id="drop26" class="form-control small-box" name="orifice_designation1">
                                                <option>D</option>
                                                <option>E</option>
                                                <option>F</option>
                                                <option>G</option>
                                                <option>H</option>
                                                <option>J</option>
                                                <option>K</option>
                                                <option>L</option>
                                                <option>M</option>
                                                <option>N</option>
                                                <option>P</option>
                                                <option>Q</option>
                                                <option>R</option>
                                                <option>T</option>
                                                <option>W</option>
                                                <option>W2</option>
                                                <option>X</option>
                                                <option>Y</option>
                                                <option>Z</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(26)" id="edit26">Edit</a><a class="delete" onclick="deletedrop(26)" >Delete</a><a class="add" id="add26">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Mfg Lift</label>
                                            <input type="text" class="form-control" name="mfg_lift1"
                                                   placeholder="mfg_lift" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Outet Size</label>
                                            <input type="text" class="form-control" name="outlet_size1"
                                                   placeholder="outet size" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Outlet Rating</label>
                                            <!--<input type="text" class="form-control" name="outlet_rating1" placeholder="Outlet Rating" >-->
                                            <select id="drop27" class="form-control small-box" name="outlet_rating1">
                                                <option>150#</option>
                                                <option>300#</option>
                                                <option>300#(Light)</option>
                                                <option>600#</option>
                                                <option>900#</option>
                                                <option>1500#</option>
                                                <option>2500#</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(27)" id="edit27">Edit</a><a class="delete" onclick="deletedrop(27)" >Delete</a><a class="add" id="add27">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Outlet Facing</label>
                                            <!--<input type="text" class="form-control" name="outlet_facing1" placeholder="Outlet Rating" >-->
                                            <select id="drop28" class="form-control small-box" name="outlet_facing1">
                                                <option>BW</option>
                                                <option>FNPT</option>
                                                <option>Grayloc</option>
                                                <option>MNPT</option>
                                                <option>RF</option>
                                                <option>RFSF 125 AARH</option>
                                                <option>RFSF 63 AARH</option>
                                                <option>SW</option>
                                                <option>WN</option>
                                                <option>FLG</option>
                                                <option>RTJ</option>
                                                <option>Open</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(28)" id="edit28">Edit</a><a class="delete" onclick="deletedrop(28)" >Delete</a><a class="add" id="add28">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Outlet Other</label>
                                            <!--<input type="text" class="form-control" name="outlet_other1" placeholder="Outlet Other" >-->
                                            <select id="drop29" class="form-control small-box" name="outlet_other1">
                                                <option>None</option>
                                                <option>Selector Valve</option>
                                                <option>Block Valve</option>
                                                <option>Block Valve-Sealed</option>
                                                <option>Block Valve-Open</option>
                                                <option>Block Valve-Closed</option>
                                                <option>Block Sealed Open</option>
                                                <option>Block Sealed Closed</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(29)" id="edit29">Edit</a><a class="delete" onclick="deletedrop(29)" >Delete</a><a class="add" id="add29">Add</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Config Universal</label>
                                            <input type="text" class="form-control" name="config_universal1"
                                                   placeholder="Config Universal" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Bonnet Material</label>
                                            <!--  <input type="text" class="form-control" name="bonnet_material1" placeholder="bonnet material" >-->
                                            <select id="drop30" class="form-control small-box" name="bonnet_material1">
                                                <option>Carbon Steel</option>
                                                <option>Chrome-moly</option>
                                                <option>316 SS</option>
                                                <option>304 SS</option>
                                                <option>Cast Iron</option>
                                                <option>Alumium</option>
                                                <option>Inconel</option>
                                                <option>Monel</option>
                                                <option>Hastelloy C</option>
                                                <option>Hastelloy B</option>
                                                <option>Titanium</option>
                                                <option>Nickel</option>
                                                <option>Alloy 20</option>
                                                <option>Chrome Alloy</option>
                                                <option>Brass</option>
                                                <option>Alloy Steel</option>
                                                <option>Bronze</option>
                                                <option>Tungston Steel</option>
                                                <option>Sp/Nace</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(30)" id="edit30">Edit</a><a class="delete" onclick="deletedrop(30)" >Delete</a><a class="add" id="add30">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Bellows Material</label>
                                            <!--  <input type="text" class="form-control" name="bellows_material1" placeholder="bellows material" >-->
                                            <select  id="31" class="form-control small-box" name="bellows_material1">
                                                <option>Carbon Steel</option>
                                                <option>Chrome-moly</option>
                                                <option>316 SS</option>
                                                <option>304 SS</option>
                                                <option>Cast Iron</option>
                                                <option>Alumium</option>
                                                <option>Inconel</option>
                                                <option>Monel</option>
                                                <option>Hastelloy C</option>
                                                <option>Hastelloy B</option>
                                                <option>Titanium</option>
                                                <option>Nickel</option>
                                                <option>Alloy 20</option>
                                                <option>Chrome Alloy</option>
                                                <option>Brass</option>
                                                <option>Alloy Steel</option>
                                                <option>Bronze</option>
                                                <option>Tungston Steel</option>
                                                <option>Sp/Nace</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(31)" id="edit31">Edit</a><a class="delete" onclick="deletedrop(31)" >Delete</a><a class="add" id="add31">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Spring Range From</label>
                                            <input type="text" class="form-control" name="spring_range_from1"
                                                   placeholder="spring range from" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Spring Range To</label>
                                            <input type="text" class="form-control" name="spring_range_to1"
                                                   placeholder="spring range to" >

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Bonnet</label>
                                            <!--<input type="text" class="form-control" name="bonnet1" placeholder="Bonnet" >-->
                                            <select id="drop32" class="form-control small-box" name="bonnet1">
                                                <option>Open</option>
                                                <option>Closed</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(32)" id="edit32">Edit</a><a class="delete" onclick="deletedrop(32)" >Delete</a><a class="add" id="add32">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Cap Type</label>
                                            <!--input type="text" class="form-control" name="cap_type1" placeholder="cap type" >-->
                                            <select id="drop33" class="form-control small-box" name="cap_type1">
                                                <option>Plain</option>
                                                <option>Closed</option>
                                                <option>Open</option>
                                                <option>Packed Lever</option>
                                                <option>Open Lever</option>
                                                <option>Bolted</option>
                                                <option>Screwed</option>
                                                <option>Remotor</option>
                                                <option>Throttle Lever</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(33)" id="edit33">Edit</a><a class="delete" onclick="deletedrop(33)" >Delete</a><a class="add" id="add33">Add</a></div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Config Univ 2</label>
                                            <input type="text" class="form-control" name="config_univ21"
                                                   placeholder="config unit2" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Alternate Relief</label>
                                            <input type="text" class="form-control" name="alternate_relief1"
                                                   placeholder="alternate_relief" >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Area</label>
                                            <input type="text" class="form-control" name="area1" placeholder="Area"
                                                   >

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Restricted Lift</label>
                                            <input type="text" class="form-control" name="restricted_lift1"
                                                   placeholder="restricted lift" >

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-attribute">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Set Pressure</label>
                                            <input type="text" class="form-control" name="set_pressure3"
                                                   placeholder="Set Pressure">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">MAWP</label>
                                            <input type="text" class="form-control" name="mawp3" placeholder="MAWP">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Back Pressure</label>
                                            <input type="text" class="form-control" name="back_pressure3"
                                                   placeholder="Back Pressure">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">ASME Capacity</label>
                                            <input type="text" class="form-control" name="asme_capacity3"
                                                   placeholder="ASME Capacity">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">If </label>
                                            <!--<input type="text" class="form-control" name="3" placeholder="If " >-->
                                            <select id="drop34" class="form-control small-box" name="3">
                                                <option>None</option>
                                                <option>Constant</option>
                                                <option>Variable</option>
                                                <option>Both</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(34)" id="edit34">Edit</a><a class="delete" onclick="deletedrop(34)" >Delete</a><a class="add" id="add34">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Blow Down</label>
                                            <!--<input type="text" class="form-control" name="blow_down3"  placeholder="blow_down">-->
                                            <select id="drop35" class="form-control small-box" name="blow_down3">
                                                <option>None</option>
                                                <option>3%</option>
                                                <option>4%</option>
                                                <option>7%</option>
                                                <option>10%</option>
                                                <option>Fixed</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(35)" id="edit35">Edit</a><a class="delete" onclick="deletedrop(35)" >Delete</a><a class="add" id="add35">Add</a></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Set Pressure</label>
                                            <input type="text" class="form-control" name="set_pressure13"
                                                   placeholder="Set Pressure">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Capacity</label>
                                            <input type="text" class="form-control" name="capacity3"
                                                   placeholder="Capacity">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Temperature</label>
                                            <input type="text" class="form-control" name="temperature3"
                                                   placeholder="Temperature">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Mode Number</label>
                                            <input type="text" class="form-control" name="model_number3"
                                                   placeholder="model number">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Operating Temp</label>
                                            <input type="text" class="form-control" name="operating_temp3"
                                                   placeholder="operating temp">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Operating Press</label>
                                            <input type="text" class="form-control" name="operating_press3"
                                                   placeholder="operating press">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Cold Diff Set Press</label>
                                            <input type="text" class="form-control" name="cold_diff3"
                                                   placeholder="Cold Diff Set Press">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Amount Constant</label>
                                            <input type="text" class="form-control" name="amount_constant3"
                                                   placeholder="Amount Constant">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Req Blow Down</label>
                                            <input type="text" class="form-control" name="req_blow_down3"
                                                   placeholder="Req Blow Down">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Set Pressure</label>
                                            <input type="date" class="form-control" name="set_pressure23"
                                                   placeholder="Set Pressure">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Capacity</label>
                                            <input type="text" class="form-control" name="capacity23"
                                                   placeholder="Capacity">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Temperature</label>
                                            <input type="text" class="form-control" name="temperature23"
                                                   placeholder="Temperature">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Mode Number</label>
                                            <input type="text" class="form-control" name="model_number23"
                                                   placeholder="model number">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Prev Require Company</label>
                                            <input type="text" class="form-control" name="repair_company3"
                                                   placeholder="Prev Require Company">
                                        </div>
                                    </div>


                                </div>


                            </div>
                            <div class="tab-pane" id="tab-four">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a class="wizrd">Part Wizard</a>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="#" class="partsheet">Part Sheet</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Date Received</label>
                                            <input type="date" class="form-control" name="date_received5"
                                                   placeholder="Date Received">
                                        </div>
                                    </div>
                                    {{--<div class="col-md-6">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<label class="form-label">Date Received</label>--}}
                                            {{--<input type="date" class="form-control" name="date_received5"--}}
                                                   {{--placeholder="Date Received">--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Received By</label>
                                            <!--<input type="text" class="form-control" name="received_by5" placeholder="Received By" >-->
                                            <select id="drop36" class="form-control small-box" name="received_by5">
                                                <option>Chris Pierce</option>
                                                <option>Chris Jorven</option>
                                                <option>Jordan Elliott</option>
                                                <option>Uwe Helm</option>
                                                <option>Tyler Tindill</option>
                                                <option>Kevin Labonte</option>
                                                <option>Kristin Neuffer</option>
                                                <option>Logan Little</option>
                                                <option>Art Bilodeau</option>
                                                <option>Andrew Raw</option>
                                                <option>Tyler Tindill</option>
                                                <option>Kaylin Williams</option>
                                                <option>Chad Schraeder</option>
                                                <option>Ed Pimm</option>
                                                <option>Ryan Sharp</option>
                                                <option>Kelsey Vonk</option>
                                                <option>Braden Pimm</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(36)" id="edit36">Edit</a><a class="delete" onclick="deletedrop(36)" >Delete</a><a class="add" id="add36">Add</a></div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Rec Universal</label>
                                            <!--<input type="text" class="form-control" name="universal5" placeholder="Rec Universal" >-->
                                            <select id="drop37" class="form-control small-box" name="universal5">
                                                <option>Last Service</option>
                                                <option>Unknown</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(37)" id="edit37">Edit</a><a class="delete" onclick="deletedrop(37)" >Delete</a><a class="add" id="add37">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Dicmb/insp By</label>
                                            <!--<input type="text" class="form-control" name="dismb5"  placeholder="Dicmb insp By">-->
                                            <select id="drop38" class="form-control small-box" name="dismb5">
                                                <option>Chris Pierce</option>
                                                <option>Chris Jorven</option>
                                                <option>Jordan Elliott</option>
                                                <option>Uwe Helm</option>
                                                <option>Tyler Tindill</option>
                                                <option>Kevin Labonte</option>
                                                <option>Kristin Neuffer</option>
                                                <option>Logan Little</option>
                                                <option>Art Bilodeau</option>
                                                <option>Andrew Raw</option>
                                                <option>Tyler Tindill</option>
                                                <option>Kaylin Williams</option>
                                                <option>Chad Schraeder</option>
                                                <option>Ed Pimm</option>
                                                <option>Ryan Sharp</option>
                                                <option>Kelsey Vonk</option>
                                                <option>Braden Pimm</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(38)" id="edit38">Edit</a><a class="delete" onclick="deletedrop(38)" >Delete</a><a class="add" id="add38">Add</a></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Maintenance</label><br/>
                                            <input type="radio" name="maintenance_is5" value="Scheduled">Scheduled
                                            <input type="radio" name="maintenance_is5" value="Unscheduled" checked>Unscheduled
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">For</label><br/>
                                            <!--<input type="text" class="form-control" name="for5" placeholder="for" >-->
                                            <select id="drop39" class="form-control small-box" name="for5">
                                                <option>Repair as reqd</option>
                                                <option>Pretest and repair</option>
                                                <option>Test Only</option>
                                                <option>Pretest Only</option>
                                                <option>Reset</option>
                                                <option>Fully repair</option>
                                                <option>Change Pres./Reset</option>
                                                <option>Repair/Change Pres.</option>
                                                <option>New Valve</option>
                                                <option>Customer Inventory</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(39)" id="edit39">Edit</a><a class="delete" onclick="deletedrop(39)" >Delete</a><a class="add" id="add39">Add</a></div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Special Cleaning Req'd</label><br/>
                                            <input type="checkbox" name="special_cleaning5" value="0" checked>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Due Date</label>
                                            <input type="date" class="form-control" name="date5" placeholder="due date">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Pretest</label><br/>
                                            <input type="radio" name="pretest5" value="performed">Performed
                                            <input type="radio" name="pretest5" value="notperformed" checked>Not
                                            performed
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Prepop Reason</label>
                                            <!--<input type="text" class="form-control" name="prepop_reason5" placeholder="Prepop Reason" >-->
                                            <select id="drop40" class="form-control small-box" name="prepop_reason5">
                                                <option>Passed</option>
                                                <option>Failed</option>
                                                <option>No Pop</option>
                                                <option>No Simmer</option>
                                                <option>Not requested</option>
                                                <option>Excessive leakage</option>
                                                <option>Simmer</option>
                                                <option>Stuck</option>
                                                <option>Full of product</option>
                                                <option>Acid valve</option>
                                                <option>Valve inoperative</option>
                                                <option>Leaked</option>
                                                <option>Request by Customer</option>
                                                <option>Pressure Change</option>
                                                <option></option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(40)" id="edit40">Edit</a><a class="delete" onclick="deletedrop(40)" >Delete</a><a class="add" id="add40">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Prepop Reason1</label>
                                            <!--  <input type="text" class="form-control" name="prepop_reason25" placeholder="Prepop Reason1" >-->
                                            <select id="drop41" class="form-control" name="prepop_reason25">
                                                <option>Passed</option>
                                                <option>Failed</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(41)" id="edit41">Edit</a><a class="delete" onclick="deletedrop(41)" >Delete</a><a class="add" id="add41">Add</a></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">popped@</label>
                                            <input type="text" class="form-control" name="propped5"
                                                   placeholder="popped@">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Leak Test</label>
                                            <!--<input type="text" class="form-control" name="leak_test5" placeholder="Leak Test" >-->

                                            <select id="drop42" class="form-control small-box" name="leak_test5">
                                                <option>Not performed</option>
                                                <option>Not requested</option>
                                                <option>Passed</option>
                                                <option>Failed</option>
                                                <option>0</option>
                                                <option>N/A</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(42)" id="edit42">Edit</a><a class="delete" onclick="deletedrop(42)" >Delete</a><a class="add" id="add42">Add</a></div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">@</label>
                                            <input type="text" class="form-control" name="option5" placeholder="@">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Comp Screw Recd</label>
                                            <input type="date" class="form-control" name="comp_screw_recd5"
                                                   placeholder="Comp Screw Recd">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nameplate</label>
                                            <select class="form-control small-box" name="nameplate5">
                                                <option>Original</option>
                                                <option>Original Repair</option>
                                                <option>Duplicate</option>
                                                <option>MIssing</option>
                                                <option>Illegible</option>
                                                <option>N/A</option>
                                            </select>

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
                                            <label class="form-label">Seal</label><br/>
                                            <!-- <input type="text" class="form-control" name="seal_id5" placeholder="Seal" >-->
                                            <select id="drop43"class="form-control small-box" name="seal5">
                                                <option>Intact</option>
                                                <option>Broken</option>
                                                <option>Missing</option>
                                                <option>Broken and missing</option>
                                                <option>N/A</option>
                                            </select> <a href="#" class="small-box-a">...</a></div>
                                        <div class="small-box-a">...
                                            <div class="toolstip"><a class="edit" onclick="editPopup(43)" id="edit43">Edit</a><a class="delete" onclick="deletedrop(43)" >Delete</a><a class="add" id="add43">Add</a></div>
                                        </div>

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Seal Id</label>
                                            <!-- <input type="text" class="form-control" name="seal_id5" placeholder="Seal" >-->
                                            <select id="44" class="form-control small-box" name="seal_id5">

                                                <option>PPE</option>
                                                <option>Petro Tech</option>
                                                <option>SPV</option>
                                                <option>Unfied Valve</option>
                                                <option>Unknown</option>
                                                <option>PCI</option>
                                                <option>SIE</option>
                                                <option>SCE</option>
                                                <option>CDN</option>
                                                <option>CVS</option>
                                                <option>Barber Eng.</option>
                                                <option>Black Gold Valve</option>
                                                <option>Factory</option>
                                                <option>IPV</option>
                                                <option>Tyco</option>
                                                <option>Techmation</option>
                                                <option>JRV</option>
                                                <option>PCV</option>
                                                <option>MVS</option>
                                                <option>N/A</option>
                                                <option>Kings</option>
                                                <option>HTV</option>
                                                <option>UVL</option>
                                                <option>BGV</option>

                                                <option>Nasvi</option>
                                                <option>OEM</option>
                                                <option>Cantech</option>
                                                <option>Rocky Mtn Valve</option>
                                                <option>ACL</option>
                                                <option>Valseal</option>
                                                <option>Cantech</option>
                                                <option>Dalco</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(44)" id="edit44">Edit</a><a class="delete" onclick="deletedrop(44)" >Delete</a><a class="add" id="add44">Add</a></div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Prev Repair Company</label>
                                            <!-- <input type="text" class="form-control" name="prev_repair_compant5" placeholder="Prev Repair Company" >-->
                                            <select id="45" class="form-control small-box" name="prev_repair_compant5">

                                                <option>Dalco</option>
                                                <option>CDN</option>
                                                <option>CVS</option>
                                                <option>PPE</option>
                                                <option>Petro Tech</option>
                                                <option>SPV</option>
                                                <option>SCE</option>
                                                <option>Barber Eng.</option>
                                                <option>Black Gold Valve</option>
                                                <option>Unified Valve</option>
                                                <option>Unknown</option>
                                                <option>PTC</option>
                                                <option>Factory</option>
                                                <option>IPV</option>
                                                <option>JRV</option>
                                                <option>Kings</option>
                                                <option>Hi Tech Valve Inc.</option>
                                                <option>Tyco</option>
                                                <option>Nasvi</option>
                                                <option>OEM</option>
                                                <option>Cantech</option>
                                                <option>Rocky Mtn Valve</option>
                                                <option>Pwer Comm</option>
                                                <option>Alpha Controls</option>
                                                <option>Muskwa Valve</option>
                                                <option>Valseal</option>
                                                <option>PCV</option>
                                                <option>Pentair</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(45)" id="edit45">Edit</a><a class="delete" onclick="deletedrop(45)" >Delete</a><a class="add" id="add45">Add</a></div>
                                            </div>

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
                                            <!--  <input type="text" class="form-control" name="repair_company4" placeholder="repair company" >-->
                                            <select id="drop46" class="form-control" name="repair_company4">
                                                <option>Pimm's Production</option>


                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(46)" id="edit46">Edit</a><a class="delete" onclick="deletedrop(46)" >Delete</a><a class="add" id="add46">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Date Tested</label>
                                            <input type="date" class="form-control" name="date_tested4"
                                                   placeholder="Date Tested">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Assembled By</label>
                                            <!--  <input type="text" class="form-control" name="assembled_by4" placeholder="Assembled By" >-->
                                            <select id="47" class="form-control small-box" name="assembled_by4">
                                                <option>Chris Pierce</option>
                                                <option>Chris Jorven</option>
                                                <option>Jordan Elliott</option>
                                                <option>Uwe Helm</option>
                                                <option>Tyler Tindill</option>
                                                <option>Kevin Labonte</option>
                                                <option>Kristin Neuffer</option>
                                                <option>Logan Little</option>
                                                <option>Art Bilodeau</option>
                                                <option>Andrew Raw</option>
                                                <option>Tyler Tindill</option>
                                                <option>Kaylin Williams</option>
                                                <option>Chad Schraeder</option>
                                                <option>Ed Pimm</option>
                                                <option>Ryan Sharp</option>
                                                <option>Kelsey Vonk</option>
                                                <option>Braden Pimm</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(47)" id="edit47">Edit</a><a class="delete" onclick="deletedrop(47)" >Delete</a><a class="add" id="add47">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Test Media</label>
                                            <!--<input type="text" class="form-control" name="test_media4" placeholder="test media" >-->

                                            <select id="drop48" class="form-control small-box" name="test_media4">
                                                <option>Air</option>
                                                <option>Water</option>
                                                <option>Steam</option>
                                                <option>Nitrogen</option>
                                                <option>Oil</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(48)" id="edit48">Edit</a><a class="delete" onclick="deletedrop(48)" >Delete</a><a class="add" id="add48">Add</a></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Test Method</label>

                                            <select id="drop49" class="form-control small-box" name="test_method4">
                                                <option>Bench</option>
                                                <option>EVT</option>
                                                <option>Hydroset</option>
                                                <option>Full Flow</option>
                                                <option>AVK</option>
                                                <option>Electronic assist</option>
                                                <option>Nitrogen Bottle</option>
                                                <option>Field tested</option>
                                                <option>Oil</option>
                                                <option>Live</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(49)" id="edit49">Edit</a><a class="delete" onclick="deletedrop(49)" >Delete</a><a class="add" id="add49">Add</a></div>
                                            </div>
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
                                            <!--<input type="text" class="form-control" name="test_univ24" placeholder="Test Uni1" >-->
                                            <select id="drop50" class="form-control small-box" name="test_univ24">
                                                <option>Pop</option>
                                                <option>Hiss</option>
                                                <option>First Steady Stream</option>
                                                <option>Heavy flow</option>


                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(50)" id="edit50">Edit</a><a class="delete" onclick="deletedrop(50)" >Delete</a><a class="add" id="add50">Add</a></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tested By</label>
                                            <!-- <input type="text"  class="form-control" name="test_by4" placeholder="Tested By" >-->
                                            <select id="drop51" class="form-control small-box" name="test_by4">
                                              @foreach($users as $user)
                                                    <option value="{{$user->first_name.''.$user->last_name}}">{{$user->first_name.''.$user->last_name}}</option>
                                                    @endforeach
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(51)" id="edit51">Edit</a><a class="delete" onclick="deletedrop(51)" >Delete</a><a class="add" id="add51">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Witnessed By</label>
                                            <!-- <input type="text" class="form-control" name="witnessed_by4" placeholder="Witnessed By" >-->
                                            <select id="drop52" class="form-control small-box" name="witnessed_by4">
                                                <option>Chris Pierce</option>
                                                <option>Chris Jorven</option>
                                                <option>Jordan Elliott</option>
                                                <option>Uwe Helm</option>
                                                <option>Tyler Tindill</option>
                                                <option>Kevin Labonte</option>
                                                <option>Kristin Neuffer</option>
                                                <option>Logan Little</option>
                                                <option>Art Bilodeau</option>
                                                <option>Andrew Raw</option>
                                                <option>Tyler Tindill</option>
                                                <option>Kaylin Williams</option>
                                                <option>Chad Schraeder</option>
                                                <option>Ed Pimm</option>
                                                <option>Ryan Sharp</option>
                                                <option>Kelsey Vonk</option>
                                                <option>Braden Pimm</option>

                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(52)" id="edit52">Edit</a><a class="delete" onclick="deletedrop(52)" >Delete</a><a class="add" id="add52">Add</a></div>
                                            </div>
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
                                            <input type="text" class="form-control" name="finial_test4"
                                                   placeholder="Final Test Press">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Reseat Press</label>
                                            <input type="text" class="form-control" name="reset_press4"
                                                   placeholder="Reseat Press">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Blow Down</label>
                                            <input type="text" class="form-control" name="blow_down4"
                                                   placeholder="Blow Down">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Measured Lift</label>
                                            <input type="text" class="form-control" name="measured_lift4"
                                                   placeholder="Measured Lift">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Db Ring Up</label>
                                            <!--<input type="text" class="form-control" name="ring_up4" placeholder="Db Ring Up" >-->
                                            <select id="drop53" class="form-control small-box" name="ring_up4">
                                                <option>None</option>
                                                <option>Fixed</option>
                                                <option>Level</option>
                                                <option>mm</option>
                                            </select><a href="#" class="small-box-a">...</a></div>
                                        <div class="small-box-a">...
                                            <div class="toolstip"><a class="edit" onclick="editPopup(53)" id="edit53">Edit</a><a class="delete" onclick="deletedrop(53)" >Delete</a><a class="add" id="add53">Add</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Next Maint Is</label><br/>
                                            <input type="radio" name="next_maint_is4" value="Scheduled">Scheduled
                                            <input type="radio" name="next_maint_is4" value="Unscheduled" checked>Unscheduled
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">For</label><br/>
                                            <!--<input type="text" class="form-control" name="for4" placeholder="for" >-->
                                            <select id="drop54" class="form-control small-box" name="for4">
                                                <option>Repair as reqd</option>
                                                <option>Pretest and repair</option>
                                                <option>Test Only</option>
                                                <option>Pretest Only</option>
                                                <option>Reset</option>
                                                <option>Fully repair</option>
                                                <option>Change Pres./Reset</option>
                                                <option>Repair/Change Pres.</option>
                                                <option>New Valve</option>
                                                <option>Customer Inventory</option>
                                            </select><a href="#" class="small-box-a">...</a></div>
                                        <div class="small-box-a">...
                                            <div class="toolstip"><a class="edit" onclick="editPopup(54)" id="edit54">Edit</a><a class="delete" onclick="deletedrop(54)" >Delete</a><a class="add" id="add54">Add</a></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Replace Valve Next Repair</label><br/>
                                            <input type="checkbox" name="replace_valve_next4" value="1" checked>Scheduled
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Leakage Rate</label>
                                            <!--<input type="text" class="form-control" name="leaking_reate4" placeholder="Leakage Rate" >-->
                                            <select id="drop55" class="form-control small-box" name="leaking_reate4">
                                                <option>Not Performed</option>
                                                <option>Not requested</option>
                                                <option>Passed</option>
                                                <option>Failed</option>
                                                <option>0</option>
                                                <option>N/A</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(55)" id="edit55">Edit</a><a class="delete" onclick="deletedrop(55)" >Delete</a><a class="add" id="add55">Add</a></div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">@</label>
                                            <input type="text" class="form-control" name="option14" placeholder="@">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Back Press Test</label>
                                            <!-- <input type="text" class="form-control" name="back_press_test4" placeholder="Back Press Test" >-->
                                            <select id="drop56" class="form-control small-box" name="back_press_test4">
                                                <option>Yes</option>
                                                <option>No</option>
                                                <option>Not requested</option>
                                                <option>N/A</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(56)" id="edit56">Edit</a><a class="delete" onclick="deletedrop(56)" >Delete</a><a class="add" id="add56">Add</a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">@</label>
                                            <input type="text" class="form-control" name="option24" placeholder="@">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Comp Screw Set</label>
                                            <input type="text" class="form-control" name="comp_screw_test4"
                                                   placeholder="Comp Screw Set">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Overlap Collar</label>
                                            <input type="text" class="form-control" name="over_lap4"
                                                   placeholder="Overlap Collar">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">BD Ring - lower</label>
                                            <!--<input type="text" class="form-control" name="bd_ring4" placeholder="BD Ring - lower" >-->
                                            <select id="drop57" class="form-control small-box" name="bd_ring4">
                                                <option>None</option>
                                                <option>Fixed</option>
                                                <option>Level</option>
                                                <option>mm</option>
                                            </select> <a href="#" class="small-box-a">...</a></div>
                                        <div class="small-box-a">...
                                            <div class="toolstip"><a class="edit" onclick="editPopup(57)" id="edit57">Edit</a><a class="delete" onclick="deletedrop(57)" >Delete</a><a class="add" id="add57">Add</a></div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Next Maint Date</label>
                                            <input type="date" class="form-control" name="next_main_date4"
                                                   placeholder="Next Maint Date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Next Test Date</label>
                                            <input type="date" class="form-control" name="next_test_date4"
                                                   placeholder="next test date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Comment</label>
                                            <textarea name="comment4" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="tab-pane" id="tab-six">
                                <div class="row">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured16"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers16"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured26"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers26"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured36"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers36"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured46"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers46"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured56"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers56"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured66"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers66"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured76"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers76"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured86"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers86"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured96"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers96"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undefined Equipment</label>
                                            <input type="text" class="form-control" name="measured106"
                                                   placeholder="measured">
                                            <input type="text" class="form-control" name="manufactuers106"
                                                   placeholder="manufacturers Min/Max">

                                        </div>
                                    </div>


                                </div>


                            </div>
                            <div class="tab-pane" id="tab-seven">
                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment11"
                                                   placeholder="measured">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment12"
                                                   placeholder="measured">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment13"
                                                   placeholder="measured">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment14"
                                                   placeholder="measured">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment15"
                                                   placeholder="measured">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment16"
                                                   placeholder="measured">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment17"
                                                   placeholder="measured">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment18"
                                                   placeholder="measured">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment19"
                                                   placeholder="measured">

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment110"
                                                   placeholder="measured">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment111"
                                                   placeholder="measured">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Undef Equip</label>
                                            <input type="text" class="form-control" name="equipment112"
                                                   placeholder="measured">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Parts Cost</label>
                                            <input type="text" class="form-control" name="parts_cost2"
                                                   placeholder="parts costs">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">labor Cost</label>
                                            <input type="text" class="form-control" name="labor_cost2"
                                                   placeholder="labor costs">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Misc Cost</label>
                                            <input type="text" class="form-control" name="misc_cost2"
                                                   placeholder="misc costs">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">handing Cost</label>
                                            <input type="text" class="form-control" name="handing_cost2"
                                                   placeholder="handing costs">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Total Cost</label>
                                            <input type="text" class="form-control" name="total_cost2"
                                                   placeholder="total costs">

                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Total Repair Time</label>
                                            <input type="text" class="form-control" name="total_repair_time2"
                                                   placeholder="total repair time">

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Field Time</label>
                                            <input type="text" class="form-control" name="field_time2"
                                                   placeholder="field time">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">QC Inspector</label>
                                            <input type="text" class="form-control" name="qc_inspector2"
                                                   placeholder="QC Inspector">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Visual Inspection</label>
                                            <!--  <input type="text" class="form-control" name="qc_inspector2" placeholder="QC Inspector" >-->
                                            <select id="drop58" class="form-control small-box" name="qc_inspector2"/>
                                            <option>Yes</option>
                                            <option>No</option>
                                            <option>N/A</option>
                                            <option>C Pierce</option>
                                            <option>A Raw</option>
                                            <option>U Helm</option>
                                            <option>K Labonte</option>
                                            <option>J Elliott</option>
                                            <option>T Tindill</option>
                                            <option>B Pimm</option>
                                            </select><a href="#" class="small-box-a">...</a>
                                            <div class="small-box-a">...
                                                <div class="toolstip"><a class="edit" onclick="editPopup(58)" id="edit58">Edit</a><a class="delete" onclick="deletedrop(58)" >Delete</a><a class="add" id="add58">Add</a></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Comment</label>
                                            <input type="text" class="form-control" name="comment2"
                                                   placeholder="QC Inspector">

                                        </div>
                                    </div>

                                </div>


                            </div>
                            <div class="tab-pane" id="tab-eight">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Images</label>
                                            <input type="file" class="form-control" name="images" multiple >

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                        <input type="submit" name="addequipment" value="Save">
                            <button><a href="/cancel">Cancel</a></button>
                    </div>
                    <div class="tab-pane active" id="tab-report">





                        <button class="btn btn-primary colr-5 trigger_popup_fricc new">
                            Hide/Enable <br/>Report column
                        </button>
                        <div class="dt-responsive table-responsive">
                            <div class="dt-responsive table-responsive">
                                <table id="example23" class="table table-striped table-bordered nowrap">
                                    <thead>
                                    <tr>
                                        @if(!isset($_SESSION['item1']) ||$_SESSION['item1']==1)

                                            <th>Most Recent</th>
                                        @endif
                                        @if(!isset($_SESSION['item2']) ||$_SESSION['item2']==1)

                                            <th>Tag Number</th>
                                        @endif
                                        @if(!isset($_SESSION['item3']) ||$_SESSION['item3']==1)

                                            <th>Serial Number</th>
                                        @endif
                                        @if(!isset($_SESSION['item4']) ||$_SESSION['item4']==1)

                                            <th>Model Number</th>
                                        @endif
                                        @if(!isset($_SESSION['item5']) ||$_SESSION['item5']==1)

                                            <th>Data Received</th>
                                        @endif
                                        {{--<th>Data Tested</th>--}}
                                        {{--<th>Counter</th>--}}
                                        @if(!isset($_SESSION['item6']) ||$_SESSION['item6']==1)

                                            <th>Value Size</th>
                                        @endif
                                        @if(!isset($_SESSION['item7']) ||$_SESSION['item7']==1)

                                            <th>Description</th>
                                        @endif
                                        @if(!isset($_SESSION['item8']) ||$_SESSION['item8']==1)

                                            <th>Equipment Location</th>
                                        @endif
                                            @if(!isset($_SESSION['item9']) ||$_SESSION['item9']==1)

                                                <th>Date Tested</th>
                                            @endif
                                            @if(!isset($_SESSION['item10']) ||$_SESSION['item10']==1)

                                                <th>Counter</th>
                                            @endif
                                            @if(isset($_SESSION['item11']) &&$_SESSION['item11']==1)

                                                <th>Alternate Relief</th>
                                            @endif
                                            @if(isset($_SESSION['item12']) &&$_SESSION['item12']==1)

                                                <th>Counter</th>
                                            @endif
                                            @if(isset($_SESSION['item13']) &&$_SESSION['item13']==1)

                                                <th>App Cap Unit</th>
                                            @endif
                                            @if(isset($_SESSION['item14']) &&$_SESSION['item14']==1)

                                                <th>Application Cap</th>
                                            @endif
                                            @if(isset($_SESSION['item15']) &&$_SESSION['item15']==1)

                                                <th>ASME Cap</th>
                                            @endif
                                            @if(isset($_SESSION['item16']) &&$_SESSION['item16']==1)

                                                <th>ASME Cap Unit</th>
                                            @endif
                                            @if(isset($_SESSION['item17']) &&$_SESSION['item17']==1)

                                                <th>Assembled By</th>
                                            @endif
                                            @if(isset($_SESSION['item18']) &&$_SESSION['item18']==1)

                                                <th>By Press Test</th>
                                            @endif


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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        @if(!isset($_SESSION['item1']) ||$_SESSION['item1']==1)

                                            <td>yes</td>
                                        @endif
                                        @if(!isset($_SESSION['item2']) ||$_SESSION['item2']==1)

                                            <td></td>
                                        @endif
                                        @if(!isset($_SESSION['item3']) ||$_SESSION['item3']==1)

                                            <td></td>
                                        @endif
                                        @if(!isset($_SESSION['item4']) ||$_SESSION['item4']==1)
                                            <td></td>

                                        @endif
                                        @if(!isset($_SESSION['item5']) ||$_SESSION['item5']==1)
                                            <td> {{date('y-m-d')}} </td>

                                        @endif

                                        @if(!isset($_SESSION['item6']) ||$_SESSION['item6']==1)

                                            <td></td>
                                        @endif
                                        @if(!isset($_SESSION['item7']) ||$_SESSION['item7']==1)

                                            <td></td>
                                        @endif
                                        @if(!isset($_SESSION['item8']) ||$_SESSION['item8']==1)

                                            <td>{{$location_name}}</td>
                                        @endif
                                            @if(!isset($_SESSION['item9']) ||$_SESSION['item9']==1)

                                                <td></td>
                                            @endif
                                            @if(!isset($_SESSION['item10']) ||$_SESSION['item10']==1)

                                                <td></td>
                                            @endif

                                            @if(isset($_SESSION['item11']) &&$_SESSION['item11']==1)

                                                <td></td>
                                            @endif
                                            @if(isset($_SESSION['item12']) &&$_SESSION['item12']==1)

                                                <td></td>
                                            @endif
                                            @if(isset($_SESSION['item13']) &&$_SESSION['item13']==1)

                                                <td></td>
                                            @endif
                                            @if(isset($_SESSION['item14']) &&$_SESSION['item14']==1)

                                                <td></td>
                                            @endif
                                            @if(isset($_SESSION['item15']) &&$_SESSION['item15']==1)

                                                <td></td>
                                            @endif
                                            @if(isset($_SESSION['item16']) &&$_SESSION['item16']==1)

                                                <td></td>
                                            @endif
                                            @if(isset($_SESSION['item17']) &&$_SESSION['item17']==1)

                                                <td></td>
                                            @endif
                                            @if(isset($_SESSION['item18']) &&$_SESSION['item18']==1)

                                                <td></td>
                                            @endif

                                    </tr>
                                    @if(isset($equipments))

                                    @foreach($equipments as $equipment)
                                        <tr>
                                            @if(!isset($_SESSION['item1']) ||$_SESSION['item1']==1)

                                                <td></td>
                                            @endif
                                            @if(!isset($_SESSION['item2']) ||$_SESSION['item2']==1)

                                                <td>{{$equipment->tag_number}}</td>
                                            @endif
                                            @if(!isset($_SESSION['item3']) ||$_SESSION['item3']==1)

                                                <td>{{$equipment->serial_number}}</td>
                                            @endif
                                            @if(!isset($_SESSION['item4']) ||$_SESSION['item4']==1)
                                                <td>{{$equipment->model_number}}</td>

                                            @endif
                                            @if(!isset($_SESSION['item5']) ||$_SESSION['item5']==1)

                                                <td>{{$equipment->created_at}}</td>

                                            @endif

                                            @if(!isset($_SESSION['item6']) ||$_SESSION['item6']==1)

                                                <td>{{$equipment->sizing_text}}</td>
                                            @endif
                                            @if(!isset($_SESSION['item7']) ||$_SESSION['item7']==1)

                                                <td>{{$equipment->description}}</td>
                                            @endif
                                            @if(!isset($_SESSION['item8']) ||$_SESSION['item8']==1)

                                                <td>{{$equipment->equipment_location}}</td>
                                            @endif

                                        </tr>

                                    @endforeach
                                    @endif


                                    </tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane " id="notes">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Note</label>
                                    <textarea name="note" class="form-control">Note</textarea>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="new">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Job Number</label>
                                    <input type="text" class="form-control" name="job_number_"
                                           placeholder="total_repair_cost" >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Job Estimated By</label>
                                    <input type="text" class="form-control" name="estimated_by"
                                           placeholder="total_repair_cost" >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Job Date</label>
                                    <input type="date" class="form-control" name="job_date"
                                           placeholder="total_repair_cost" >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label><br/>
                                    <input type="radio" name="job_status" value="Estimate"> Estimate
                                    <input type="radio" name="job_status" value="JobStarted"> Job Started
                                    <input type="radio" name="job_status" value="Invoiced"> Invoiced
                                    <input type="radio" name="job_status" value="Paid"> Paid
                                    <input type="radio" name="job_status" value="Archived"> Archived
                                    <br/><br/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Customer po</label>
                                    <input type="text" class="form-control" name="customer_po"
                                           placeholder="customer po" >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Customer wo</label>
                                    <input type="text" class="form-control" name="customer_wo"
                                           placeholder="customer_wo" >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Invoice</label>
                                    <input type="text" class="form-control" name="invoice_number"
                                           placeholder="invoice" >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Invoice Date</label>
                                    <input type="date" class="form-control" name="invoice_date" placeholder="invoicedate"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Due Date</label>
                                    <input type="date" class="form-control" name="total_repair_cost" placeholder="date"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Note</label>
                                    <textarea name="note2" class="form-control">Note</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="loc">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Location Name</label>
                                    <input type="text" readonly class="form-control" name="job_location_name" value="{{$location_name}}" placeholder="location_name"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Equipment Type</label>
                                    <input type="text" class="form-control" name="job_equipment_type" placeholder="job_equipment_type"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Location Uni 1</label>
                                    <input type="text" class="form-control" name="job_location_uni1" placeholder="job_location_uni1"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Location Uni 2</label>
                                    <input type="text" class="form-control" name="job_location_uni2" placeholder="job_location_uni1"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label><br/>
                                    <input type="radio" name="job_status2" value="Active"> Active
                                    <input type="radio" name="job_status2" value="Archived"> Archived
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control">Description</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane " id="loop">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Link name</label>
                                    <input type="text" class="form-control" name="job_link_name" placeholder="job_link_name"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Link Uni 1</label>
                                    <input type="text" class="form-control" name="job_link_uni1" placeholder="date"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Link Uni 2</label>
                                    <input type="text" class="form-control" name="job_link_uni2" placeholder="date"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Link Uni 3</label>
                                    <input type="text" class="form-control" name="job_link_uni3" placeholder="date"
                                           >

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status</label><br/>
                                    <input type="checkbox" name="" value="Active"> Active
                                    <input type="checkbox" name="" value="Archived"> Archived
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Description</label>
                                    <textarea class="form-control">Description</textarea>
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
            <input type="submit" name="addjob" value="Save Report">

        </form>


        <!--aDD BUTTON POPUP-->
        <div class="hover_bkgr_fric" id="hover_1">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop1" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(1)"  id="adddrop1" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_2">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop2" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(2)"  id="adddrop2" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_3">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop3" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(3)"  id="adddrop3" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_4">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop4" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(4)"  id="adddrop4" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_5">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop5" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(5)"  id="adddrop5" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_6">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop6" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(6)"  id="adddrop6" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_7">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop7" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(7)"  id="adddrop7" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_8">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop8" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(8)"  id="adddrop8" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>


        <div class="hover_bkgr_fric" id="hover_9">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop9" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(9)"  id="adddrop9" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_10">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop10" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(10)"  id="adddrop10" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_11">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop11" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(11)"  id="adddrop11" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_12">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop12" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(12)"  id="adddrop12" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_13">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop13" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(13)"  id="adddrop13" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_14">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop14" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(14)"  id="adddrop14" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_15">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop15" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(15)"  id="adddrop15" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_16">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop16" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(16)"  id="adddrop16" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_17">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop17" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(17)"  id="adddrop17" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_18">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop18" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(18)"  id="adddrop18" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_19">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop19" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(19)"  id="adddrop19" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_20">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop20" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(20)"  id="adddrop20" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_21">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop21" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(21)"  id="adddrop21" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_22">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop22" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(22)"  id="adddrop22" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_23">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop23" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(23)"  id="adddrop23" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_24">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop24" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(24)"  id="adddrop24" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_25">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop25" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(25)"  id="adddrop25" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_26">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop26" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(26)"  id="adddrop26" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_27">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop27" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(27)"  id="adddrop27" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_28">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop28" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(28)"  id="adddrop28" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_29">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop29" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(29)"  id="adddrop29" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_30">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop30" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(30)"  id="adddrop30" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_31">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop31" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(31)"  id="adddrop31" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_32">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop32" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(32)"  id="adddrop32" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_33">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop33" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(33)"  id="adddrop33" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_34">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop34" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(34)"  id="adddrop34" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_35">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop35" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(35)"  id="adddrop35" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_36">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop36" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(36)"  id="adddrop36" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_37">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop37" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(37)"  id="adddrop37" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_38">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop38" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(38)"  id="adddrop38" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_39">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop39" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(39)"  id="adddrop39" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_40">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop40" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(40)"  id="adddrop40" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_41">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop41" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(41)"  id="adddrop41" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_42">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop42" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(42)"  id="adddrop42" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_43">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop43" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(43)"  id="adddrop43" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_44">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop44" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(44)"  id="adddrop44" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_45">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop45" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(45)"  id="adddrop45" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_46">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop46" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(46)"  id="adddrop46" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_47">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop47" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(47)"  id="adddrop47" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_48">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop48" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(48)"  id="adddrop48" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_49">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop49" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(49)"  id="adddrop49" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_50">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop50" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(50)"  id="adddrop50" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_51">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop51" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(51)"  id="adddrop51" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_52">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop52" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(52)"  id="adddrop52" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_53">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop53" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(53)"  id="adddrop53" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_54">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop54" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(54)"  id="adddrop54" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_55">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop55" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(55)"  id="adddrop55" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_56">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop56" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(56)"  id="adddrop56" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_57">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop57" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(57)"  id="adddrop57" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_58">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Add New Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Enter Data </h4>
                            <div class="box-content-1">
                                <input type="text" id="inputdrop58" placeholder="Add new data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Add" onclick="adddrop(58)"  id="adddrop58" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit1">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious1"  placeholder="Edit data">

                                <input type="text" id="editdrop1" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(1)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit2">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious2"  placeholder="Edit data">

                                <input type="text" id="editdrop2" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(2)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit3">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious3"  placeholder="Edit data">

                                <input type="text" id="editdrop3" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(3)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit4">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious4"  placeholder="Edit data">

                                <input type="text" id="editdrop4" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(4)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit5">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious5"  placeholder="Edit data">

                                <input type="text" id="editdrop5" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(5)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit6">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious6"  placeholder="Edit data">

                                <input type="text" id="editdrop6" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(6)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit7">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious7"  placeholder="Edit data">

                                <input type="text" id="editdrop7" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(7)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit8">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious8"  placeholder="Edit data">

                                <input type="text" id="editdrop8" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(8)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit9">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious9"  placeholder="Edit data">

                                <input type="text" id="editdrop9" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(9)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit10">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious10"  placeholder="Edit data">

                                <input type="text" id="editdrop10" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(10)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit11">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious11"  placeholder="Edit data">

                                <input type="text" id="editdrop11" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(11)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit12">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious12"  placeholder="Edit data">

                                <input type="text" id="editdrop12" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(12)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit13">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious13"  placeholder="Edit data">

                                <input type="text" id="editdrop13" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(13)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit14">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious14"  placeholder="Edit data">

                                <input type="text" id="editdrop14" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(14)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit15">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious15"  placeholder="Edit data">

                                <input type="text" id="editdrop15" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(15)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit16">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious16"  placeholder="Edit data">

                                <input type="text" id="editdrop16" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(16)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>

        <div class="hover_bkgr_fric" id="hover_edit17">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious17"  placeholder="Edit data">

                                <input type="text" id="editdrop17" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(17)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit18">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious18"  placeholder="Edit data">

                                <input type="text" id="editdrop18" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(18)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit19">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious19"  placeholder="Edit data">

                                <input type="text" id="editdrop19" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(19)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit20">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious20"  placeholder="Edit data">

                                <input type="text" id="editdrop20" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(20)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit21">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious21"  placeholder="Edit data">

                                <input type="text" id="editdrop21" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(21)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit22">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious22"  placeholder="Edit data">

                                <input type="text" id="editdrop22" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(22)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit23">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious23"  placeholder="Edit data">

                                <input type="text" id="editdrop23" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(23)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit24">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious24"  placeholder="Edit data">

                                <input type="text" id="editdrop24" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(24)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit25">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious25"  placeholder="Edit data">

                                <input type="text" id="editdrop25" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(25)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit26">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious26"  placeholder="Edit data">

                                <input type="text" id="editdrop26" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(26)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit27">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious27"  placeholder="Edit data">

                                <input type="text" id="editdrop27" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(27)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit28">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious28"  placeholder="Edit data">

                                <input type="text" id="editdrop28" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(28)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit29">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious29"  placeholder="Edit data">

                                <input type="text" id="editdrop29" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(29)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit30">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious30"  placeholder="Edit data">

                                <input type="text" id="editdrop30" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(30)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit31">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious31"  placeholder="Edit data">

                                <input type="text" id="editdrop31" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(31)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit32">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious32"  placeholder="Edit data">

                                <input type="text" id="editdrop32" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(32)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit33">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious33"  placeholder="Edit data">

                                <input type="text" id="editdrop33" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(33)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit34">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious34"  placeholder="Edit data">

                                <input type="text" id="editdrop34" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(34)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit35">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious35"  placeholder="Edit data">

                                <input type="text" id="editdrop35" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(35)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit36">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious36"  placeholder="Edit data">

                                <input type="text" id="editdrop36" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(36)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit37">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious37"  placeholder="Edit data">

                                <input type="text" id="editdrop37" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(37)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit38">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious38"  placeholder="Edit data">

                                <input type="text" id="editdrop38" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(38)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit39">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious39"  placeholder="Edit data">

                                <input type="text" id="editdrop39" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(39)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit40">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious40"  placeholder="Edit data">

                                <input type="text" id="editdrop40" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(40)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit41">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious41"  placeholder="Edit data">

                                <input type="text" id="editdrop41" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(41)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit42">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious42"  placeholder="Edit data">

                                <input type="text" id="editdrop42" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(42)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit43">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious43"  placeholder="Edit data">

                                <input type="text" id="editdrop43" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(43)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit44">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious44"  placeholder="Edit data">

                                <input type="text" id="editdrop44" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(44)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit45">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious45"  placeholder="Edit data">

                                <input type="text" id="editdrop45" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(45)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit46">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious46"  placeholder="Edit data">

                                <input type="text" id="editdrop46" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(46)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit47">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious47"  placeholder="Edit data">

                                <input type="text" id="editdrop47" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(47)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit48">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious48"  placeholder="Edit data">

                                <input type="text" id="editdrop48" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(48)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit49">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious49"  placeholder="Edit data">

                                <input type="text" id="editdrop49" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(49)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit50">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious50"  placeholder="Edit data">

                                <input type="text" id="editdrop50" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(50)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit51">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious51"  placeholder="Edit data">

                                <input type="text" id="editdrop51" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(51)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit52">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious52"  placeholder="Edit data">

                                <input type="text" id="editdrop52" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(52)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit53">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious53"  placeholder="Edit data">

                                <input type="text" id="editdrop53" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(53)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit54">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious54"  placeholder="Edit data">

                                <input type="text" id="editdrop54" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(54)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit55">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious54"  placeholder="Edit data">

                                <input type="text" id="editdrop55" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(55)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit56">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious56"  placeholder="Edit data">

                                <input type="text" id="editdrop56" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(56)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit57">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious57"  placeholder="Edit data">

                                <input type="text" id="editdrop57" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(57)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <div class="hover_bkgr_fric" id="hover_edit58">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Edit Value</h3>
                    <div class="main-area">

                        <div class="right-col">
                            <h4>Edit Data </h4>
                            <div class="box-content-1">
                                <input type="hidden" id="editprevious58"  placeholder="Edit data">

                                <input type="text" id="editdrop58" placeholder="Edit data">


                            </div>
                            <div class="box-content-2">
                                <input type="submit" value="Edit" onclick="editdrop(58)" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
                <!--aDD BUTTON POPUP-->

            </div>
        </div>
        <!--WIDZART POPUP-->
        <div class="hover_bkgr_fric-widart">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Part Wizard</h3>
                    <div class="main-area">
                        <div class="left-col">
                            <h2>Part Name</h2>
                            <div class="overtext">
                                <ul class="nav nav-tabs" id="nameParts">
                                @foreach($partsData as $part)
                                        <li id="partnameID{{$part->id}}"  onclick="namePart({{$part->id}})"><a href="#sadas"  data-toggle="tab">{{$part->part_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="right-col">

                            <div class="box-content-1">
                                <h2>Received Conditions</h2>
                                <ul class="nav nav-tabs" id="conditionsParts">
                                        <li id="item1" onclick="conditionsPart('good')"><a href="#sadas" data-toggle="tab">Good</a></li>
                                        <li id="item2"onclick="conditionsPart('bad')" value="Tag Number"><a href="#gfdg" data-toggle="tab">Bad</a></li>

                                </ul>

                            </div>
                            <div class="box-content-1 cols">
                                <h2>Worked Performed</h2>
                                <ul class="nav nav-tabs" id="workedPerformedParts">

                                    <li id="item11" onclick="workedPerformedPart('good1')"><a href="#sadas" data-toggle="tab">Good 1</a></li>


                                    <li id="item12" onclick="workedPerformedPart('bad1')"><a href="#gfdg" data-toggle="tab">bad 1</a></li>


                                </ul>


                            </div>
                            <div class="box-content-1 colm">
                                <h2>Recommendation</h2>
                                <ul class="nav nav-tabs" id="recommendiationParts">

                                    <li id="item21" onclick="recommendiationPart('good2')"><a href="#sadas" data-toggle="tab">Good2</a></li>


                                    <li id="item22" onclick="recommendiationPart('bad2')"><a href="#gfdg" data-toggle="tab">bad2</a></li>


                                </ul>


                            </div>
                            <div class="box-content-2">
                                <input type="button" onclick="addNewPart()" value="Add" class="btm"/>
                            </div>
                        </div><!--right-col-->


                    </div><!--main-area-->


                </div><!--popup-div-->
            </div>
        </div>


        <!--PART SHEET-->


        <div class="hover_bkgr_fric-part">
            <span class="helper"></span>
            <div>
                <div class="popupCloseButton">X</div>
                <div class="popup-div">
                    <h3>Part List: Relief Devices</h3>
                    <div class="main-area">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Tag Number</label>
                                    <input type="text" name="part_tag" id="part_tag" class="form-control" placeholder="Tag Number" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Material</label>
                                    <select name="part_matrial" id="part_matrial" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Equipment Type</label>
                                    <input type="text" name="part_equipment_type" id="part_equipment_type" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Source</label>
                                    <select name="part_source" id="part_source" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Date</label>
                                    <input type="date" name="part_date" id="part_date" class="form-control">
                                </div>
                            </div>
                            {{--<div class="col-md-6">--}}
                            {{--<div class="form-group">--}}
                            {{--<label class="form-label">Quantity</label>--}}
                            {{--<input type="text" name="part_quantity" id="part_quantity" class="form-control small">--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Part Number</label>
                                    <select name="part_number" id="part_number" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Price Extended</label>
                                    <input type="number" name="part_price" id="part_price" class="form-control small">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Quantity</label>
                                    <input type="number"name="part_quantity" id="part_quantity" class="form-control small">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Cost Extended</label>
                                    <input type="number" name="part_cost" id="part_cost" class="form-control small">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Part Name</label>
                                    <select name="part_name" id="part_name" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Work Perfomed</label>
                                    <select name="part_work" id="part_work" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Condition Rec'd</label>
                                    <select name="part_rec1" id="part_rec1" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Recommendation</label>
                                    <select name="part_recommendation" id="part_recommendation" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">2nd Cond Rec'd</label>
                                    <select name="part_req2" id="part_req2" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Part Code</label>
                                    <select name="part_code" id="part_code" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="checkbox" value="1" name="part_spare" checked id="part_spare" class="">Recommended Spare<br/>
                                    <input type="checkbox" value="1" name="part_order" checked id="part_order" class="">Part On Order<br/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Parts Univ2</label>
                                    <select name="part_uni2" id="part_uni2" class="form-control">
                                        <option value="Value 1">Value 1</option>
                                        <option value="Value 2">Value 2</option>
                                        <option value="Value 3">Value 3</option>
                                        <option value="Value 4">Value 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Delivery date</label>
                                    <input name="part_deliver" id="part_deliver" type="date" class="form-control small">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" onclick="savepart()">Save</button>
                                </div>
                            </div>

                        </div><!--row-->
                        <div class="row">
                            <div class="col-md-12">
                                <table>
                                    <tr>
                                        <th>Tag Number</th>
                                        <th>Part Number</th>
                                        <th>Part Name</th>
                                        <th>Price</th>
                                        <th>Recommendation</th>
                                        <th>Quality</th>
                                    </tr>
                                   @foreach($parts as $part)
                                    <tr>
                                        <td>{{$part['tagNumber']}}</td>
                                        <td>{{$part['partNumber']}}</td>
                                        <td>{{$part['part_name']}}</td>
                                        <td>{{$part['price']}}</td>
                                        <td>{{$part['recommendiation']}}</td>
                                        <td>{{$part['quantity']}}</td>
                                    </tr>
                                     @endforeach
                                </table>


                            </div>
                        </div>



                    </div><!--main-area-->


                </div><!--popup-div-->
            </div>
        </div>
        <!--PARTSHEET-->
    </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script>
            var partidName=null;
            var condition=null;
            var work=null;
            var recommendiation=null;
        </script>
        <script>
            function namePart(x) {
                partidName=x;
            }
            function conditionsPart(y) {
                condition=y;

            }
            function workedPerformedPart(z) {
                 work=z;
            }
            function recommendiationPart(a) {
                 recommendiation=a;
            }
            function addNewPart() {
                var _token = '<?php echo csrf_token()?>';
                $.ajax({
                    url: '/storePartData',
                    type: 'post',
                    data:{partidName:partidName,condition:condition,work:work,recommendiation:recommendiation,_token:_token},
                    success:function (data) {
                        console.log(data[0]);
                        if (data==1)
                        {
                         alert('part added successfully');
                            setTimeout(function(){// wait for 5 secs(2)
                                location.reload(); // then reload the page.(3)
                            }, 100);
                         // $('.hover_bkgr_fric-widart').hide();
                        }
                        else
                        {
                            alert('please fill all form');
                        }
                    }
                });
            }
        </script>
        <script>

            function deletedrop(id)
            {
                var value=$('#drop'+id).val();
                $('#drop'+id).find('[value="'+value+'"]').remove();
            }
            function savepart() {
                var tag_number=$('#part_tag').val();
                var part_number=$('#part_number').val();
                var part_name=$('#part_name').val();
                var condition_rec=$('#part_rec1').val();
                var nd_condition_rec=$('#part_req2').val();
                var material=$('#part_matrial').val();
                var source=$('#part_source').val();
                var quantity=$('#part_quantity').val();
                var price=$('#part_price').val();
                var cost=$('#part_cost').val();
                var work_performed=$('#part_work').val();
                var recommendation=$('#part_recommendation').val();
                var parts_code=$('#part_code').val();
                var parts_uni=$('#part_uni2').val();
                var delivery_date=$('#part_deliver').val();
                var equipment_type=$('#part_equipment_type').val();
                var recommended_spare=$('#part_spare').val();
                var part_on_order=$('#part_order').val();
                var _token = '<?php echo csrf_token()?>';
                $.ajax({
                    url: '/storePart',
                    type: 'post',
                    data:{tag_number:tag_number,part_number:part_number,part_name:part_name,condition_rec:condition_rec,nd_condition_rec:nd_condition_rec
                        ,material:material,_token:_token,source:source,quantity:quantity,price:price,cost:cost
                        ,work_performed:work_performed,recommendation:recommendation,parts_code:parts_code,parts_uni:parts_uni,delivery_date:delivery_date,equipment_type:equipment_type
                        ,recommended_spare:recommended_spare,part_on_order:part_on_order},
                    success:function (data) {

                        if (data==1)
                        {
                            alert('part saved successfully');
                            setTimeout(function(){// wait for 5 secs(2)
                                location.reload(); // then reload the page.(3)
                            }, 100);
                        }
                        else
                        {
                            alert('please fill all form');
                        }
                    }
                });
            }
        </script>
        <script>
            function adddrop(id)
            {
                var value=$('#inputdrop'+id).val();

                $('#drop'+id).append('<option value="'+value+'">'+value+'</option>');

                $('#hover_'+id).hide();

                $('#inputdrop'+id).val("");

                $('#drop'+id).val(value);

            }
            function editdrop(id)
            {
                var value=$('#editdrop'+id).val();

                var previousvalue=$('#editprevious'+id).val();


                // var text=$('#drop'+id).html();

                // text = text.replace("<option value="+value+" >"+value+"</option>", "<option value="+previousvalue+" >"+previousvalue+"</option>");
                $('#drop'+id).find('[value="'+previousvalue+'"]').remove();
                $('#drop'+id).append('<option value="'+value+'">'+value+'</option>');
                $('#drop'+id).val(value);
                //  $('#drop'+id).html(text);
                $('#hover_edit'+id).hide();

                $('#editdrop'+id).val("");
                $('#previousvalue'+id).val("");

            }
            function editPopup(id)
            {
                var value=$('#drop'+id).val();



                $('#editprevious'+id).val(value);
                $('#editdrop'+id).val(value);

                $('#hover_edit'+id).show();

            }
            $(document).ready(function () {


                $("a.wizrd").click(function () {
                    $('.hover_bkgr_fric-widart').show();

                });

                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric-widart').hide();
                });

                $("a.partsheet").click(function () {
                    $('.hover_bkgr_fric-part').show();

                });

                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric-part').hide();
                });


            });
        </script>
        <script>
            var partid = null;

            var table = $('#example').DataTable();


            $('#example tbody').on('click', 'tr', function () {


                if ($(this).hasClass('selected')) {
                    $(this).removeClass('selected');
                    partid = null;
                    $('#part').val('');

                } else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                    partid = table.row(this).data()[0];
                    $('#part').val(partid);

                }
            });


        </script>


        <script>
            function owners() {
                $.ajax({
                    url: '/getPlants/' + $('#owner').val(),
                    type: 'get',
                    success: function (data) {
                        $('#plants').empty();
                        for (var x = 0; x < data.length; x++) {
                            $('#plants').append('<option value="' + data[x].id + '">' + data[x].location + '</option>');
                        }

                    }
                });
            }
        </script>
        <script>
            $('#example23').dataTable({
                "bPaginate": false
            });
        </script>

        <script>
            $(document).ready(function () {
                $("a#add1").click(function () {
                    $('#hover_1').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add2").click(function () {
                    $('#hover_2').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add3").click(function () {
                    $('#hover_3').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add4").click(function () {
                    $('#hover_4').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add5").click(function () {
                    $('#hover_5').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add6").click(function () {
                    $('#hover_6').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add7").click(function () {
                    $('#hover_7').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add8").click(function () {
                    $('#hover_8').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add9").click(function () {
                    $('#hover_9').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add10").click(function () {
                    $('#hover_10').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add11").click(function () {
                    $('#hover_11').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add12").click(function () {
                    $('#hover_12').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add13").click(function () {
                    $('#hover_13').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add14").click(function () {
                    $('#hover_14').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add15").click(function () {
                    $('#hover_15').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add16").click(function () {
                    $('#hover_16').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add17").click(function () {
                    $('#hover_17').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add18").click(function () {
                    $('#hover_18').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add19").click(function () {
                    $('#hover_19').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add20").click(function () {
                    $('#hover_20').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add21").click(function () {
                    $('#hover_21').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add22").click(function () {
                    $('#hover_22').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add23").click(function () {
                    $('#hover_23').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add24").click(function () {
                    $('#hover_24').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add25").click(function () {
                    $('#hover_25').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add26").click(function () {
                    $('#hover_26').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add27").click(function () {
                    $('#hover_27').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add28").click(function () {
                    $('#hover_28').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add29").click(function () {
                    $('#hover_29').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add30").click(function () {
                    $('#hover_30').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add31").click(function () {
                    $('#hover_31').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add32").click(function () {
                    $('#hover_32').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add33").click(function () {
                    $('#hover_33').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add34").click(function () {
                    $('#hover_34').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add35").click(function () {
                    $('#hover_35').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add36").click(function () {
                    $('#hover_36').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add37").click(function () {
                    $('#hover_37').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add38").click(function () {
                    $('#hover_38').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add39").click(function () {
                    $('#hover_39').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add40").click(function () {
                    $('#hover_40').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add41").click(function () {
                    $('#hover_41').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add42").click(function () {
                    $('#hover_42').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add43").click(function () {
                    $('#hover_43').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add44").click(function () {
                    $('#hover_44').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add45").click(function () {
                    $('#hover_45').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add46").click(function () {
                    $('#hover_46').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add47").click(function () {
                    $('#hover_47').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add48").click(function () {
                    $('#hover_48').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add49").click(function () {
                    $('#hover_49').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add50").click(function () {
                    $('#hover_50').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add51").click(function () {
                    $('#hover_51').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add52").click(function () {
                    $('#hover_52').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add53").click(function () {
                    $('#hover_53').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add54").click(function () {
                    $('#hover_54').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add55").click(function () {
                    $('#hover_55').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add56").click(function () {
                    $('#hover_56').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add57").click(function () {
                    $('#hover_57').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
            $(document).ready(function () {
                $("a#add58").click(function () {
                    $('#hover_58').show();
                });

                //$('.hover_bkgr_fricc').click(function(){
                //  $('.hover_bkgr_fricc').hide();
                //});
                $('.popupCloseButton').click(function () {
                    $('.hover_bkgr_fric').hide();
                });


            });
        </script>

        {{--<script>--}}
            {{--$('#create').submit(--}}
                {{--function( e ) {--}}

                    {{--$.ajax( {--}}
                        {{--url: '{!! route('storeEquipment') !!}',--}}
                        {{--type: 'POST',--}}
                        {{--data: new FormData( this ),--}}
                        {{--processData: false,--}}
                        {{--contentType: false,--}}
                        {{--success: function(data){--}}

                            {{--if(data.success)--}}
                            {{--{--}}
                                {{--alert(data.success);--}}
                                {{--window.location.href = "/item"--}}

                            {{--}else{--}}
                                {{--$(".print-error-msg").find("ul").html('');--}}
                                {{--$(".print-error-msg").css('display','block');--}}
                                {{--for (var i=0; i<data.error.length;i++)--}}
                                {{--{--}}
                                    {{--$(".print-error-msg").find("ul").append('<li>'+data.error[i]+'</li>');--}}
                                {{--}--}}

                            {{--}--}}



                        {{--}--}}



                    {{--} );--}}
                    {{--e.preventDefault();--}}
                {{--});--}}
        {{--</script>--}}
@endsection

