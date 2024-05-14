@extends('layouts.website')
@section('content')
    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
             style="background-image: url({{asset('website/assets/banners/servicesbanner.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul style="display: none;" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">About Us</a></li>
                        </ul>
                        <h2 style="text-align: left" class="section-title">CFIERD PROJECTS</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="rts-event rts-section-padding">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start g-5">
                @foreach($projects as $project)
                    <!-- single event item -->
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="single-event">
                            <div class="event single-event__content">
                                <div class="event__thumb">
                                    <a href="{{ route('site.project-details',$project->slug) }}">
                                        <img src="{{asset($project->path)}}" alt="event thumbnail">
                                    </a>
                                </div>
                                <div class="event__meta">
                                    <div style="display: none" class="event__meta--da">
                                        <div class="event-date">
                                            <span><i class="fal fa-calendar"></i></span>
                                            <span>November 28, 2023</span>
                                        </div>
                                        <div class="event-time">
                                            <span><i class="fa-sharp fa-thin fa-clock"></i></span>
                                            <span>10:30 am</span>
                                        </div>
                                    </div>
                                    <h5 class="event__title"><a
                                            href="{{ route('site.project-details',$project->slug) }}">{{ $project->title }}</a>
                                    </h5>
                                </div>
                                <div class="event-place">
                                    <span><i class="fa-sharp fa-thin fa-location-dot"></i></span>
                                    <span>{{ $project->country->name }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- single event item end -->
                @endforeach
            </div>
        </div>
    </div>

@endsection
