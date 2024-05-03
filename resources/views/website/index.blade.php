@extends('layouts.website')
@section('content')

    <!-- header banner -->
    <div class="banner v__2">
        <div class="banner__wrapper">
            <div class="swiper  swiper-data" data-swiper='{
                        "slidesPerView":1,
                        "effect": "fade",
                        "loop": true,
                        "speed": 1000,
                        "autoplay":{
                            "delay":"7000"
                }}'>
                <div class="swiper-wrapper">
                    <!-- single slides -->
                    <div class="swiper-slide">
                        <div class="banner__wrapper--bg"
                             style="background-image: url(website/assets/banners/intro.png);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="banner__slides--container banner__height">
                                            <div class="banner__slides--content">
                                                <h1 class="banner__slides--content--title">
                                                    Grounding Decisions in Evidence: In-depth Research and Analysis for
                                                    Impactful Strategies
                                                </h1>
                                                <a href="" class="rts-theme-btn btn-arrow">Learn More
                                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single slides end -->
                    <!-- single slides -->
                    <div class="swiper-slide">
                        <div class="banner__wrapper--bg" style="background-image: url(website/assets/banners/intro.png);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="banner__slides--container banner__height">
                                            <div class="banner__slides--content">
                                                <h1 class="banner__slides--content--title">
                                                    We lay a strong foundation with precise analysis and collaborative
                                                    client engagement to set clear, achievable goals.
                                                </h1>
                                                <a href="" class="rts-theme-btn btn-arrow">Learn More
                                                    <span><i class="fa-regular fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single slides end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header banner end -->
    <!-- about us -->
    <section class="about v__2 pt--120 pb--80">
        <div class="container">
            <div class="row justify-content-md-center g-5">
                <div class="col-lg-7 col-md-7">
                    <div class="">
                        <img style="margin-top:120px;  width: 800px;height: 500px" src="{{asset('website/assets/banners/aboutus.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div style="text-align: justify !important;color: black;" class="about__right--content">
                        <div class="about__right--content--sub">
                           {{-- <img src="{{asset('website/assets/images/icon/e-cap-pix.svg')}}" alt="cap">--}}

                        </div>
                        <h4 class="about__right--content--title">{{$about->title}}</h4>
                        <p class="about__right--content--description">
                            {!! $about->text !!}
                        </p>
                        <h6 style="font-weight: bold;color: black;"
                            class="about__right--content--title">{{$mission->title}}</h6>
                        <p class="about__right--content--description">
                            {!! $mission->text !!}
                        </p>
                        <h6 style="font-weight: bold;color: black;"
                            class="about__right--content--title">{{$vision->title}}</h6>
                        <p class="about__right--content--description">
                            {!! $vision->text !!}
                        </p>
                        <a href="" class="rts-theme-btn btn-arrow w-100">Learn More
                            <span><i class="fa-regular fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us end -->

    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">{{$journey->title}}</h3>
                    </div>
                    <div style="color:#000000;text-align: justify;" class="col-lg-8 col-md-7">
                        <p style="color:#000000 !important;">
                            {!! $journey->text !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-md-center justify-content-start">

                <div class="rts-about-details">
                    <div class="row">
                        @foreach($values as $value)
                            <div class="col-md-6 col-lg-6 col-xl-6 mb-3">
                                <div style="background-color: #bc744e;color: white;" class="single-about-info">
                                    <div class="content">
                                        <h3 class="title">{{$value->title}}</h3>
                                    </div>
                                    <div class="desc">
                                        <p class="text-white" style="text-align: justify; color: #ffffff !important;">
                                            {!! $value->text !!}
                                        </p>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- fun fact -->


    <div style="margin-bottom: 20px;" class="rts-campus-section rts-section-padding pb-0 v_3">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--45">
                    <h3 class="rts-section-title">CFIRED SERVICES</h3>
                </div>
            </div>
            <div class="row g-5">
                @foreach(\App\Models\Service::all() as $service)
                    <!-- single item -->
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-item">
                            <a href="{{route('site.web-service-details',[$service->id])}}">
                                <div class="single-item__content">
                                    <div class="single-item__image">
                                        <img src="{{asset($service->image)}}" alt="item-image">
                                    </div>
                                   {{-- <div class="single-item__meta">
                                        <h5 class="item-title"><a href="{{route('site.web-service-details',[$service->id])}}">{{$service->title}}</a></h5>
                                        <p class="item-description"></p>
                                    </div>--}}
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- single item end -->

                @endforeach
            </div>
        </div>
    </div>

@endsection
