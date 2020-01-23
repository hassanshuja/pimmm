@extends('layouts.master')
@section('content')

    <!-- [ chat message ] end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.myform').submit(function() {
                if (confirm('Are you sure you want to delete this admin?')) {

                    return true;
                }
                else
                {
                    return false;
                }
                // your code here
            });
        });
    </script>
    <!-- [ Main Content ] start -->


    <div class="box user-new">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        @if(session()->has('message'))
            <input type="hidden" value="1" id="sm">
            <input type="hidden" value="{{session()->get('message')}}" id="message_success">
        @endif
        @if(session()->has('error'))
            <input type="hidden" value="1" id="em">
            <input type="hidden" value="{{session()->get('error')}}" id="message_error">
        @endif

        <div class="box-header">

            <h3 class="box-title">Users</h3>

        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="user-tab">
                    <table>
                        <tr><th>Names</th><th>Staff</th><th>Owners</th><th>Supervisor</th><th>Admin</th><th>Action</th></tr>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->first_name.' '.$user->last_name}}</td>
                            @if($user->usertype==4)
                            <td> <input type="radio" value="4"onchange="user({{$user->id}})"  name="user-{{$user->id}}" id="user-{{$user->id}}"checked></td>
                            @else
                            <td> <input type="radio" value="4"onchange="user({{$user->id}})"  name="user-{{$user->id}}" id="user-{{$user->id}}"></td>
                            @endif
                            @if($user->usertype==3)
                            <td> <input type="radio" value="3"onchange="user({{$user->id}})" name="user-{{$user->id}}" id="user-{{$user->id}}" checked></td>
                            @else
                                <td> <input type="radio" value="3"onchange="user({{$user->id}})" name="user-{{$user->id}}" id="user-{{$user->id}}" ></td>
                            @endif
                            @if($user->usertype==2)
                                <td><input type="radio" value="2"onchange="user({{$user->id}})" name="user-{{$user->id}}" id="user-{{$user->id}}"checked></td>
                            @else
                                <td><input type="radio" value="2"onchange="user({{$user->id}})" name="user-{{$user->id}}" id="user-{{$user->id}}"></td>
                            @endif
                            @if($user->usertype==1)
                            <td><input type="radio" value="1"onchange="user({{$user->id}})" name="user-{{$user->id}}" id="user-{{$user->id}}"checked> </td>
                             @else
                                <td><input type="radio" value="1"onchange="user({{$user->id}})" name="user-{{$user->id}}" id="user-{{$user->id}}"> </td>
                            @endif
                            <td><div class="btn-group btn-group-sm" style="float: none;"><a href="{{route('super.edit',$user->id)}}" class="btn btn-warning" >Edit</a> <form class="myform" id="{{$user->id}}"  method="post"  action="{{(route('super.destroy',$user->id))}}">   @csrf
                                        {!! method_field('Delete') !!}<button type="submit" class="btn btn-danger" >Delete </button></form></div></td>
                        </tr>
                       @endforeach

                    </table>
                </div>

            </div>



        </div>






    </div>



    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>

        function user(x) {
            var select = document.querySelector('input[name="user-'+x+'"]:checked').value;
            if(select == 1 || select == 3 || select == 2 || select == 4) {
                var _token = '<?php echo csrf_token()?>';
                $.ajax({
                    url: '/updateUserType/'+x,
                    type: 'post',
                    data:{user:select,_token:_token},
                    success:function (data) {
                        if (data==1)
                        {
                            toastr.success("updated success");
                        }
                        else if (data==2)
                        {
                            toastr.success("something error");
                        }
                    }
                });
            }
            else {
                document.getElementById('whitch').style.display = "none";
            }
        }
    </script>
    <script>
        if($('#sm').val() ==1){
            toastr.success($('#message_success').val());
        }
        if($('#em').val() ==1){
            toastr.error($('#message_error').val());
        }
    </script>
@endsection

