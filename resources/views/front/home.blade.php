@extends('front.master')
@section('header')
    <a href="/home_ar" class="lange"> العربية</a>

@endsection

@section('content')
<div id="slider" class="slider-height">
    <div class="flexslider slider-wrapper">
        <ul class="slides">
            <li>
                <div class="slider-info">
                    <h1 class="animated fadeInDown">THIS IS TITLE FOR IMAGE </h1>
                    <p class="animated fadeInDown">We have created 55+ Pages, 200+ Components or Shortcodes, Popup for this template and more in future. #twitterhash, @facebooktag</p>
                </div>
                <img src="uploads/slider-1.jpg" alt="" />

            </li>
            <li>
                <div class="slider-info">
                    <h2>THIS IS THE NEXT TITLE FOR IMAGES </h2>
                    <p>This is tag line ipsum dolor sit amet, consectetur Nihil cupiditate. mollitia maiores temp fugit! Lorem ipsum dolor sit amet, consectetur adipisicing elit#twitterhash, @facebooktag</p>
                </div>
                <img src="uploads/slider-2.jpg" alt="" />

            </li>
            <li>
                <div class="slider-info">
                    <h2>
                        THIS IS THEME FOR THIS IMAGE
                    </h2>
                    <p>Do not hesitate to contact us on our dedicated support forum. mollitia maiores temp fugit! Lorem ipsum dolor sit amet, consectetur adipisicing elit #twitterhash, @facebooktag</p>
                </div>
                <img src="uploads/slider-3.jpg" alt="" />

            </li>
        </ul>

    </div>
</div><!-- End Slider Section -->
<!-- Start Service List Section -->
<div id="service-page" class="layer-stretch">
    <div class="layer-wrapper text-center">
        <div class="row">
            <div class="sub-ttl font-28">sugar and spice Catering</div>
            @for($i=0;$i<4;$i++)
                @if(isset($homes[$i]))
            <div class="col-md-6 col-lg-6">
                <div class="theme-block">
                    <div class="theme-block-picture">
                        <img src="{{URL::asset('storage/app/public/attachment/' . $homes[$i]->home_image)}}" alt="">
                    </div>
                    <div class="theme-block-data service-block-data">
                        <div class="service-icon"><i class="fa fa-stethoscope"></i></div>
                        <h4><a href="inner-pager.html">{{$homes[$i]->name}}</a></h4>
                    </div>
                    <div class="theme-block-hidden service-hidden-block">
                        <i class="fa fa-stethoscope"></i>
                        <h4><a  href="/page/{{$homes[$i]->id}}">{{$homes[$i]->name}}</a></h4>
                        <p class="service-description paragraph-small paragraph-black">
                                    <span> {{$homes[$i]->description}}
                                    </span>
                            <a href="/page/{{$homes[$i]->id}}">(Read More)</a>
                        </p>
                    </div>
                </div>
            </div>
                @endif
            @endfor
            @for($i=4;$i<7;$i++)
                @if(isset($homes[$i]))
            <div class="col-md-6 col-lg-4">
                <div class="theme-block">
                    <div class="theme-block-picture">
                        <img src="{{URL::asset('storage/app/public/attachment/' . $homes[$i]->home_image)}}" alt="">
                    </div>
                    <div class="theme-block-data service-block-data">
                        <div class="service-icon"><i class="fa fa-flask"></i></div>
                        <h4><a>{{$homes[$i]->name}}</a></h4>
                    </div>
                    <div class="theme-block-hidden service-hidden-block">
                        <i class="fa fa-stethoscope"></i>
                        <h4><a href="/page/{{$homes[$i]->id}}">{{$homes[$i]->name}}</a></h4>
                        <p class="service-description paragraph-small paragraph-black">
                            <a href="/page/{{$homes[$i]->id}}">(Read More)</a>
                        </p>
                    </div>
                </div>
            </div>

                @endif
            @endfor

            <div class="row">
                <div class="col-sm-6">
                    <div class="theme-material-card">
                        <p class="paragraph-small paragraph-black"><span class="theme-dropcap color-green">Su</span>orem ipsum dolor sit amet, consectetur adipisicing elit. Nihil fuga odio blanditiis delectus ex quisquam suscipit assumenda in iusto fugiat ut, porro, doloribus quam laboriosam explicabo maxime sed accusamus doloremque!</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="theme-material-card">
                        <p class="paragraph-small paragraph-black"><span class="theme-dropcap color-orange">Sp</span>ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione</p>
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>


<!-- Start Emergency Section -->
<!-- Start Make an Appointment Modal -->
@endsection
