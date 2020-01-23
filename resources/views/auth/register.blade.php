@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Driver') }}</div>

                <div class="card-body">
                    @if (Session::get("error"))
                        <div class="alert alert-danger" role="alert">
                            {{Session::get("error")}}
                        </div>
                    @endif
                    <form method="POST" action="/createDriver">
                        @csrf



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required  autofocus>


                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email-confirm" type="email" class="form-control" name="email_confirmation"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-2">
                                <input  type="text" class="form-control"   value="+44" readonly autofocus>
                            </div>
                            <div class="col-md-4">

                            <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required  autofocus>

                            </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>
                            <div class="col-md-2">
                                <input  type="text" class="form-control"   value="+44" readonly autofocus>
                            </div>
                            <div class="col-md-4">
                                <input id="mobile" type="text" class="form-control" name="mobile"  value="{{ old('mobile') }}" required  autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="psv" class="col-md-4 col-form-label text-md-right">{{ __('Taxi Badge Number') }}</label>

                            <div class="col-md-6">
                                <input id="psv" type="text" class="form-control" name="psv" value="{{ old('psv') }}" required   autofocus>


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="psv_expiry" class="col-md-4 col-form-label text-md-right">{{ __('Taxi Badge expiry') }}</label>

                            <div class="col-md-6">
                                <input id="psv_expiry" type="date" class="form-control" name="psv_expiry"  value="{{ old('psv_expiry') }}" required  autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="badge" class="col-md-4 col-form-label text-md-right">{{ __('Taxi Licensing Authority ') }}</label>

                            <div class="col-md-6">
                                <input id="badge" type="text" class="form-control" name="badge" value="{{ old('badge') }}"  required  autofocus>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Licence" class="col-md-4 col-form-label text-md-right">{{ __('Driving Licence') }}</label>

                            <div class="col-md-6">
                                <input id="Licence" type="text" class="form-control" name="licence" value="{{ old('licence') }}" required   autofocus>


                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="licence_expiry" class="col-md-4 col-form-label text-md-right">{{ __('Driving Licence expiry') }}</label>

                            <div class="col-md-6">
                                <input id="licence_expiry" type="date" class="form-control" name="licence_expiry"  value="{{ old('licence_expiry') }}" required  autofocus>


                            </div>
                        </div>




                        <div class="form-group row ">
                            <label  class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6 ">
                                <button type="submit" class="btn btn-primary" style="all">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
