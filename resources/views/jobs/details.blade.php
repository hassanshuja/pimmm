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

                <h5 class="box-title">Job Details</h5>

            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Job number</label>
                        <h5>{{$job->jobnumber}}</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Estimated by</label>
                        <h5 >{{$job->estimatedby}}</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Job date</label>
                        <h5 >{{$job->jobdate}}</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Customer po</label>
                        <h5 >{{$job->customerpo}}</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Customer wo</label>
                        <h5>{{$job->customerwo}}</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Invoice number</label>
                        <h5 >{{$job->invoicenumber}}</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Invoice date</label>
                        <h5 >{{$job->invoicedate}}</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Due date</label>
                        <h5 >{{$job->duedate}} </h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Estimate</label>
                        <h5 >{{$job->estimate}}</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Job active</label>
                        @if($job->jobactive == 0)
                        <h5 > Unchecked </h5>
                            @else
                            <h5 > Checked </h5>
                            @endif

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Invoiced</label>
                        @if($job->invoiced == 0)
                            <h5 > Unchecked </h5>
                        @else
                            <h5 > Checked </h5>
                        @endif

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Paid</label>
                        @if($job->paid == 0)
                            <h5 > Unchecked </h5>
                        @else
                            <h5 > Checked </h5>
                        @endif

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Archived</label>
                        @if($job->archived == 0)
                            <h5 > Unchecked </h5>
                        @else
                            <h5 > Checked </h5>
                        @endif

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Note</label>
                        <h5 >{{$job->jobdetails}}</h5>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Entry type</label>
                        <h5 >{{$job->entry->name}}</h5>

                    </div>
                </div>

                @foreach($jobinfo as $info)
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Owner</label>
                            <h5 >{{$info->owner->ownername}}</h5>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Equipment</label>
                            <h5 >{{$info->equipment->tag_number}}</h5>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Equipment part</label>
                            <h5 >{{$info->part->part_name}}</h5>
                        </div>
                    </div>
                    @endforeach

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

