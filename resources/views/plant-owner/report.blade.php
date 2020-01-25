@extends('layouts.master')
@section('content')

    <!-- [ chat message ] end -->


    <!-- [ Main Content ] start -->
    <div class="own-report">

        <div class="box">
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary" onclick="ownerdataID()">Create New Report</button>
                    <button class="btn btn-primary">Edit Existing Report</button>
                    <button class="btn btn-primary">View Old Report</button>
                </div>
            </div>
            <div class="dt-responsive table-responsive">
                <div class="dt-responsive table-responsive">
                    <table id="example23" class="table table-striped table-bordered nowrap">
                        <thead>
                        @foreach($columnsData as $items)
                            @if($items->status == 1)
                                <th>{{$items->name}}</th>
                            @endif
                        @endforeach
                        </thead>
                        <tbody>

                        @foreach($equipments as $index => $equipment)
                            {{--                            @foreach($valve as $val)--}}
                            <tr>
                                <td>{{ $equipment->tag_number ?? '' }}</td>
                                <td>{{ $equipment->serial_number ?? '' }}</td>
                                <td>{{ $equipment->model_number ?? '' }}</td>
                                <td>{{ $equipment->created_at ?? '' }}</td>
                                <td>{{ $equipment->id == $valve[$index]->equipment_id ? $valve[$index]->inlet_size : '' }}</td>
                                <td>{{ $equipment->tag_number ?? '' }}</td>
                                <td>{{ $equipment->tag_number ?? '' }}</td>
                                <td>{{ $equipment->tag_number ?? '' }}</td>
                                <td>{{ $equipment->tag_number ?? '' }}</td>
                                <td>{{ $equipment->tag_number ?? '' }}</td>
                            </tr>
                            {{--                            @endforeach--}}
                        @endforeach
                        {{--                            @foreach($columnsData as $key => $items)--}}
                        {{--                                @if($items->status == 1 && $key == 0)--}}
                        {{--                                    <td>yes</td>--}}
                        {{--                                @elseif($items->status == 1 && $items->name == 'Tag Number')--}}
                        {{--                                    <td> {{ $equipment->tag_number ?? ''}} </td>--}}
                        {{--                                @elseif($items->status == 1 && $items->name == 'Serial Number')--}}
                        {{--                                    <td> {{$equipment->serial_number ?? ''}} </td>--}}
                        {{--                                @elseif($items->status == 1 && $items->name == 'Model Number')--}}
                        {{--                                    <td> {{$equipment->model_number ?? ''}} </td>--}}
                        {{--                                @elseif($items->status == 1 && $items->name == 'Equipment Location')--}}
                        {{--                                    <td>{{$job->location_name ?? ''}}</td>--}}
                        {{--                                @elseif($items->status == 1)--}}
                        {{--                                    <td></td>--}}
                        {{--                            @endif--}}
                        {{--                        @endforeach--}}
                        <!--    @if(!isset($_SESSION['item1']) ||$_SESSION['item1']==1)-->

                        <!--        <td>yes</td>-->
                        <!--    @endif-->
                        <!--    @if(!isset($_SESSION['item2']) ||$_SESSION['item2']==1)-->

                        <!--        <td></td>-->
                        <!--    @endif-->
                        <!--    @if(!isset($_SESSION['item3']) ||$_SESSION['item3']==1)-->

                        <!--        <td></td>-->
                        <!--    @endif-->
                        <!--    @if(!isset($_SESSION['item4']) ||$_SESSION['item4']==1)-->
                        <!--        <td></td>-->

                        <!--    @endif-->
                        <!--    @if(!isset($_SESSION['item5']) ||$_SESSION['item5']==1)-->
                        <!--        <td> {{date('y-m-d')}} </td>-->

                        <!--    @endif-->

                        <!--    @if(!isset($_SESSION['item6']) ||$_SESSION['item6']==1)-->

                        <!--        <td></td>-->
                        <!--    @endif-->
                        <!--    @if(!isset($_SESSION['item7']) ||$_SESSION['item7']==1)-->

                        <!--        <td></td>-->
                        <!--    @endif-->
                        <!--    @if(!isset($_SESSION['item8']) ||$_SESSION['item8']==1)-->

                        <!--        <td>{{$location_name}}</td>-->
                        <!--    @endif-->
                        <!--        @if(!isset($_SESSION['item9']) ||$_SESSION['item9']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(!isset($_SESSION['item10']) ||$_SESSION['item10']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->

                        <!--        @if(isset($_SESSION['item11']) &&$_SESSION['item11']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(isset($_SESSION['item12']) &&$_SESSION['item12']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(isset($_SESSION['item13']) &&$_SESSION['item13']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(isset($_SESSION['item14']) &&$_SESSION['item14']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(isset($_SESSION['item15']) &&$_SESSION['item15']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(isset($_SESSION['item16']) &&$_SESSION['item16']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(isset($_SESSION['item17']) &&$_SESSION['item17']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(isset($_SESSION['item18']) &&$_SESSION['item18']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->

                        <!--</tr>-->

                        <!--    <tr>-->
                        <!--        @if(!isset($_SESSION['item1']) ||$_SESSION['item1']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(!isset($_SESSION['item2']) ||$_SESSION['item2']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(!isset($_SESSION['item3']) ||$_SESSION['item3']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(!isset($_SESSION['item4']) ||$_SESSION['item4']==1)-->
                        <!--            <td></td>-->

                        <!--        @endif-->
                        <!--        @if(!isset($_SESSION['item5']) ||$_SESSION['item5']==1)-->

                        <!--            <td></td>-->

                        <!--        @endif-->

                        <!--        @if(!isset($_SESSION['item6']) ||$_SESSION['item6']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(!isset($_SESSION['item7']) ||$_SESSION['item7']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->
                        <!--        @if(!isset($_SESSION['item8']) ||$_SESSION['item8']==1)-->

                        <!--            <td></td>-->
                        <!--        @endif-->

                        <!--    </tr>-->


                        </tbody>

                    </table>
                </div>
            </div>
        </div>


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
                                <input type="submit" value="Add" onclick="adddrop(1)" id="adddrop1" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(2)" id="adddrop2" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(3)" id="adddrop3" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(4)" id="adddrop4" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(5)" id="adddrop5" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(6)" id="adddrop6" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(7)" id="adddrop7" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(8)" id="adddrop8" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(9)" id="adddrop9" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(10)" id="adddrop10" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(11)" id="adddrop11" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(12)" id="adddrop12" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(13)" id="adddrop13" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(14)" id="adddrop14" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(15)" id="adddrop15" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(16)" id="adddrop16" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(17)" id="adddrop17" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(18)" id="adddrop18" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(19)" id="adddrop19" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(20)" id="adddrop20" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(21)" id="adddrop21" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(22)" id="adddrop22" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(23)" id="adddrop23" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(24)" id="adddrop24" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(25)" id="adddrop25" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(26)" id="adddrop26" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(27)" id="adddrop27" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(28)" id="adddrop28" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(29)" id="adddrop29" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(30)" id="adddrop30" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(31)" id="adddrop31" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(32)" id="adddrop32" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(33)" id="adddrop33" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(34)" id="adddrop34" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(35)" id="adddrop35" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(36)" id="adddrop36" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(37)" id="adddrop37" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(38)" id="adddrop38" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(39)" id="adddrop39" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(40)" id="adddrop40" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(41)" id="adddrop41" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(42)" id="adddrop42" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(43)" id="adddrop43" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(44)" id="adddrop44" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(45)" id="adddrop45" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(46)" id="adddrop46" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(47)" id="adddrop47" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(48)" id="adddrop48" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(49)" id="adddrop49" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(50)" id="adddrop50" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(51)" id="adddrop51" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(52)" id="adddrop52" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(53)" id="adddrop53" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(54)" id="adddrop54" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(55)" id="adddrop55" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(56)" id="adddrop56" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(57)" id="adddrop57" class="btm"/>
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
                                <input type="submit" value="Add" onclick="adddrop(58)" id="adddrop58" class="btm"/>
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
                                <input type="hidden" id="editprevious1" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious2" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious3" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious4" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious5" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious6" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious7" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious8" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious9" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious10" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious11" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious12" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious13" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious14" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious15" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious16" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious17" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious18" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious19" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious20" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious21" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious22" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious23" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious24" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious25" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious26" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious27" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious28" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious29" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious30" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious31" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious32" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious33" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious34" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious35" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious36" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious37" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious38" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious39" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious40" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious41" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious42" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious43" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious44" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious45" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious46" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious47" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious48" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious49" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious50" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious51" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious52" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious53" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious54" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious54" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious56" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious57" placeholder="Edit data">

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
                                <input type="hidden" id="editprevious58" placeholder="Edit data">

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
                    <div id="error_message"></div>
                    <div class="main-area">
                        <div class="left-col">
                            <h2>Part Status</h2>
                            <span><label for="received">Rec'd</label><input class="statuses"
                                                                            onclick="partstatuses('received')"
                                                                            id="received" type="radio"
                                                                            name="partstatus"/> </span>
                            <span><label for="first">first</label><input class="statuses"
                                                                         onclick="partstatuses('first')" id="first"
                                                                         type="radio" name="partstatus"/> </span>
                            <span><label for="second">second</label><input class="statuses"
                                                                           onclick="partstatuses('second')" id="second"
                                                                           type="radio" name="partstatus"/> </span>
                            <span><label for="work">Work</label><input class="statuses" onclick="partstatuses('work')"
                                                                       id="work" type="radio"
                                                                       name="partstatus"/> </span>
                            <span><label for="rec">Rec</label><input class="statuses" onclick="partstatuses('rec')"
                                                                     id="rec" type="radio" name="partstatus"/> </span>
                            <h2>Part Name</h2>
                            <div class="overtext">
                                <ul class="nav nav-tabs" id="nameParts">
                                    @foreach($parts_all->partname as $part)
                                        <li id="partnameID{{$part->id}}" onclick="namePart({{$part->id}})"><a
                                                    href="#sadas" data-toggle="tab">{{$part->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="right-col">
                            <div class="box-content-1">
                                <h2>Received Conditions</h2>
                                <ul class="nav nav-tabs" id="conditionsParts">
                                    @foreach($parts_all->received_conditions as $key => $condition)
                                        {{--<li id="partnameID{{$key}}"  onclick="namePart({{$key}})"><a href="#sadas"  data-toggle="tab">{{$part}}</a></li>--}}
                                        <li id="item" onclick="conditionsPart('{{$condition}}')"><a href="#sadas"
                                                                                                    data-toggle="tab">{{$condition}}</a>
                                        </li>
                                @endforeach
                                <!--<li id="item1" onclick="conditionsPart('good')"><a href="#sadas" data-toggle="tab">Good</a></li>-->
                                    <!--<li id="item2"onclick="conditionsPart('bad')" value="Tag Number"><a href="#gfdg" data-toggle="tab">Bad</a></li>-->
                                </ul>
                            </div>
                            <div class="box-content-1 cols">
                                <h2>Worked Performed</h2>
                                <ul class="nav nav-tabs" id="workedPerformedParts">
                                    @foreach($parts_all->work_performed as $key => $performed)
                                        <li id="item1{{$key}}" onclick="workedPerformedPart('{{$performed}}')"><a
                                                    href="#sadas" data-toggle="tab">{{$performed}}</a></li>
                                @endforeach
                                <!--<li id="item11" onclick="workedPerformedPart('good1')"><a href="#sadas" data-toggle="tab">Good 1</a></li>-->
                                    <!--<li id="item12" onclick="workedPerformedPart('bad1')"><a href="#gfdg" data-toggle="tab">bad 1</a></li>-->
                                </ul>
                            </div>
                            <div class="box-content-1 colm">
                                <h2>Recommendation</h2>
                                <ul class="nav nav-tabs" id="recommendiationParts">
                                    @foreach($parts_all->recommendation as $key => $recommend)
                                        @php //dd($parts_all, $key, $recommend)
                                        @endphp
                                        <li id="item2{{$key}}" onclick="recommendiationPart('{{$recommend}}')"><a
                                                    href="#sadas" data-toggle="tab">{{$recommend}}</a></li>
                                @endforeach
                                <!--<li id="item21" onclick="recommendiationPart('good2')"><a href="#sadas" data-toggle="tab">Good2</a></li>-->
                                    <!--<li id="item22" onclick="recommendiationPart('bad2')"><a href="#gfdg" data-toggle="tab">bad2</a></li>-->
                                </ul>
                            </div>
                            <div class="box-content-2">
                                <input type="button" onclick="addNewPart()" value="Transfer Your Option To Part Sheet"
                                       class="btm"/>
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
                                    <input type="text" name="part_tag" id="part_tag" class="form-control"
                                           placeholder="Tag Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Material</label>
                                    <select name="part_matrial" id="part_matrial" class="form-control">
                                        <option value="">Select Material</option>
                                        @foreach( $parts_all->material as $material)
                                            <option value="{{$material}}">{{$material}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Equipment Type</label>
                                    <input type="text" name="part_equipment_type" id="part_equipment_type"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Source</label>
                                    <select name="part_source" id="part_source" class="form-control">
                                        <option value="">Select Source</option>
                                        @foreach( $parts_all->source as $source)
                                            <option value="{{$source}}">{{$source}}</option>
                                        @endforeach
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
                                        <option value="">Select Part Number</option>
                                        @foreach( $parts_all->part_number as $number)
                                            <option value="{{$number}}">{{$number}}</option>
                                        @endforeach
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
                                    <input type="number" name="part_quantity" id="part_quantity"
                                           class="form-control small">
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
                                        <option value="">Select Part Name</option>
                                        @foreach( $parts_all->partname as $partname)
                                            <option value="{{$partname->name}}">{{$partname->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Work Perfomed</label>
                                    <select name="part_work" id="part_work" class="form-control">
                                        <option value="">Select Work Performed</option>
                                        @foreach( $parts_all->work_performed as $work)
                                            <option value="{{$work}}">{{$work}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Condition Rec'd</label>
                                    <select name="part_rec1" id="part_rec1" class="form-control">
                                        <option value="">Select Condition Rec'd</option>
                                        @foreach( $parts_all->received_conditions as $condition)
                                            <option value="{{$condition}}">{{$condition}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Recommendation</label>
                                    <select name="part_recommendation" id="part_recommendation" class="form-control">
                                        <option value="">Select Recommendation</option>
                                        @foreach( $parts_all->recommendation as $recommend)
                                            <option value="{{$recommend}}">{{$recommend}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">2nd Cond Rec'd</label>
                                    <select name="part_req2" id="part_req2" class="form-control">
                                        <option value="">Select 2nd Cond Rec'd</option>
                                        @foreach( $parts_all->received_conditions as $condition)
                                            <option value="{{$condition}}">{{$condition}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Part Code</label>
                                    <select name="part_code" id="part_code" class="form-control">
                                        <option value="">Select Part Code</option>
                                        @foreach( $parts_all->part_number as $number)
                                            <option value="{{$number}}">{{$number}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">

                                    <input type="checkbox" value="1" name="part_spare" checked id="part_spare" class="">Recommended
                                    Spare<br/>
                                    <input type="checkbox" value="1" name="part_order" checked id="part_order" class="">Part
                                    On Order<br/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Parts Univ2</label>
                                    <select name="part_uni2" id="part_uni2" class="form-control">
                                        <option value="">Select Parts Univ2</option>
                                        <option value="21">21</option>
                                        <option value="25">25</option>
                                        <option value="M1XP">M1XP</option>
                                        <option value="M1XV">M1XV</option>
                                        <option value="(Banks)">(Banks)</option>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" onclick="savepart()">Post</button>
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
                                        <th>Quantity</th>
                                    </tr>

                                    @foreach($parts as $part)
                                        <tr>
                                            <td>{{$part['tag_number']}}</td>
                                            <td>{{$part['part_number']}}</td>
                                            <td>{{$part['part_name']}}</td>
                                            <td>{{$part['price']}}</td>
                                            <td>{{$part['recommendation']}}</td>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>

        var ownerid = '{{ $_SESSION['owner_id'] }}';
        var plantid = '{{ $_SESSION['plant_id'] }}';

        function ownerdataID() {
            if (plantid.length == 0) {
                alert("please select Plant");
                return;

            }
            if (ownerid.length == 0) {
                alert("please select Owner");
                return;

            }

            location.href = '{{ url('ownerplantCreateReport') }}' + '/' + +ownerid + '/' + plantid;


        }
    </script>

    <script>
        var partidName = null;
        var condition = null;
        var work = null;
        var recommendiation = null;
        var partStatus = null;
    </script>
    <script>
        function partstatuses(x) {
            partStatus = x;
        }

        function namePart(x) {
            partidName = x;
            checkStatus(x)
        }

        function checkStatus(val) {
            var _token = '<?php echo csrf_token()?>';
            $.ajax({
                url: '/partStatus',
                type: 'post',
                data: {part_id: val, _token: _token},
                success: function (data) {
                    $('.statuses').attr('checked', false);
                    if (typeof (data) == 'string' && data != "") {
                        partStatus = data

                        $('#' + data).attr('checked', true);

                        //  alert('part added successfully');
                        // setTimeout(function(){// wait for 5 secs(2)
                        //     location.reload(); // then reload the page.(3)
                        // }, 100);
                        // $('.hover_bkgr_fric-widart').hide();
                    }

                }
            });
        }

        function conditionsPart(y) {
            condition = y;

        }

        function workedPerformedPart(z) {
            work = z;
        }

        function recommendiationPart(a) {
            recommendiation = a;
        }

        function addNewPart() {
            var _token = '<?php echo csrf_token()?>';
            if (partStatus == '') {
                partStatus = 'received';
            }
            $.ajax({
                url: '/storePartData',
                type: 'post',
                data: {
                    partStatus: partStatus,
                    partidName: partidName,
                    condition: condition,
                    work: work,
                    recommendiation: recommendiation,
                    _token: _token
                },
                success: function (data) {
                    // console.log(data[0]);
                    if (data) {
                        if (data.partidName || data.partStatus) {
                            var errors = data;
                            errorsHtml = '<div class="alert alert-danger"><ul>';
                            console.log(errors)
                            $.each(errors, function (k, v) {

                                errorsHtml += '<li>' + v + '</li>';
                            });
                            errorsHtml += '</ul></di>';
                            $('#error_message').html(errorsHtml);
                            return false;
                        }

                        localStorage.setItem('part_sheet', true)
                        alert('part added successfully');
                        setTimeout(function () {// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 100);
                        // $('.hover_bkgr_fric-widart').hide();
                    } else {
                        alert('please fill all form');
                    }
                }
            });
        }
    </script>
    <script>
        function hidesaveReportJob(val) {
            $('#saveReportJob').hide();

            var cur_tab = localStorage.setItem('tab', val.id)


        }
    </script>
    <script>
        function showsaveReportJob(val) {
            $('#saveReportJob').show();

            var cur_tab = localStorage.setItem('tab', val.id)

        }
    </script>
    <script>
        function deletedrop(id) {
            var value = $('#drop' + id).val();
            $('#drop' + id).find('[value="' + value + '"]').remove();
        }

        function savepart() {

            localStorage.setItem('part_sheet', true)

            var tag_number = $('#part_tag').val();
            var part_number = $('#part_number').val();
            var part_name = $('#part_name').val();
            var condition_rec = $('#part_rec1').val();
            var nd_condition_rec = $('#part_req2').val();
            var material = $('#part_matrial').val();
            var source = $('#part_source').val();
            var quantity = $('#part_quantity').val();
            var price = $('#part_price').val();
            var cost = $('#part_cost').val();
            var work_performed = $('#part_work').val();
            var recommendation = $('#part_recommendation').val();
            var parts_code = $('#part_code').val();
            var parts_uni = $('#part_uni2').val();
            var delivery_date = $('#part_deliver').val();
            var equipment_type = $('#part_equipment_type').val();
            var recommended_spare = $('#part_spare').val();
            var part_on_order = $('#part_order').val();
            var _token = '<?php echo csrf_token()?>';
            $.ajax({
                url: '/storePart',
                type: 'post',
                data: {
                    tag_number: tag_number,
                    part_number: part_number,
                    part_name: part_name,
                    condition_rec: condition_rec,
                    nd_condition_rec: nd_condition_rec
                    ,
                    material: material,
                    _token: _token,
                    source: source,
                    quantity: quantity,
                    price: price,
                    cost: cost
                    ,
                    work_performed: work_performed,
                    recommendation: recommendation,
                    parts_code: parts_code,
                    parts_uni: parts_uni,
                    delivery_date: delivery_date,
                    equipment_type: equipment_type
                    ,
                    recommended_spare: recommended_spare,
                    part_on_order: part_on_order
                },
                success: function (data) {

                    if (data == 1) {
                        alert('part saved successfully');
                        setTimeout(function () {// wait for 5 secs(2)
                            location.reload(); // then reload the page.(3)
                        }, 100);
                    } else {
                        alert('please fill all form');
                    }
                }
            });
        }
    </script>
    <script>
        function adddrop(id) {
            var value = $('#inputdrop' + id).val();

            $('#drop' + id).append('<option value="' + value + '">' + value + '</option>');

            $('#hover_' + id).hide();

            $('#inputdrop' + id).val("");

            $('#drop' + id).val(value);

        }

        function editdrop(id) {
            var value = $('#editdrop' + id).val();

            var previousvalue = $('#editprevious' + id).val();


            // var text=$('#drop'+id).html();

            // text = text.replace("<option value="+value+" >"+value+"</option>", "<option value="+previousvalue+" >"+previousvalue+"</option>");
            $('#drop' + id).find('[value="' + previousvalue + '"]').remove();
            $('#drop' + id).append('<option value="' + value + '">' + value + '</option>');
            $('#drop' + id).val(value);
            //  $('#drop'+id).html(text);
            $('#hover_edit' + id).hide();

            $('#editdrop' + id).val("");
            $('#previousvalue' + id).val("");

        }

        function editPopup(id) {
            var value = $('#drop' + id).val();
            $('#editprevious' + id).val(value);
            $('#editdrop' + id).val(value);

            $('#hover_edit' + id).show();

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
        if (localStorage.getItem('tab')) {
            $('#' + localStorage.getItem('tab'))[0].click();
        }

        if (localStorage.getItem('part_sheet') == "true") {
            // $("a.partsheet").click(function () {
            $('.hover_bkgr_fric-part').show();

            // });

            localStorage.setItem('part_sheet', false)
        }

        $(document).ready(function () {

            $('.sub_geneal_tab li a').on('click', function () {
                localStorage.setItem('sub_tab', $(this).attr('id'))
            })

            if (localStorage.getItem('tab')) {
                if (localStorage.getItem('sub_tab') && localStorage.getItem('tab') == 'tab-datazz') {
                    $('#' + localStorage.getItem('tab'))[0].click();
                    $('#' + localStorage.getItem('sub_tab'))[0].click();
                } else {
                    localStorage.setItem('sub_tab', '');
                    $('#' + localStorage.getItem('tab'))[0].click();
                }

            }
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
