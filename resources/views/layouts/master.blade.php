<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{  'Maintenance' }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">


</head>

<body class="hold-transition skin-blue sidebar-mini">


<div class="hover_bkgr_fricc">
    <span class="helper"></span>
    <div>
        <div class="popupCloseButton">X</div>
        <div class="popup-div">
            <h3>Report Column</h3>
            <div class="main-area">
                <div class="left-col" style="overflow-y: scroll;
overflow-x: hidden;
max-height: 450px;">
                    <h4>Displayed Columns</h4>
                    <ul class="nav nav-tabs" id="columns">
                        @if(isset($columnsData))
                            @foreach($columnsData as $key => $columns)
                                @if($columns->status == 1)
                                    <li id="item{{$columns->id}}" onclick="item({{$columns->id}})"><a
                                                href="{{$columns->link_id}}" data-toggle="tab"><p>{{$columns->name}}</p>
                                        </a></li>
                                    <p style="visibility: hidden"></p>
                            @endif
                        @endforeach
                    @endif
                    <!--@if(!isset($_SESSION['item1']) ||$_SESSION['item1']==1)-->

                        <!--<li id="item1" onclick="item(1)"><a href="#sadas" data-toggle="tab"><p>Most recent</p></a></li>-->
                        <!--<p style="visibility: hidden"></p>-->
                        <!--@endif-->

                    <!--    @if(!isset($_SESSION['item2']) ||$_SESSION['item2']==1)-->

                        <!--<li id="item2" onclick="item(2)"><a href="#gfdg" data-toggle="tab"><p>Tag Number</p></a></li>-->
                        <!--<p style="visibility: hidden"></p>-->
                        <!--    @endif-->


                    <!--@if(!isset($_SESSION['item3']) ||$_SESSION['item3']==1)-->

                        <!--<li id="item3" onclick="item(3)"><a href="#notdases" data-toggle="tab"><p>Serial Number</p></a>-->
                        <!--</li>-->
                        <!--<p style="visibility: hidden"></p>-->
                        <!--    @endif-->

                    <!--@if(!isset($_SESSION['item4']) ||$_SESSION['item4']==1)-->

                        <!--<li id="item4" onclick="item(4)"><a href="#fas" data-toggle="tab"><p>Model Number</p></a></li>-->
                        <!--<p style="visibility: hidden"></p>-->
                        <!--    @endif-->

                    <!--@if(!isset($_SESSION['item5']) ||$_SESSION['item5']==1)-->

                        <!--<li id="item5" onclick="item(5)"><a href="#fasf" data-toggle="tab"><p>Date Received</p></a></li>-->
                        <!--<p style="visibility: hidden"></p>-->
                        <!--    @endif-->

                    <!--@if(!isset($_SESSION['item6']) ||$_SESSION['item6']==1)-->

                        <!--<li id="item6" onclick="item(6)"><a href="#fasg" data-toggle="tab"><p>Valve Size</p></a></li>-->
                        <!--<p style="visibility: hidden"></p>-->
                        <!--    @endif-->

                    <!--@if(!isset($_SESSION['item7']) ||$_SESSION['item7']==1)-->

                        <!--<li id="item7" onclick="item(7)"><a href="#asfasf" data-toggle="tab"><p>Description</p></a></li>-->
                        <!--<p style="visibility: hidden"></p>-->
                        <!--    @endif-->

                    <!--@if(!isset($_SESSION['item8']) ||$_SESSION['item8']==1)-->

                        <!--<li id="item8" onclick="item(8)"><a href="#faas" data-toggle="tab"><p>Equipment Location</p></a>-->
                        <!--</li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->
                    <!--    @if(!isset($_SESSION['item9']) ||$_SESSION['item9']==1)-->

                        <!--        <li id="item9" onclick="item(9)"><a href="#faas" data-toggle="tab"><p>Date Tested</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->
                    <!--    @if(!isset($_SESSION['item10']) ||$_SESSION['item10']==1)-->

                        <!--        <li id="item10" onclick="item(10)"><a href="#faas" data-toggle="tab"><p>Counter</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->
                    <!--    @if(isset($_SESSION['item11']) &&$_SESSION['item11']==1)-->

                        <!--        <li id="item11" onclick="item(11)"><a href="#faas" data-toggle="tab"><p>Alternate Relief</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->
                    <!--    @if(isset($_SESSION['item12']) &&$_SESSION['item12']==1)-->

                        <!--        <li id="item12" onclick="item(12)"><a href="#faas" data-toggle="tab"><p>App Cap Unit</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->

                    <!--    @if(isset($_SESSION['item13']) &&$_SESSION['item13']==1)-->

                        <!--        <li id="item13" onclick="item(13)"><a href="#faas" data-toggle="tab"><p>Application Cap</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->
                    <!--    @if(isset($_SESSION['item14']) &&$_SESSION['item14']==1)-->

                        <!--        <li id="item14" onclick="item(14)"><a href="#faas" data-toggle="tab"><p>ASME Cap</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->
                    <!--    @if(isset($_SESSION['item15']) &&$_SESSION['item15']==1)-->

                        <!--        <li id="item15" onclick="item(15)"><a href="#faas" data-toggle="tab"><p>ASME Cap Unit</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->
                    <!--    @if(isset($_SESSION['item16']) &&$_SESSION['item16']==1)-->

                        <!--        <li id="item16" onclick="item(16)"><a href="#faas" data-toggle="tab"><p>Assembled By</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->
                    <!--    @if(isset($_SESSION['item17']) &&$_SESSION['item17']==1)-->

                        <!--        <li id="item17" onclick="item(17)"><a href="#faas" data-toggle="tab"><p>By Press Test</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->

                    <!--    @if(isset($_SESSION['item18']) &&$_SESSION['item18']==1)-->

                        <!--        <li id="item18" onclick="item(18)"><a href="#faas" data-toggle="tab"><p>Back Pressure</p></a>-->
                        <!--        </li>-->
                        <!--        <p style="visibility: hidden"></p>-->

                        <!--    @endif-->


                    </ul>


                </div><!--left-col-->

                <div class="right-col">
                    <h4>Available Columns</h4>
                    <div class="box-content-1">
                        <select id="options" onchange="select();">
                            <option value="">Select Column</option>
                            @if(isset($columnsData))
                                @foreach($columnsData as $key => $columns)
                                    @if($columns->status == 0)
                                        <option value="{{$columns->id}}"
                                                id="option{{$columns->id}}}">{{$columns->name}}</option>
                                @endif
                            @endforeach
                        @endif
                        <!--@if(isset($_SESSION['item1']) && $_SESSION['item1']==0)-->
                            <!--    <option value="1" id="option1">Most recent</option>-->
                            <!--@endif-->
                        <!--@if(isset($_SESSION['item2']) && $_SESSION['item2']==0)-->

                            <!--    <option value="2" id="option2">Tag Number</option>-->
                            <!--@endif-->
                        <!--@if(isset($_SESSION['item3']) && $_SESSION['item3']==0)-->

                            <!--    <option value="3" id="option3">Serial Number</option>-->
                            <!--@endif-->
                        <!--@if(isset($_SESSION['item4']) && $_SESSION['item4']==0)-->

                            <!--    <option value="4" id="option4">Model Number</option>-->
                            <!--@endif-->
                        <!--@if(isset($_SESSION['item5']) && $_SESSION['item5']==0)-->

                            <!--    <option value="5" id="option5">Date Received</option>-->
                            <!--@endif-->
                        <!--@if(isset($_SESSION['item6']) && $_SESSION['item6']==0)-->

                            <!--    <option value="6" id="option6">Valve Size</option>-->
                            <!--@endif-->
                        <!--@if(isset($_SESSION['item7']) && $_SESSION['item7']==0)-->

                            <!--    <option value="7" id="option7">Description</option>-->
                            <!--@endif-->
                        <!--@if(isset($_SESSION['item8']) && $_SESSION['item8']==0)-->

                            <!--    <option value="8" id="option8">Equipment Location</option>-->
                            <!--@endif-->
                        <!--@if(isset($_SESSION['item9']) && $_SESSION['item9']==0)-->

                            <!--    <option value="9" id="option9">Date Tested</option>-->
                            <!--@endif-->
                        <!--@if(isset($_SESSION['item10']) && $_SESSION['item10']==0)-->

                            <!--    <option value="10" id="option10">Counter</option>-->
                            <!--@endif-->
                        <!--@if(!isset($_SESSION['item11']) || $_SESSION['item11']==0)-->

                            <!--    <option value="11" id="option11">Alternate Relief</option>-->
                            <!--@endif-->
                        <!--@if(!isset($_SESSION['item12']) || $_SESSION['item12']==0)-->

                            <!--    <option value="12" id="option12">App Cap Unit</option>-->
                            <!--@endif-->
                        <!--@if(!isset($_SESSION['item13']) || $_SESSION['item13']==0)-->

                            <!--    <option value="13" id="option13">Application Cap</option>-->
                            <!--@endif-->
                        <!--@if(!isset($_SESSION['item14']) || $_SESSION['item14']==0)-->

                            <!--    <option value="14" id="option14">ASME Cap</option>-->
                            <!--@endif-->
                        <!--@if(!isset($_SESSION['item15']) || $_SESSION['item15']==0)-->

                            <!--    <option value="15" id="option15">ASME Cap Unit</option>-->
                            <!--@endif-->

                        <!--@if(!isset($_SESSION['item16']) || $_SESSION['item16']==0)-->

                            <!--    <option value="16" id="option16">Assembled By</option>-->
                            <!--@endif-->
                        <!--@if(!isset($_SESSION['item17']) || $_SESSION['item17']==0)-->

                            <!--    <option value="17" id="option17">By Press Test</option>-->
                            <!--@endif-->

                        <!--@if(!isset($_SESSION['item18']) || $_SESSION['item18']==0)-->

                            <!--    <option value="18" id="option18">Back Pressure</option>-->
                            <!--@endif-->
                        </select>

                    </div>
                    <div class="box-content-2">
                        <input type="submit" value="Add" onclick="add()" class="btm"/>
                        <input type="submit" value="Remove" onclick="remove()" class="btm"/>
                        <form method="post" action="/columns">
                            @csrf
                            <input type="hidden" id="input1" name="item1"
                                   @if(isset($_SESSION['item1'])) value="{{$_SESSION['item1']}}" @endif >
                            <input type="hidden" id="input2" name="item2"
                                   @if(isset($_SESSION['item2'])) value="{{$_SESSION['item2']}}" @endif >
                            <input type="hidden" id="input3" name="item3"
                                   @if(isset($_SESSION['item3'])) value="{{$_SESSION['item3']}}" @endif >
                            <input type="hidden" id="input4" name="item4"
                                   @if(isset($_SESSION['item4'])) value="{{$_SESSION['item4']}}" @endif >
                            <input type="hidden" id="input5" name="item5"
                                   @if(isset($_SESSION['item5'])) value="{{$_SESSION['item5']}}" @endif >
                            <input type="hidden" id="input6" name="item6"
                                   @if(isset($_SESSION['item6'])) value="{{$_SESSION['item6']}}" @endif >
                            <input type="hidden" id="input7" name="item7"
                                   @if(isset($_SESSION['item7'])) value="{{$_SESSION['item7']}}" @endif >
                            <input type="hidden" id="input8" name="item8"
                                   @if(isset($_SESSION['item8'])) value="{{$_SESSION['item8']}}" @endif >

                            <input type="hidden" id="input9" name="item9"
                                   @if(isset($_SESSION['item9'])) value="{{$_SESSION['item9']}}" @endif >
                            <input type="hidden" id="input10" name="item10"
                                   @if(isset($_SESSION['item10'])) value="{{$_SESSION['item10']}}" @endif >
                            <input type="hidden" id="input11" name="item11"
                                   @if(isset($_SESSION['item11'])) value="{{$_SESSION['item11']}}" @endif >
                            <input type="hidden" id="input12" name="item12"
                                   @if(isset($_SESSION['item12'])) value="{{$_SESSION['item12']}}" @endif >
                            <input type="hidden" id="input13" name="item13"
                                   @if(isset($_SESSION['item13'])) value="{{$_SESSION['item13']}}" @endif >
                            <input type="hidden" id="input14" name="item14"
                                   @if(isset($_SESSION['item14'])) value="{{$_SESSION['item14']}}" @endif >
                            <input type="hidden" id="input15" name="item15"
                                   @if(isset($_SESSION['item15'])) value="{{$_SESSION['item15']}}" @endif >
                            <input type="hidden" id="input16" name="item16"
                                   @if(isset($_SESSION['item16'])) value="{{$_SESSION['item16']}}" @endif >
                            <input type="hidden" id="input817" name="item17"
                                   @if(isset($_SESSION['item17'])) value="{{$_SESSION['item17']}}" @endif >
                            <input type="hidden" id="input18" name="item18"
                                   @if(isset($_SESSION['item18'])) value="{{$_SESSION['item18']}}" @endif >

                            <input type="submit" value="Apply" class="btm"/>
                        </form>
                        <input type="submit" id="close" value="Cancel" class="btm"/>
                    </div>
                </div><!--right-col-->


            </div><!--main-area-->


        </div><!--popup-div-->

    </div>
</div>

<div class="wrapper" id="app">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="javascript:void(0)" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Maintenance</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('images/avatar5.png')}}" class="img-circle" alt="User Image">
                </div>
                <!--<div class="pull-left info">-->

                <!-- Status -->
                <!--</div>-->
            </div>

            <!-- search form (Optional) -->

            <!-- /.search form -->

            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header"><a href="{{url('admin')}}">HOME</a></li>
                <!-- Optionally, you can add icons to the links -->

                @if($_SESSION['usertype']==1)
                    <li><a href="{{url('usersList')}}"><i class="fa fa-users"></i> <span>View All Users</span></a></li>
                    {{--<li><a href="{{url('usersList')}}"><i class="fa fa-users"></i> <span>View Users</span></a></li>--}}
                    <li><a href="{{url('super/create')}}"><i class="fa fa-users"></i> <span>Add New User</span></a></li>
                    {{--<li><a href="{{url('super')}}"><i class="fa fa-users"></i> <span>View Admins</span></a></li>--}}
                    {{--<li><a href="{{url('usersList')}}"><i class="fa fa-users"></i> <span>View Users</span></a></li>--}}

                    {{--<li><a href="{{url('super/create')}}"><i class="fa fa-users"></i> <span>Add Admin</span></a></li>--}}

                    {{--<li><a href="{{url('supervisor')}}"><i class="fa fa-users"></i> <span>View Supervisors</span></a></li>--}}
                    {{--          <li><a href="{{url('supervisor/create')}}"><i class="fa fa-users"></i> <span>Add Supervisor</span></a></li>--}}

                    {{--<li><a href="{{url('stuff')}}"><i class="fa fa-users"></i> <span>View Staff</span></a></li>--}}
                    {{--<li><a href="{{url('stuff/create')}}"><i class="fa fa-users"></i> <span>Add Staff</span></a></li>--}}

                    {{--<li><a href="{{url('/equipment')}}"><i class="fa fa-users"></i> <span>Equipment</span></a></li>--}}
                    {{--<li><a href="{{url('owner')}}"><i class="fa fa-users"></i> <span>View Owners</span></a></li>--}}

                @elseif($_SESSION['usertype']==2)
                    <li><a href="{{url('owner')}}"><i class="fa fa-users"></i> <span>View Owners</span></a></li>
                    {{--          <li><a href="{{url('owner/create')}}"><i class="fa fa-users"></i> <span>Add Owner</span></a></li>--}}
                    {{--              <li><a href="{{url('equipmentType')}}"><i class="fa fa-users"></i> <span>View Equipment Type</span></a></li>--}}
                    {{--          <li><a href="{{url('equipmentType/create')}}"><i class="fa fa-users"></i> <span>Add Equipment Type</span></a></li>--}}

                    {{--<li><a href="{{url('entryType')}}"><i class="fa fa-users"></i> <span>View Entry Type</span></a></li>--}}
                    {{--          <li><a href="{{url('entryType/create')}}"><i class="fa fa-users"></i> <span>Add Entry Type</span></a></li>--}}
                    {{--<li><a href="{{url('equipment')}}"><i class="fa fa-users"></i> <span>View Equipments</span></a></li>--}}
                    {{--          <li><a href="{{url('/addEquipment')}}"><i class="fa fa-users"></i> <span>Add Equipment</span></a></li>--}}


                @else
                    <li><a href="{{url('owner')}}"><i class="fa fa-users"></i> <span>View Owners</span></a></li>
                    {{--          <li><a href="{{url('owner/create')}}"><i class="fa fa-users"></i> <span>Add Owner</span></a></li>--}}
                    {{--              <li><a href="{{url('equipmentType')}}"><i class="fa fa-users"></i> <span>View Equipment Type</span></a></li>--}}
                    {{--          <li><a href="{{url('equipmentType/create')}}"><i class="fa fa-users"></i> <span>Add Equipment Type</span></a></li>--}}

                    {{--          <li><a href="{{url('entryType')}}"><i class="fa fa-users"></i> <span>View Entry Type</span></a></li>--}}
                    {{--          <li><a href="{{url('entryType/create')}}"><i class="fa fa-users"></i> <span>Add Entry Type</span></a></li>--}}

                    {{--          <li><a href="{{url('equipment')}}"><i class="fa fa-users"></i> <span>View Equipment</span></a></li>--}}
                    {{--          <li><a href="{{url('/addEquipment')}}"><i class="fa fa-users"></i> <span>Add Equipment</span></a></li>--}}

                @endif





                {{--        @if(Auth::user()->user_type=='agent')--}}
                {{--        <li class=""><a href="{{url('my_tasks')}}"><i class="fa fa-microchip"></i> <span>My Tasks</span></a></li>--}}
                {{--         @endif--}}

                {{--        @if(Auth::user()->user_type=='manager')--}}

                {{--        <li class=""><a href="{{url('task')}}"><i class="fa fa-microchip"></i> <span>Tasks</span></a></li>--}}
                {{--        @endif--}}

                <li class="">

                    <a href="{{ route('logout') }}">
                        <i class="fa fa-power-off text-red"></i> <span>Logout</span>
                    </a>

                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content container-fluid">
            <div class="row">
                <div class="col-md-12">
                <a href="{{ url('ownerPlants') }}" class="btn btn-primary colr-1">
                        Owner <br/> plant Classic
                    </a>

                    {{--                    <a href="/createnew" class="btn btn-primary colr-2">--}}
                    {{--                        Add<br/> equipment--}}
                    {{--                    </a>--}}

                    {{--                    <button class="btn btn-primary colr-3">--}}
                    {{--                        New Repair <br/>Entry--}}
                    {{--                    </button>--}}

                    {{--                    <button class="btn btn-primary colr-4">--}}
                    {{--                        New or Old <br/>Repair Job--}}
                    {{--                    </button>--}}


                    <a href="/super/create" class="btn btn-primary colr-2" style="background: #ccc">
                        Add<br/> User
                    </a>
                    {{--                    <a href="/ownerplantReport" class="btn btn-primary colr-7">                        View<br/> Report                    </a>--}}
                </div>
            </div>

            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->

        <!-- Default to the left -->
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="{{asset('js/app.js')}}"></script>
{{-- <script src="/js/datatables.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    var itemid = optionid = null;

    function item(id) {

        itemid = id;

    }

    function select() {

        optionid = $('#options').val();
        //  alert(optionid);

    }

    function add() {
        if (optionid) {
            if (optionid == 1) {
                $('#columns').append('<li id="item1" onclick="item(1)" ><a href="#sadas" data-toggle="tab"><p>Most recent</p></a></li> <p style="visibility: hidden"></p>')

                $('#option1').remove();

                $('#input1').val(1);


            }

            if (optionid == 2) {

                $('#columns').append('<li id="item2" onclick="item(2)" ><a href="#sadas" data-toggle="tab"><p>Tag Number</p></a></li> <p style="visibility: hidden"></p>')
                $('#option2').remove();
                $('#input2').val(1);


            }
            if (optionid == 3) {

                $('#columns').append('<li id="item3" onclick="item(3)" ><a href="#sadas" data-toggle="tab"><p>Serial Number</p></a></li> <p style="visibility: hidden"></p>')
                $('#option3').remove();
                $('#input3').val(1);


            }
            if (optionid == 4) {

                $('#columns').append('<li id="item4" onclick="item(4)" ><a href="#sadas" data-toggle="tab"><p>Model Number</p></a></li> <p style="visibility: hidden"></p>')
                $('#option4').remove();
                $('#input4').val(1);


            }
            if (optionid == 5) {

                $('#columns').append('<li id="item5" onclick="item(5)" ><a href="#sadas" data-toggle="tab"><p>Date Received</p></a></li> <p style="visibility: hidden"></p>')
                $('#option5').remove();
                $('#input5').val(1);


            }
            if (optionid == 6) {
                $('#columns').append('<li id="item6" onclick="item(6)" ><a href="#sadas" data-toggle="tab"><p>Valve Size</p></a></li> <p style="visibility: hidden"></p>')
                $('#option6').remove();
                $('#input6').val(1);


            }
            if (optionid == 7) {
                $('#columns').append('<li id="item7" onclick="item(7)" ><a href="#sadas" data-toggle="tab"><p>Description</p></a></li> <p style="visibility: hidden"></p>')
                $('#option7').remove();
                $('#input7').val(1);


            }
            if (optionid == 8) {

                $('#columns').append('<li id="item8" onclick="item(8)" ><a href="#sadas" data-toggle="tab"><p>Equipment Location</p></a></li> <p style="visibility: hidden"></p>')
                $('#option8').remove();
                $('#input8').val(1);


            }

            if (optionid == 9) {

                $('#columns').append('<li id="item9" onclick="item(9)" ><a href="#sadas" data-toggle="tab"><p>Date Tested</p></a></li> <p style="visibility: hidden"></p>')
                $('#option9').remove();
                $('#input9').val(1);


            }
            if (optionid == 10) {

                $('#columns').append('<li id="item10" onclick="item(10)" ><a href="#sadas" data-toggle="tab"><p>Counter</p></a></li> <p style="visibility: hidden"></p>')
                $('#option10').remove();
                $('#input10').val(1);


            }
            if (optionid == 11) {

                $('#columns').append('<li id="item11" onclick="item(11)" ><a href="#sadas" data-toggle="tab"><p>Alternate Relief</p></a></li> <p style="visibility: hidden"></p>')
                $('#option11').remove();
                $('#input11').val(1);


            }
            if (optionid == 12) {

                $('#columns').append('<li id="item12" onclick="item(12)" ><a href="#sadas" data-toggle="tab"><p>App Cap Unit</p></a></li> <p style="visibility: hidden"></p>')
                $('#option12').remove();
                $('#input12').val(1);


            }
            if (optionid == 13) {

                $('#columns').append('<li id="item13" onclick="item(13)" ><a href="#sadas" data-toggle="tab"><p>Application Cap</p></a></li> <p style="visibility: hidden"></p>')
                $('#option13').remove();
                $('#input13').val(1);


            }
            if (optionid == 14) {

                $('#columns').append('<li id="item14" onclick="item(14)" ><a href="#sadas" data-toggle="tab"><p>ASME Cap</p></a></li> <p style="visibility: hidden"></p>')
                $('#option14').remove();
                $('#input14').val(1);


            }
            if (optionid == 15) {

                $('#columns').append('<li id="item15" onclick="item(15)" ><a href="#sadas" data-toggle="tab"><p>ASME Cap Unit</p></a></li> <p style="visibility: hidden"></p>')
                $('#option15').remove();
                $('#input15').val(1);


            }
            if (optionid == 16) {

                $('#columns').append('<li id="item10" onclick="item(16)" ><a href="#sadas" data-toggle="tab"><p>Assembled By</p></a></li> <p style="visibility: hidden"></p>')
                $('#option16').remove();
                $('#input16').val(1);


            }
            if (optionid == 17) {

                $('#columns').append('<li id="item17" onclick="item(17)" ><a href="#sadas" data-toggle="tab"><p>By Press Test</p></a></li> <p style="visibility: hidden"></p>')
                $('#option17').remove();
                $('#input17').val(1);


            }
            if (optionid == 18) {

                $('#columns').append('<li id="item18" onclick="item(18)" ><a href="#sadas" data-toggle="tab"><p>Back Pressure</p></a></li> <p style="visibility: hidden"></p>')
                $('#option18').remove();
                $('#input18').val(1);


            }


        }
        optionid = null;


    }

    function remove() {
        if (itemid)
            $('#item' + itemid).remove();
        $('#input' + itemid).val(0);


    }

    $(document).ready(function () {
        $(".trigger_popup_fricc").click(function () {
            $('.hover_bkgr_fricc').show();
        });
        //$('.hover_bkgr_fricc').click(function(){
        //  $('.hover_bkgr_fricc').hide();
        //});
        $('.popupCloseButton').click(function () {
            $('.hover_bkgr_fricc').hide();
        });

        $('#close').click(function () {
            $('.hover_bkgr_fricc').hide();
        });
    });
</script>


<script>


    $(document).ready(function () {

        // [ Zero Configuration ] start
        $('.simpletable').DataTable();

        // [ Default Ordering ] start


    });


    $('#delete').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var user_id = button.data('catid')
        var modal = $(this)

        modal.find('.modal-body #user_id').val(user_id);
    })


</script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

</body>
</html>