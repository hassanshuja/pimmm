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

                <h3 class="box-title">Edit Plant</h3>

            </div>
                                        <form  action="{{url('/updatePlant/'.$plant->id)}}" method="post">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Location</label>
                                                        <input type="text" value="{{$plant->location}}" class="form-control" name="location" placeholder="location">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Area</label>
                                                        <input type="text" value="{{$plant->area}}" class="form-control" name="area" placeholder="area">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="form-label">Account</label>
                                                        <input type="text" class="form-control" value="{{$plant->account}}" name="account" placeholder="account">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="form-label">Universal</label>
                                                        <input type="text" class="form-control" value="{{$plant->universal}}" name="universal" placeholder="universal">
                                                    </div>
                                                </div>


                                                <div class="col-md-3 ">

                                                    <button type="submit" class="btn btn-primary" >

                                                        {{ __('Update') }}

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
    @endsection

