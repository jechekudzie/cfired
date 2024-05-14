@extends('layouts.website')
@section('content')
    <!-- Include Bootstrap CSS -->
    <!-- Bootstrap 5 CSS -->
<style>
    .card-img-container {
        width: 100%;
        position: relative;
        padding-top: 56.25%; /* 16:9 Aspect Ratio, adjust accordingly */
        overflow: hidden;
    }

    .card-img-top {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 200%;
        object-fit: cover;
    }



    @media (max-width: 768px) {
        .card-img-top {
            height: 150px; /* Smaller height for smaller devices */
        }
    }


</style>

    <!-- BREADCRUMB AREA -->
    <section class="rts-breadcrumb breadcrumb-height breadcumb-bg"
             style="background-image: url(website/assets/banners/servicesbanner.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <ul style="display: none;" class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faculty</li>
                        </ul>
                        <h2 style="text-align: left" class="section-title">CFIERD Team</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB AREA END -->


    <!-- faculty directory -->
    <section class="rts-faculty rts-section-padding">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-12 col-md-11">
                    <div class="rts-section mb--50">
                        <h3 class="rts-section-title">CFIERD Team</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-md-center g-5">
                @foreach($teamMembers as $teamMember)
                    <div class="col-lg-6 col-md-11">
                        <div class="single-staff">
                            <div class="single-staff__content">
                                <div class="staf-image">
                                    <img src="{{ asset($teamMember->image) }}" alt="staff image">
                                </div>
                                <div class="staf-info">
                                    <h5 class="name">{{ $teamMember->name }}</h5>
                                    <span class="designation">{{ $teamMember->title }}</span>
                                    <!-- Using htmlspecialchars to escape special characters for HTML attribute -->
                                    <a href="javascript:void(0);" class="rts-theme-btn border-btn"
                                       data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $teamMember->id }}"
                                    >Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    @foreach($teamMembers as $teamMember)
        <!-- Button trigger modal -->
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop{{ $teamMember->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">{{$teamMember->name}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="card-img-container">
                                <img src="{{ asset($teamMember->image) }}" style="width: 400px;height: 400px; margin-left: 25%;"  class="card-img-top" alt="Profile image of {{$teamMember->name}}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $teamMember->title }}</h5>
                                <p style="color: black;" class="card-text">
                                    {!! $teamMember->description !!}
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/dompurify@2.x/dist/purify.min.js"></script>

    <script>
        function launchModal(element) {
            event.preventDefault();

            var name = element.getAttribute('data-name');
            var title = element.getAttribute('data-title');
            var description = DOMPurify.sanitize(element.getAttribute('data-description'));
            var imagePath = element.getAttribute('data-image');

            document.getElementById('modalName').innerText = name;
            document.getElementById('modalTitle').innerText = title;
            document.getElementById('modalDescription').innerHTML = description; // Sanitized and safe to display
            document.getElementById('modalImage').src = imagePath;

            $('#yourModal').modal('show');
        }

    </script>


@endsection

