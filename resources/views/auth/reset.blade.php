@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset your password') }}</div>

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
                        @if($forget!=null)

                        <form method="POST" action="/reset" >
                        @csrf
                        <input type="hidden" name="token" value="{{$forget->token}}">


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">


                                </div>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label  class="col-md-4 col-form-label text-md-right"></label>
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>


                            </div>
                        </div>
                    </form>
                        @else
                            <div class="alert alert-danger" role="alert">
                                Link is invalid
                            </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
