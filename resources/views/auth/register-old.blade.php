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
                    <form method="POST" action="/createOldDriver">
                        @csrf


                        <div class="form-group row">
                            <label for="ref" class="col-md-4 col-form-label text-md-right">{{ __('Driver Id') }}</label>

                            <div class="col-md-6">
                                <input id="ref" type="number" class="form-control" name="ref" value="{{ old('ref') }}"  autocomplete="email">

                                @error('ref')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
                                <input id="email-confirm" type="email" class="form-control" name="email_confirmation" required >
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
