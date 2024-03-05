@extends('layouts.admin')
@push('head')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
@endpush
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">CFIRED - Our Vision</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item active">Our Vision</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center flex-wrap gap-2">
                                    <div class="flex-grow-1">

                                        <a href="{{route('vision.index')}}" class="btn btn-info add-btn">
                                            <i class="fa fa-arrow-left"></i> Back
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(session()->has('errors'))
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <!-- Success Alert -->
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong> Errors! </strong> {{ $error }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                </div>
                            @endforeach

                        @endif
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Message!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                        </div>
                    @endif
                    <!--end col-->
                    <div class="col-xxl-10">
                        <div class="card">
                            <div class="card-body">
                                <!--start table-->

                                <div class="card">
                                    <div class="row g-0">
                                        <div style="margin-top: 15%" class="col-md-4">
                                            <img class="rounded-start w-100"
                                                 src="{{ asset($vision->image) }}" alt="Card image">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">{{$vision->title}}</h5>
                                            </div>
                                            <div class="card-body">

                                                <form method="post" action="{{route('vision.update',$vision->slug)}}" enctype="multipart/form-data">
                                                    @method('PATCH')
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row g-3" style="border: 1px solid black; padding: 15px;">
                                                            <div class="col-lg-12">
                                                                <label for="title" class="form-label">Section Title</label>
                                                                <input type="text" id="title" class="form-control" name="title" value="{{$vision->title}}" placeholder="Enter title " required style="border: 2px solid black;"/>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                <label for="text" class="form-label">Content</label>
                                                                <textarea name="text" class="form-control editor" id="editor" style="border: 2px solid black;">{!! $vision->text !!}</textarea>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <label for="image" class="form-label">Image Cover</label>
                                                                <input type="file" id="image" name="image" class="form-control" placeholder="Upload Image" style="border: 2px solid black;"/>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <div class="">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <input type="submit" class="btn btn-success" value="Submit"/>
                                                        </div>
                                                    </div>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--end col-->


                    <!--end col-->
                    <!--end card-->
                </div>

            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
@stop
@push('scripts')
    <!--datatable js-->

    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('ckeditor/styles.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.custom.js')}}"></script>

    <script>

        // Assuming you have jQuery available
        $(document).ready(function () {
            $('#updateModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget); // Button that triggered the modal

                // Extract info from data-* attributes
                var slug = button.data('slug');
                var title = button.data('title');
                var text = button.data('text');

                // Update the modal's content.
                var modal = $(this);
                modal.find('#slug').val(slug); // Assuming your modal has an input field with ID 'slug'
                modal.find('#title').val(title); // Assuming your modal has an input field with ID 'title'
                modal.find('#editor').val(text); // Assuming your modal has a textarea or input field with ID 'text'

                $('#mainForm').attr('action', '/admin/vision/' + slug);

            });
        });


    </script>
    <script>
        $(function () {
            $(".datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>

@endpush


