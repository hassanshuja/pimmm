@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.myform').submit(function() {
                if (confirm('Are you sure you want to delete this customer?')) {

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
                                                <h5 class="m-b-10">View Languages</h5>
                                            </div>
                                            <ul class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                                <li class="breadcrumb-item"><a href="#!">Languages</a></li>
                                                <li class="breadcrumb-item"><a href="#!">View Languages</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!-- Zero config table start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Languages</h5>
                                        </div>
                                        <div class="card-body">
                                            @if (Session::get("success"))
                                                <div class="alert alert-success" role="alert">
                                                    {{Session::get("success")}}
                                            </div>
                                            @endif
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th>Language</th>



                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($trainer->languages as $language)
                                                    <tr>
                                                        <td>{{$language->language}}</td>


                                                    </tr>
                                                        @endforeach


                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Zero config table end -->
                                <!-- Default ordering table start -->
                                <!-- Default ordering table end -->
                                <!-- Multi-column table start -->
                                <!-- Multi-column table end -->
                                <!-- Complex-header table start -->
                                <!-- Complex-header table end -->
                                <!-- DOM Positioning table start -->
                                <!-- DOM Positioning table end -->
                                <!-- Alternative Pagination table start -->
                                <!-- Alternative Pagination table end -->
                                <!-- Scroll - Vertical table start -->
                                <!-- Scroll - Vertical table end -->
                                <!-- Scroll - Vertical, Dynamic Height table start -->
                                <!-- Scroll - Vertical, Dynamic Height table end -->
                                <!-- Language - Comma Decimal Place table start -->
                                <!-- Language - Comma Decimal Place table end -->
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="delete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLiveLabel">Modal Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <p>Woohoo, you're reading this text in a modal!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection


