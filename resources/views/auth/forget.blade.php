@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Forget Password') }}</div>

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
                    <form method="POST" action="/forget" >
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Enter your E-Mail Address to recover your account') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
