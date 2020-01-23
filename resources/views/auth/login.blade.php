@extends('layouts.app')

@section('content')<style>nav.navbar.navbar-default.navbar-static-top{display:none}body{background: #6ed3cf;}</style>
<div class="container login">
     <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="post" id="loginform" action="login">
                         @csrf
                        <h3 class="box-title m-b-20">LOGIN HERE</h3>
                        <div class="form-group ">
                            <div class="col-xs-12 user-icon"><!--<p>Enter Username</p>-->
                                <input class="form-control" name ="email"type="email" required="" placeholder="Enter Username"> </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12 user-pass"><!--<p>Password</p>-->
                                <input class="form-control" name="password" type="password" required="" placeholder="Password"> </div>
                        </div>
                        
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">LOGIN</button>
                            </div>
                        </div>
                      
                       
                    </form>
                   
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
