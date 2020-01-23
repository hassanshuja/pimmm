@extends('front.master')
@section('header')
    <a href="/about_us_ar" class="lange"> العربية</a>

@endsection

@section('content')



<!-- Start Service List Section -->
<div class="layer-stretch">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-8 text-center">
                <div class="theme-material-card">
                    <div class="theme-img blog-picture">
                        <img class="" src="images/may.png" alt="">
                    </div>
                    <ul class="blog-detail">
                        <li>ceo/ Mai Elwakeel</li>

                    </ul>
                    <h2 class="blog-ttl">‏The Most Delicious Dishes in a Tasteful Presentation
                    </h2>

                    <div class="blog-post">
                        <p class="paragraph-medium paragraph-black">Sugar N’ Spice story of success began when Hanan AbuSulyaman's passion for great food, creating new recipes, and throwing the most talked about parties became highly in demand by family and friends. In 2006, her journey into the world of innovative gourmet catering began when orders from well-known party planner started coming after tasting Hanan's exquisitely savories that were served at a friend's house.

                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="theme-img">
                                    <img src="images/speaker1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="theme-img theme-img-scale">
                                    <img src="images/speaker2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="theme-img theme-img-scalerotate">
                                    <img src="images/speaker3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="paragraph-medium paragraph-black">Managed by, Hanan's daughter, May Al wakeel, who carries an equal passion for cooking, creativity and a vision to make Sugar N’ Spice a franchise in the Middle East works closely with her specialist team,</p>
                        <div class="theme-quote">
                            <i class="fa fa-quote-left"></i> make every order a catering experience that fits the client expectations and requirements in finest demand.
                        </div>

                    </div>
                    <div class="row blog-meta">
                        <div class="col-sm-7 blog-tag">
                            <p>Tags : </p>
                            <ul>
                                <li><a href="#">catering, </a></li>
                                <li><a href="#">theme, </a></li>
                                <li><a href="#">food </a></li>
                            </ul>
                        </div>
                        <div class="col-sm-5 text-right">
                            <ul class="social-list social-list-sm">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="theme-material-card">
                    <div class="sub-ttl">About mai Elwakeel</div>
                    <div class="blog-author">
                        <div class="row">
                            <div class="col-3 hidden-xs-down">
                                <div class="theme-img">
                                    <img src="images/may.png" alt="">
                                </div>
                            </div>
                            <div class="col-9 blog-author-details">
                                <h4>CEO . MAi Elwakeel</h4>
                                <a>Owner</a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi quaerat quasi eum tempora illum.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-4">

                <div class="theme-material-card">
                    <div class="sub-ttl">Press
                    </div>
                    @foreach($presses as $press)
                    <a href="https://{{$press->url}}" target="_blank" class="row blog-recent">
                        <div class="col-4 blog-recent-img">
                            <img class="img-responsive img-thumbnail" src="{{URL::asset('storage/app/public/attachment/' . $press->image)}}" alt="">
                        </div>
                        <div class="col-8 blog-recent-post">
                            <h4>{{$press->title}}</h4>
                            <p>{{$press->description}}

                            </p>
                        </div>
                    </a>
                        @endforeach


                </div>

                <div class="theme-material-card">
                    <div class="sub-ttl">Our Clients</div>
                    <ul class="category-list">
                        @foreach($clients as $client)
                        <li><a href="#"><i class="fa fa-info-circle"></i>{{$client->name}}</a><span>({{$client->number}})</span></li>
                            @endforeach
                    </ul>
                </div>


            </div>
        </div>
    </div>
</div><!-- End Blog Section -->
<!-- Start Emergency Section -->
<!-- Start Make an Appointment Modal -->
@endsection
