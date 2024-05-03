@extends('layouts.website')
@section('content')
    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
             style="background-image: url('{{ asset('website/assets/banners/servicesbanner.png') }}');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Our Services</a></li>

                        </ul>
                        <h2 style="text-align: left" class="section-title">{{ $service->title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Scholarship content -->
    <div class="rts-scholarship rts-section-padding">
        <div class="container">
            <div class="rts-scholarship-description">
                <div class="row sticky-coloum-wrap justify-content-md-center justify-content-start">
                    <div class="col-lg-8 col-md-11">
                        <div class="program-description-area">
                            <div class="program-big-thumb">
                                <img style="width: 900px" src="{{asset($service->image)}}" alt="program">
                            </div>
                            <div class="program-about">
                                {{--<h4 class="title"> {{ $service->title }}</h4>--}}
                                <p> {!! $service->text !!} </p>
                            </div>

                        </div>
                    </div>
                    <!-- sidebar -->
                    <div class="col-lg-4 col-md-11 sticky-coloum-item">
                        <div class="program-sidebar">
                            <!-- curriculum -->
                            <div class="program-curriculum">
                                <h6 class="heading-title">Other Services</h6>
                                <div class="program-menu">
                                    <ul class="list-unstyled">
                                        @foreach($otherServices as $otherService)
                                            <li>
                                                <a href="{{ route('site.web-service-details',$otherService->id) }}"><span><i class="fa-light fa-arrow-right"></i></span>
                                                    {{ $otherService->title }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- contact info -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- program content end -->

@endsection
