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

                <h3 class="box-title">Create New Plant</h3>

            </div>



                                        <form id="validation-form123" action="{{url('/storePlant/'.$id)}}" method="post">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Location</label>
                                                        <input type="text" class="form-control spaces" name="location" placeholder="location" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Area</label>
                                                        <input type="text" class="form-control" name="area" placeholder="area" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Account</label>
                                                        <input type="text" class="form-control" name="account" placeholder="account" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Universal</label>
                                                        <input type="text" class="form-control" name="universal" placeholder="universal" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-3 ">

                                                    <button type="submit" class="btn btn-primary" >

                                                        {{ __('Create') }}

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

