@extends('layouts.website')
@section('content')
    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
             style="background-image: url(website/assets/banners/about.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul style="display: none;" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">About Us</a></li>
                        </ul>
                        <h2 style="display: none;" class="section-title">About CFIRED</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!-- fun fact -->
    <section style="margin-top: -80px" class="rts-about-university rts-section-padding">
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


    <!-- about us -->
    <section style="margin-top: -80px" class="about v__2 pt--120 pb--80">
        <div class="container">
            <div class="row justify-content-md-center g-5">
                <div class="col-lg-8 col-md-8">
                    <div style="text-align: justify !important;color: black;" class="about__right--content">
                        <h2 class="about__right--content--title">{{$approach->title}}</h2>
                        <p class="about__right--content--description">
                            {!! $approach->text !!}
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <a href="" class="rts-theme-btn btn-arrow w-100">
                        Join Us in Empowering Communities for Conservation — Learn How"
                        <span><i class="fa-regular fa-arrow-right"></i></span>
                    </a>


                    <a href="" class="rts-theme-btn btn-arrow w-100">
                        Drive Policy Change with Expert Analysis — Get Started Now
                        <span><i class="fa-regular fa-arrow-right"></i></span>
                    </a>


                    <a href="" class="rts-theme-btn btn-arrow w-100">
                        Discover How Spatial Insights Can Transform Your Project — Explore Now
                        <span><i class="fa-regular fa-arrow-right"></i></span>
                    </a>


                    <a href="" class="rts-theme-btn btn-arrow w-100">
                        Maximize Your Project's Impact — Schedule Your M&E Consultation Today
                        <span><i class="fa-regular fa-arrow-right"></i></span>
                    </a>


                    <a href="" class="rts-theme-btn btn-arrow w-100">
                        Unlock the Power of Your Data — Request a Custom Analysis
                        <span><i class="fa-regular fa-arrow-right"></i></span>
                    </a>


                    <a href="" class="rts-theme-btn btn-arrow w-100">
                        Ready to Elevate Your Funding Strategy? — Connect with Our Experts
                        <span><i class="fa-regular fa-arrow-right"></i></span>
                    </a>

                    <a href="" class="rts-theme-btn btn-arrow w-100">
                        Empower Your Decisions with Evidence-Based Insights — Begin Your Research Journey
                        <span><i class="fa-regular fa-arrow-right"></i></span>
                    </a>

                </div>
            </div>
        </div>


    </section>
    <!-- about us end -->

@endsection
