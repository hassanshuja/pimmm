@extends('layouts.master')
@section('content')

    <!-- [ chat message ] end -->


    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ breadcrumb ] start -->
                            <div class="page-header">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="page-header-title">
                                                <h5 class="m-b-10">Create Invoice</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Invoices</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Create Trainer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- [ Form Validation ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Smart Wizard</h5>
                                        </div>
                                        <div class="card-body">
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
                                            <div class="row">
                                                <!-- [ External toolbar sample ] start -->
                                                <div class="col-12">

                                                </div>
                                                <!-- [ External toolbar sample ] End -->
                                            </div>
                                            <!-- [ SmartWizard html ] start -->
                                            <div id="smartwizard">
                                                <ul>
                                                    <li><a href="#step-1">
                                                            <p class="m-0">Submit Data</p>
                                                        </a></li>
                                                    <li><a href="#step-2">
                                                            <p class="m-0">Check Data</p>
                                                        </a></li>
                                                    <li><a href="#step-3">
                                                            <p class="m-0">Submit Date/Number</p>
                                                        </a></li>
                                                    <li><a href="#step-4">
                                                            <p class="m-0">Preview</p>
                                                        </a></li>
                                                    <li><a href="#step-5">
                                                            <p class="m-0">Print Invoice</p>
                                                        </a></li>
                                                </ul>
                                                <div>
                                                    <div id="step-1">
                                                        <div id="step-1-1" >
                                                        <h5>Submit Data</h5>
                                                        <hr>
                                                        <h6>Last Invoices</h6>

                                                        <table class="table table-striped table-bordered nowrap" >
                                                            <thead>
                                                            <th>Date</th>
                                                            <th>Number</th>
                                                            <th>Month</th>

                                                            </thead>
                                                            <tbody>
                                                            @foreach($invoices as $invoice)
                                                                <tr>
                                                                    <td >{{date('Y-m-d',strtotime($invoice->date))}}
                                                                    </td>
                                                                    <td>{{$invoice->id}}
                                                                    </td>
                                                                    <td>{{date('m/Y',strtotime($invoice->date))}}
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>

                                                        </table>
                                                            <h6>Current courses</h6>

                                                            <table class="table table-striped table-bordered nowrap" >
                                                                <thead>
                                                                <th>Course No.</th>
                                                                <th>Customer</th>
                                                                <th>Time</th>
                                                                <th>Duration</th>
                                                                <th>Remaining Min</th>

                                                                </thead>
                                                                <tbody>
                                                                @php($total=0)
                                                                @php($remaining=0)

                                                                @foreach($courses as $course)
                                                                    <tr>
                                                                        <td ><a href="#" onclick="func({{$course->id}})">{{$course->code}}</a>
                                                                        </td>
                                                                        <td >{{$course->customer->first_name.' '.$course->customer->last_name}}
                                                                        </td>
                                                                        <td >{{$course->from.' - '.$course->to}}
                                                                        <td >{{$course->total_duration*$course->minutes_ue}}
                                                                        <td >{{$course->remaining_duration*$course->minutes_ue}}
                                                                        @php($total+=$course->total_duration*$course->minutes_ue)
                                                                        @php($remaining+=$course->remaining_duration*$course->minutes_ue)

                                                                    </tr>
                                                                @endforeach

                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                    <td >Total</a>
                                                                    </td>
                                                                    <td >
                                                                    </td>
                                                                    <td >
                                                                    <td >{{$total}}
                                                                    <td >{{$remaining}}

                                                                </tr>
                                                                </tfoot>

                                                            </table>

                                                            <h6>Submitted Course Dates </h6>

                                                            <table class="table table-striped table-bordered nowrap" >
                                                                <thead>
                                                                <th>Course No.</th>
                                                                <tH>Dates</tH>

                                                                <th>Minutes</th>
                                                               <th> REMAINING MIN</th>
                                                                <th> Comments</th>
                                                                <th> Delete</th>

                                                                </thead>
                                                                <tbody id="submitted_dates">

                                                                </tbody>

                                                            </table>
                                                        </div>

                                                        <div id="step-1-2" style="display: none;" >

                                                            <form action="{{url('/submit_dates')}}"  method="POST" id="course_form" >
                                                                <input type="hidden" name="course_name" id="course_id" >
                                                                @csrf
                                                            <h5 id="course_name"></h5>
                                                                <hr>
                                                            <h5 >Training Dates:{{date('M Y')}} </h5>
                                                                <div>
                                                                    <?php

                                                                    $dateComponents = getdate();

                                                                    $month = $dateComponents['mon'];
                                                                    $year = $dateComponents['year'];

                                                                    echo build_calendar($month,$year);

                                                                    ?>

                                                                    @for($x=0;$x<20;$x++)
                                                            <div class="row">

                                                                <div class="col-xl-2 col-md-6 mb-5">
                                                                    <p>Day </p>

                                                                    <select id="day-{{$x+1}}" class="form-control day" name="days[]">
                                                                        <p>Day </p>

                                                                        <option></option>
                                                                        @for($i=1;$i<=31;$i++)
                                                                            <option value="{{$i}}">{{$i}}</option>

                                                                        @endfor
                                                                    </select>
                                                                </div>
                                                                <div class="col-xl-3 col-md-6 mb-5">
                                                                    <p>Minutes (Standard Period) </p>
                                                                    <select class="form-control" id="standard-{{$x+1}}"  name="standard[]">
                                                                        <option></option>
                                                                        <option value="30">30</option>
                                                                        <option value="45">45 (1 UE)</option>
                                                                        <option value="60">60</option>
                                                                        <option value="90">90 (2 UE)</option>
                                                                        <option value="120">120</option>
                                                                        <option value="135">135 (3 UE)</option>
                                                                        <option value="150">150</option>
                                                                        <option value="180">180 (4 UE)</option>
                                                                        <option value="225">225 (5 UE)</option>
                                                                        <option value="240">240</option>

                                                                        <option value="270">270 (6 UE)</option>
                                                                        <option value="300">300</option>

                                                                        <option value="315">315 (7 UE)</option>
                                                                        <option value="360">360 (8 UE)</option>
                                                                        <option value="405">405 (9 UE)</option>
                                                                        <option value="450">450 (10 UE)</option>

                                                                    </select>
                                                                </div>
                                                                <div class="col-xl-3 col-md-6 mb-5">

                                                                    <p>Minutes (Non-Standard length of training) </p>
                                                                    <input type="number" id="minutes-{{$x+1}}" step=".01" name="minutes[]" class="form-control"  >

                                                                </div>

                                                                <div class="col-xl-4 col-md-6 mb-5">
                                                                    <p>Reason For No Training Or Shorter/Longer Training </p>
                                                                    <select class="form-control" id="comment-{{$x+1}}"  name="comments[]">
                                                                        <option></option>
                                                                        <option value="RA">Customer canceled on time (4 weeks before) </option>
                                                                        <option value="NRA">Customer has NOT canceled in time </option>
                                                                        <option value="RC">Royal Canadian has canceled</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                                    @endfor
                                                                </div>
                                                                <button href="#" id="submit"  class="btn btn-primary">Save Data </button>

                                                            </form>



                                                    </div>


                                                    </div>
                                                    <div id="step-2">
                                                        <div id="step-2-1" >
                                                            <h6> <a href="#" onclick="miscellaneous()"> Submit Miscellaneous</a></h6>

                                                            <hr>
                                                            <h5>Check Data</h5>

                                                            <hr>



                                                            <h6>Submitted Course Dates </h6>

                                                            <table class="table table-striped table-bordered nowrap" >
                                                                <thead>
                                                                <th>Course No.</th>
                                                                <th>Dates</th>

                                                                <th>Total Minutes</th>
                                                                <th>Total UE</th>
                                                                <th>Fee/UE (Net)</th>


                                                                </thead>
                                                                <tbody id="all_dates">

                                                                </tbody>

                                                            </table>

                                                            <h6 id="total_minutes">Total Minutes: </h6>
                                                            <hr>
                                                            <h6 id="total_ue">Total Ue: </h6>
                                                            <hr>
                                                            <h5 id="total_fe">Total Fee: </h5>

                                                            <h6>Submitted Miscellaneous Dates </h6>

                                                            <table class="table table-striped table-bordered nowrap" >
                                                                <thead>
                                                                <th>No. of items</th>
                                                                <tH>Item</tH>

                                                                <th>Total Net</th>



                                                                </thead>
                                                                <tbody id="miscellaneous_dates">

                                                                </tbody>

                                                            </table>


                                                        </div>

                                                        <div id="step-2-2" style="display: none;" >
                                                            <form action="{{url('/submit_expenses')}}"  method="POST" id="expenses_form" >
                                                                @csrf
                                                                <h5 >Create Invoice-Miscellaneous</h5>
                                                                <hr>
                                                                <h6>Submit Miscellaneous charges such as:   </h6>
                                                                <ui>
                                                                    <li>travel expenses (contractually agreed) </li>
                                                                    <li>UE/ZS Previous month  </li>
                                                                    <li>oral assessments  </li>

                                                                </ui>
                                                                <h6>DO NOT use for:   </h6>
                                                                <ui>
                                                                    <li>any receipts with VAT  </li>
                                                                    <li>Receipts for books  </li>


                                                                </ui>
                                                                <div>

                                                                    @for($x=0;$x<10;$x++)
                                                                        <div class="row">

                                                                            <div class="col-xl-4 col-md-6 mb-5">
                                                                                <p>No. of items </p>

                                                                                <input type="number" id="item-counter-{{$x+1}}" step="1" name="itemscounter[]" class="form-control" >

                                                                            </div>
                                                                            <div class="col-xl-4 col-md-6 mb-5">
                                                                                <p>Item </p>

                                                                                <input type="text" id="item-{{$x+1}}"  name="items[]" class="form-control" >

                                                                            </div>
                                                                            <div class="col-xl-4 col-md-6 mb-5">
                                                                                <p>Price per item </p>

                                                                                <input type="number" id="item-price-{{$x+1}}" step=".01" name="itemsprice[]" class="form-control" >

                                                                            </div>                                                                        </div>
                                                                    @endfor
                                                                </div>
                                                                <button href="#" id="submit_expenses"  class="btn btn-primary">Save Data </button>

                                                            </form>



                                                        </div>


                                                    </div>
                                                    <div id="step-3">
                                                        <h5>Finish invoicing - Summary </h5>
                                                        <hr>
                                                        <h6 id="total_fee3">Total Fee(net) </h6>

                                                        <h5 id="total_miscellaneous">Miscellaneous(net) </h5>
                                                        <hr>
                                                        <div class="row">

                                                            <div class="col-xl-4 col-md-6 mb-5">
                                                                <p>Invoice Number(max 12 char.) </p>

                                                                <input type="text" id="invoice-number" maxlength="12" name="invoice_number" class="form-control" >

                                                            </div>
                                                            <div class="col-xl-4 col
                                                            -md-6 mb-5">
                                                                <p>Invoice Date </p>

                                                                <input type="text" id="date" class="form-control" value="{{date('Y-m-d')}}" placeholder="Date" data-dtp="dtp_EHGau">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div id="step-4">
                                                        <h5>Invoice - PREVIEW - not for printing </h5>
                                                        <div id="print-invoice">


                                                        </div>
                                                        <div id="editor"></div>

                                                    </div>
                                                    <div id="step-5">
                                                        <h5>1- Finish Invoicing</h5>

                                                        <p></p>
                                                        <a href="/pdf" id="print-pdf" id target="_blank"  class="btn btn-primary"> Create Invoice as a PDF   </a>
                                                        <h5>2- Upload Both Your invoice And attendances lists.   </h5>
                                                        <form method="post" action="/invoice/create" enctype="multipart/form-data">
                                                            {!! csrf_field() !!}

                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">File 1</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file"  name="file_one" id="inputGroupFile01">
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">File 2</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file"  name="file_two" id="inputGroupFile01">
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">File 3</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file" name="file_three" id="inputGroupFile01">
                                                            </div>
                                                        </div>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">File 4</span>
                                                            </div>
                                                            <div class="custom-file">
                                                                <input type="file"  name="file_four" id="inputGroupFile01">
                                                            </div>
                                                        </div>
                                                            <h5>3- Don't forget to click the button otherwise Your invoice cannot be procesed.   </h5>

                                                            <button type="submit" class="btn btn-primary">Finish Invoice </button>

                                                        </form>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/dist/jspdf.min.js"></script>

<script>
    function func( course) {
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url:"/course-info",
            method:"post",
            data:{course_id:course  , _token:_token},
            success:function (data) {
                $('#course_name').empty();
                $('#course_name').append('Data Submission:'+data.code);
                $('#course_id').val(data.id);

                $('#step-1-1').css('display','none');
                $('#step-1-2').css('display','');

                //postMessage(alert('g'));


            }
        })






    }
    function miscellaneous()
    {
        $('#step-2-1').css('display','none');
        $('#step-2-2').css('display','');

    }
    $(document).ready(function () {

        $("#submit").click(function(e){
            $( "#form" ).submit();


        });


    $("#invoice-number").change(function(e){

        var _token = $('input[name="_token"]').val();
        var invoice=$( "#invoice-number" ).val();
        $.ajax( {
            url: '{!! url('/submit_invoice_number') !!}',
            type: 'POST',
            data:{invoice:invoice , _token:_token},
            success: function(result){
                //alert(result);

                $('#print-invoice').empty();
                $('#print-invoice').append(result);




            }



        } );



    });

        $("#date").change(function(e){

            var _token = $('input[name="_token"]').val();
            var invoice=$( "#date" ).val();
            $.ajax( {
                url: '{!! url('/submit_invoice_date') !!}',
                type: 'POST',
                data:{invoice:invoice , _token:_token},
                success: function(result){


                    $('#print-invoice').empty();
                    $('#print-invoice').append(result);



                }



            } );



        });

    $('#course_form').submit(
        function( e ) {

            $.ajax( {
                url: '{!! url('/submit_dates') !!}',
                type: 'POST',
                data: new FormData( this ),
                processData: false,
                contentType: false,
                success: function(result){
                    var net=0;
                    var minutes=0;
                    var ue=0;
                    $('#submitted_dates').empty();
                    $('#all_dates').empty();

                    for (var x=0;x<result.length;x++)
                    {
                        minutes+=result[x].minutes;
                        ue+=result[x].total_ue;
                        net+=result[x].total_ue*result[x].fe;

                        $("#submitted_dates").append(

                            '<tr id="sumitted'+x+'">' +
                            '<td>' +result[x].course+
                            '</td><td>' +result[x].dates+
                            '</td><td>' +result[x].minutes+
                            '</td><td>' +result[x].remaining+
                            '</td>' +
                            '<td><textarea  onchange="coursecomment( '+x+',this)" >' +result[x].comment+'</textarea></td>' +
                            '<td><a href="#" onclick="deletecourse( '+x+')">Delete</a></td></tr>'
                        )
                        $("#all_dates").append(

                            '<tr id="all'+x+'">' +
                            '<td>' +result[x].course+
                            '</td><td>' +result[x].dates+
                            '</td><td>' +result[x].minutes+
                            '</td><td>' +result[x].total_ue+
                            '</td><td>' +result[x].fe+
                            '</tr>'
                        )
                    }

                    $('#step-1-2').css('display','none');
                    $('#step-1-1').css('display','');
                    $('#total_minutes').empty();
                    $('#total_minutes').append('Total Minutes:'+minutes);
                    $('#total_ue').empty();
                    $('#total_ue').append('Total Ue:'+ue);
                    $('#total_fe').empty();
                    $('#total_fe').append('Total Fee:'+Math.round(net * 100) / 100);
                    $('#total_fee3').empty();
                    $('#total_fee3').append('Total Fee(Net) '+Math.round(net * 100) / 100);
                    for (var x=1;x<31;x++) {
                        $('#day-' + x + '').val('');
                    }
                    for (var x=1;x<31;x++) {
                        $('#standard-' + x + '').val('');
                    }
                    for (var x=1;x<31;x++) {
                        $('#minutes-' + x + '').val('');
                    }



                }



            } );
            e.preventDefault();
        }
    );


        $("#submit_expenses").click(function(e){


        });

        $('#expenses_form').submit(
            function( e ) {

                $.ajax( {
                    url: '{!! url('/submit_expenses') !!}',
                    type: 'POST',
                    data: new FormData( this ),
                    processData: false,
                    contentType: false,
                    success: function(result){
                        var net=0;
                        $('#miscellaneous_dates').empty();

                        for (var x=0;x<result.length;x++)
                        {

                            net+=result[x].total;


                            $("#miscellaneous_dates").append(

                                '<tr id="miscellaneous'+x+'">' +
                                '<td>' +result[x].counter+
                                '</td><td>' +result[x].item+
                                '</td><td>' +result[x].total+ '</td> </tr>'
                            )
                        }

                        $('#step-2-2').css('display','none');
                        $('#step-2-1').css('display','');

                        $('#total_miscellaneous').empty();
                        $('#total_miscellaneous').append('Miscellaneous(net) '+Math.round(net * 100) / 100);                        for (var x=1;x<11;x++) {
                            $('#item-counter-' + x + '').val('');
                        }
                        for (var x=1;x<11;x++) {
                            $('#item-' + x + '').val('');
                        }
                        for (var x=1;x<11;x++) {
                            $('#item-price-' + x + '').val('');
                        }



                    }



                } );
                e.preventDefault();
            }
        );
    });

</script>



<script type="text/javascript">

    function print()
    {

        var _token = $('input[name="_token"]').val();
        $.ajax( {
            url: '{!! url('/pdf') !!}',
            type: 'POST',
            data:{invoice:$('#print-invoice').html() , _token:_token},
            success: function(result){






            }



        } );
//         var divToPrint=document.getElementById("print-invoice");
//         //var text = divToPrint.innerHTML.replace(/<\/?[^>]+>/ig, " ");
//         // var temp = document.createElement("div");
//         // temp.innerHTML = text;
//         // doc.text(5, 5,temp.textContent);
//
//         // var specialElementHandlers = {
//         //     '#editor': function (element, renderer) {
//         //         return true;
//         //     }
//         // };
//         //
//         //     doc.fromHTML($('#print-invoice').html(), 15, 15, {
//         //         'width': 170,
//         //         'elementHandlers': specialElementHandlers
//         //     });
//         //     doc.save('sample-file.pdf');
//
//         var doc = new jsPDF();
//
//
//         doc.text(20, 20, divToPrint.innerText);
//
// // Add new page
//
//
// // Save the PDF
//         doc.save('document.pdf');



// Add new page

// Save the PDF

       // Popup();
    }

    function Popup()
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>Invoice</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');

        var divToPrint=document.getElementById("print-invoice");
        // newWin= window.open("");
        //newWin.document.write(divToPrint.outerHTML);
        //  newWin.print();
        // newWin.close();

        mywindow.document.write(divToPrint.outerHTML);

        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }
    function deletecourse(x) {
        var _token = $('input[name="_token"]').val();
        $.ajax( {
            url: '{!! url('/delete_date') !!}',
            type: 'POST',
            data:{course:x , _token:_token},
            success: function(result){
                var net=0;
                var minutes=0;
                var ue=0;
                $('#submitted_dates').empty();
                $('#all_dates').empty();

                for (var x=0;x<result.length;x++)
                {
                    minutes+=result[x].minutes;
                    ue+=result[x].total_ue;
                    net+=result[x].total_ue*result[x].fe;

                    $("#submitted_dates").append(

                        '<tr id="sumitted'+x+'">' +
                        '<td>' +result[x].course+
                        '</td><td>' +result[x].dates+
                        '</td><td>' +result[x].minutes+
                        '</td><td>' +result[x].remaining+
                        '</td>' +
                        '<td><textarea  onchange="coursecomment( '+x+',this)" >' +result[x].comment+'</textarea></td>' +
                        '<td><a href="#" onclick="deletecourse( '+x+')">Delete</a></td></tr>'
                    )
                    $("#all_dates").append(

                        '<tr id="all'+x+'">' +
                        '<td>' +result[x].course+
                        '</td><td>' +result[x].dates+
                        '</td><td>' +result[x].minutes+
                        '</td><td>' +result[x].total_ue+
                        '</td><td>' +result[x].fe+
                        '</tr>'
                    )
                }

                $('#step-1-2').css('display','none');
                $('#step-1-1').css('display','');
                $('#total_minutes').empty();
                $('#total_minutes').append('Total Minutes:'+minutes);
                $('#total_ue').empty();
                $('#total_ue').append('Total Ue:'+ue);
                $('#total_fe').empty();
                $('#total_fe').append('Total Fee:'+Math.round(net * 100) / 100);
                $('#total_fee3').empty();
                $('#total_fee3').append('Total Fee(Net) '+Math.round(net * 100) / 100);
                for (var x=1;x<31;x++) {
                    $('#day-' + x + '').val('');
                }
                for (var x=1;x<31;x++) {
                    $('#standard-' + x + '').val('');
                }
                for (var x=1;x<31;x++) {
                    $('#minutes-' + x + '').val('');
                }



            }



        } );
    }
    function coursecomment(x,input) {
        var _token = $('input[name="_token"]').val();
        $.ajax( {
            url: '{!! url('/comment_course') !!}',
            type: 'POST',
            data:{course:x , comment:$(input).val() , _token:_token},
            success: function(result){
                var net=0;
                var minutes=0;
                var ue=0;
                $('#submitted_dates').empty();
                $('#all_dates').empty();

                for (var x=0;x<result.length;x++)
                {
                    minutes+=result[x].minutes;
                    ue+=result[x].total_ue;
                    net+=result[x].total_ue*result[x].fe;

                    $("#submitted_dates").append(

                        '<tr id="sumitted'+x+'">' +
                        '<td>' +result[x].course+
                        '</td><td>' +result[x].dates+
                        '</td><td>' +result[x].minutes+
                        '</td><td>' +result[x].remaining+
                        '</td>' +
                        '<td><textarea  onchange="coursecomment( '+x+',this)" >' +result[x].comment+'</textarea></td>' +
                        '<td><a href="#" onclick="deletecourse( '+x+')">Delete</a></td></tr>'
                    )
                    $("#all_dates").append(

                        '<tr id="all'+x+'">' +
                        '<td>' +result[x].course+
                        '</td><td>' +result[x].dates+
                        '</td><td>' +result[x].minutes+
                        '</td><td>' +result[x].total_ue+
                        '</td><td>' +result[x].fe+
                        '</tr>'
                    )
                }

                $('#step-1-2').css('display','none');
                $('#step-1-1').css('display','');
                $('#total_minutes').empty();
                $('#total_minutes').append('Total Minutes:'+minutes);
                $('#total_ue').empty();
                $('#total_ue').append('Total Ue:'+ue);
                $('#total_fe').empty();
                $('#total_fe').append('Total Fee:'+Math.round(net * 100) / 100);
                $('#total_fee3').empty();
                $('#total_fee3').append('Total Fee(Net) '+Math.round(net * 100) / 100);
                for (var x=1;x<31;x++) {
                    $('#day-' + x + '').val('');
                }
                for (var x=1;x<31;x++) {
                    $('#standard-' + x + '').val('');
                }
                for (var x=1;x<31;x++) {
                    $('#minutes-' + x + '').val('');
                }



            }



        } );
    }

</script>
<?php

function build_calendar($month,$year) {

    // Create array containing abbreviations of days of week.
    $daysOfWeek = array('Su','Mo','Tu','We','Th','Fr','Sa');

    // What is the first day of the month in question?
    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);

    // How many days does this month contain?
    $numberDays = date('t',$firstDayOfMonth);

    // Retrieve some information about the first day of the
    // month in question.
    $dateComponents = getdate($firstDayOfMonth);

    // What is the name of the month in question?
    $monthName = $dateComponents['month'];

    // What is the index value (0-6) of the first day of the
    // month in question.
    $dayOfWeek = $dateComponents['wday'];

    // Create the table tag opener and day headers
    $calendar = "<caption>$monthName $year</caption>";

    $calendar .= "<table class='calendar' style='width: 380px;'>";
    $calendar .= "<tr>";

    // Create the calendar headers

    foreach($daysOfWeek as $day) {
        $calendar .= "<th class='header'>$day</th>";
    }

    // Create the rest of the calendar

    // Initiate the day counter, starting with the 1st.

    $currentDay = 1;

    $calendar .= "</tr><tr>";

    // The variable $dayOfWeek is used to
    // ensure that the calendar
    // display consists of exactly 7 columns.

    if ($dayOfWeek > 0) {
        $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
    }

    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberDays) {

        // Seventh column (Saturday) reached. Start a new row.

        if ($dayOfWeek == 7) {

            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";

        }

        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);

        $date = "$year-$month-$currentDayRel";

        $calendar .= "<td class='day' rel='$date'>$currentDay</td>";

        // Increment counters

        $currentDay++;
        $dayOfWeek++;

    }



    // Complete the row of the last week in month, if necessary

    if ($dayOfWeek != 7) {

        $remainingDays = 7 - $dayOfWeek;
        $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";

    }

    $calendar .= "</tr>";

    $calendar .= "</table>";

    return $calendar;

}

?>

