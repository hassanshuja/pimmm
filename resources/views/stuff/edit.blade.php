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

                <h3 class="box-title">Edit Staff</h3>

            </div>
                                        <form id="validation-form123" action="{{route('stuff.update',$stuff->id)}}" method="post">
                                            {!! csrf_field() !!}
                                            {!! method_field('PUT') !!}

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label"> First Name</label>
                                                        <input type="text" value="{{$stuff->first_name}}" class="form-control" name="first_name" placeholder="first_name">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" value="{{$stuff->last_name}}" class="form-control" name="last_name" placeholder="last_name">

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="form-label">Email</label>
                                                        <input type="text" class="form-control" value="{{$stuff->email}}" name="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">

                                                        <label class="form-label">Phone</label>
                                                        <input type="text" class="form-control" value="{{$stuff->phone}}" name="phone" placeholder="Phone">
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Confirm Password</label>
                                                        <input type="password" class="form-control" name="password-confirmation"  placeholder="Password">
                                                    </div>
                                                </div>






                                                <div class="col-md-3 ">

                                                    <button type="submit" class="btn btn-primary" >

                                                        {{ __('Update') }}

                                                    </button>

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

