@extends('layouts.website')
@section('content')
    <!-- BREADCRUMB AREA -->
    <style>
        .text-wrap {
            max-width: 100%;
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        @media (min-width: 768px) {
            .text-wrap {
                width: 300px;
            }
        }

    </style>
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
                        <h2 style="text-align: left" class="section-title text-wrap">CFIERD Projects</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="rts-event-details pt--120">
        <div class="container">
            <div class="row justify-content-md-center justify-content-start">
                <div class="col-lg-7 col-md-10">
                    <div class="event-details">
                        <div class="event-details__content">
                            <div class="event-details__content--thumb">
                                <img src=" {{ asset($project->path) }}" alt="event details">
                            </div>
                            <div class="event-details__content--text">
                                <div class="rts-section">
                                    <h4 class="rts-section-title"> {{ $project->title }}</h4>
                                    <p class="description">
                                        {!! $project->description !!}
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- PROJECT IMAGES -->
                        <div class="event-details__content--text">
                            <div class="rts-section">
                                <h4 class="rts-section-title">Project Images</h4>
                                <div class="row">
                                    @foreach($project->pictures as $image)
                                        <div class="col-lg-4 col-md-6">
                                            <img src="{{ asset($image->path) }}" alt="event details">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10">
                    <div class="event-sidebar">
                        <!-- event venue -->
                        <div class="event-venue mt--50">
                            <h5 class="rts-section-title">Event Details</h5>
                            <div class="event-venu-information">
                                <div class="single-info">
                                    <!-- single repeat item -->
                                    <div class="info-repeat">
                                        <div class="left-side bold">Venue:</div>
                                        <div class="right-side">
                                            <span class="desc">{{$project->country->name}}</span>
                                        </div>
                                    </div>
                                    <!-- single repeat item -->
                                    <div class="info-repeat">
                                        <div class="left-side bold">Location:</div>
                                        <div class="right-side">
                                            <span class="desc location">{{$project->country->name}}</span>
                                        </div>
                                    </div>
                                    <!-- single repeat item -->
                                    <div class="info-repeat">
                                        <div class="left-side bold">Project Duration:</div>
                                        <div class="right-side">
                                            <span class="desc"><a href="callto:121"> {{ $project->period }}</a></span>
                                        </div>
                                    </div>
                                    <!-- single repeat item -->

                                    <!-- book button -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="rts-event rts-section-padding">
        <div class="container">
            <div class="row justify-content-sm-center justify-content-md-start g-5">
                <h3>Other Projects</h3>
                @foreach($otherProjects as $project)
                    <!-- single event item -->
                    <div class="col-lg-6 col-md-6 col-sm-10">
                        <div class="single-event">
                            <div class="event single-event__content">
                                <div class="event__thumb">
                                    <img src="{{asset($project->path)}}" alt="event thumbnail">
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
                                    <h5 class="event__title"><a href="{{ route('site.project-details',$project->slug) }}">{{ $project->title }}</a></h5>
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
