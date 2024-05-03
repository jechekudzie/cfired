@extends('layouts.website')
@section('content')
    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg" style="background-image: url(website/assets/banners/services.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul style="display: none;" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Our Services</a></li>

                        </ul>
                        <h2 style="display: none;" class="section-title">CFIRED SERVICES</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">{{$intro->title}}</h3>
                    </div>
                    <div style="color:#000000;text-align: justify;" class="col-lg-8 col-md-7">
                        <p style="color:#000000 !important;">
                            {!! $intro->text !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->
    <div style="margin-top: -120px !important;margin-bottom: 20px" class="rts-campus-section rts-section-padding pb-0 v_3">
        <div class="container">
            <div class="row">
                <div class="rts-section rt-center mb--45">
                    <h3 class="rts-section-title">WHAT WE DO!</h3>
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
                                {{--<div class="single-item__meta">
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
