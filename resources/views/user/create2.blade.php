@extends('layouts.master')
@section('content')

<!-- [ chat message ] end -->


<!-- [ Main Content ] start -->
<style>
.form-control.sml{text-transform:lowercase;}
</style>
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

                <h3 class="box-title">Add New User</h3>

            </div>


                                        <form id="validation-form123" action="{{route('super.store')}}" method="post">
                                            {!! csrf_field() !!}

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">First Name</label>
                                                        <input type="text" class="form-control" name="first_name" placeholder="First name">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Last Name</label>
                                                        <input type="text" class="form-control" name="last_name" placeholder="Last name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">User Type</label><br/>
                                                        <input type="radio" value="4"  name="type">Staff &nbsp;&nbsp;
                                                        <input type="radio" value="3"  name="type">Owner &nbsp;&nbsp;
                                                        <input type="radio" value="2"  name="type">Supervisor &nbsp;&nbsp;
                                                        <input type="radio" value="1"  name="type" checked>Admin 
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        @if ($errors -> has("email"))

                                                            <div class="alert alert-danger" role="alert">
                                                                {{ $errors -> first("email") }}
                                                            </div>
                                                        @endif
                                                        <label class="form-label">Email</label>
                                                        <input type="text" class="form-control sml" name="email" placeholder="Email">
                                                    </div>

                                                </div>



                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="validation-password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Confirm Password</label>
                                                        <input type="password" class="form-control" name="validation-password-confirmation" placeholder="Password">
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Phone</label>
                                                        <input type="text" class="form-control" name="phone" placeholder="Phone: (999) 999-9999">
                                                    </div>
                                                </div>



                    



                    <div class="col-md-3 ">
<div class="form-group" style="    margin: 26px 0 0 0;">
                        <button type="submit" class="btn btn-primary" >

                            {{ __('Create') }}

                        </button>
</div>
                    </div>


                                        </form>
                                   </div>



    </div>


    @endsection

