@extends('front.master')
@section('header')
    <a href="/article_ar/{{$article->id}}" class="lange"> العربية</a>

@endsection

@section('content')<!-- End Header -->
<!-- Start Page Title Section -->
<div class="page-ttl">
    <div class="layer-stretch">
        <div class="page-ttl-container">
            <h1>Gallery</h1>
            <p><a href="#">Home</a> &#8594; <span>Gallery</span></p>
        </div>
    </div>
</div><!-- End Page Title Section -->
<!-- Start Gallery Section -->
<div id="gallery-page">
    <div class="gallery-container">
        <ul class="portfolio-image">
            @foreach($article->galleries as $customer)

            <li class="gallery-block">
                <a href="{{URL::asset('storage/app/public/attachment/' . $customer->image)}}">
                    <img src="{{URL::asset('storage/app/public/attachment/' . $customer->image)}}" alt="image">
                    <div class="gallery-layer">
                        <div class="gallery-layer-dark">
                            <p><i class="fa fa-search-plus"></i></p>
                        </div>
                    </div>
                </a>
            </li>
                @endforeach

        </ul>
    </div>
</div><!-- End Gallery Section -->
<!-- Start Make an Appointment Modal -->

@endsection

