@extends('front.master_ar')
@section('header')
    <a href="/page/{{$page->id}}" class="lange"> English</a>

@endsection

@section('content')<!-- End Header -->

<!-- End Header -->
<div id="pagetitle" style="background-image:url({{URL::asset('storage/app/public/attachment/' . $page->background)}})" >
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-ttl">
                <h3>{{$page->title_arabic}}</h3>
            </div>

        </div>
    </div>
</div>



<!-- Start Service List Section -->
<div id="service-page" class="layer-stretch">
    <!-----startcontent-->
    @php($index=0)
    @foreach($page->articles as $customer)
        @if($index==0 || $index % 2 == 0)

    <div class="layer-wrapper text-center">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="theme-block theme-block-hover">
                    <div class="theme-block-picture">
                        <img src="{{URL::asset('storage/app/public/attachment/' . $customer->image)}}" alt="">
                    </div>
                    <div class="theme-block-data">
                        <h4><a href="#">Card Title</a></h4>
                        <p class="paragraph-small paragraph-black">
                            <span> {{$customer->title_arabic}}</span><a href="#">(Read More)</a>
                        </p>
                    </div>
                </div>



            </div>
            <div class="col-md-6 col-lg-6">
                <h1 class="title">
                    {{$customer->title_arabic}}
                </h1>
                <p class="desc">

                    {{$customer->description_arabic}}
                </p>
                <a href="/article/{{$customer->id}}" class="btn button-primary btn-lg"> see gallery</a>
                <!----end image-->
            </div>
        </div>
        <!-----endcontent-->
        <!----start images-->



    </div>
        @else
            <div class="layer-wrapper text-center">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <h1 class="title">
                            {{$customer->title_arabic}}
                        </h1>
                        <p class="desc">
                            {{$customer->description_arabic}}

                        </p>
                        <a href="/article/{{$customer->id}}" class="btn button-primary btn-lg"> see gallery</a>

                        <!----end image-->
                    </div><div class="col-md-6 col-lg-6">
                        <div class="theme-block theme-block-hover">
                            <div class="theme-block-picture">
                                <img src="{{URL::asset('storage/app/public/attachment/' . $customer->image)}}" alt="">
                            </div>
                            <div class="theme-block-data">
                                <h4><a href="#">Card Title</a></h4>
                                <p class="paragraph-small paragraph-black">
                                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt quaerat, eligendi ad, ipsum?.</span><a href="#">(Read More)</a>
                                </p>
                            </div>
                        </div>



                    </div>
                </div>
                <!-----endcontent-->
                <!----start images-->



            </div>

    @endif
        @php($index+=1)
    @endforeach


    <!----revesre-->


</div>


<Div class="container">
    <div id="images">
        <div class="sub-ttl font-28">Delicious</div>
        <div class="theme-material-card">
            <div class="row">
                <div class="col-md-4">
                    <div class="theme-img">
                        <img src="{{URL::asset('storage/app/public/attachment/' . $page->image_one)}}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="theme-img theme-img-scale">
                        <img src="{{URL::asset('storage/app/public/attachment/' . $page->image_two)}}" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="theme-img theme-img-scalerotate">
                        <img src="{{URL::asset('storage/app/public/attachment/' . $page->image_three)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</Div>
<!-- Start Emergency Section -->
<!-- Start Make an Appointment Modal -->
@endsection
