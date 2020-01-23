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
                                                <h5 class="m-b-10">Create Office</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Office</a></li>
                                                <li class="breadcrumb-item"><a href="#!">Create Office</a></li>
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
                                            <h5>Create Office</h5>
                                        </div>
                                        <div class="card-body">


                                            <form  action="/updateOffice/{{$office->id}}" method="post">
                                                {!! csrf_field() !!}

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">Name</label>
                                                            <input type="text" value="{{$office->name}}" class="form-control" name="name" placeholder=" name">

                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label">User</label>
                                                            <select name="user" class="form-control">
                                                                @foreach($users as $user)
                                                                    @if($office->supervisor_id==$user->id)
                                                                    <option value="{{$user->id}}" selected>{{$user->first_name .''. $user->last_name}}</option>
                                                                    @else
                                                                        <option value="{{$user->id}}">{{$user->first_name .' '. $user->last_name}}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary">Create</button>
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

