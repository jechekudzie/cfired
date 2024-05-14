@extends('layouts.admin')
@push('head')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css"/>

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@endpush
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">CFIERD - Our Core Values</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item active">Our Core Values</li>
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

                                        <a href="" class="btn btn-info add-btn">
                                            <i class="fa fa-arrow-left"></i> Back
                                        </a>

                                        <button class="btn btn-info add-btn" data-bs-toggle="modal"
                                                data-bs-target="#showModal">
                                            <i class="fa fa-plus"></i> Add Core Values
                                        </button>
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
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <!--start table-->

                                <div class="row">
                                    <!--end col-->
                                    <div class="col-xxl-8">
                                        <!-- Base Example -->
                                        <h3>Our Core Values</h3>
                                        <div class="accordion" id="default-accordion-example">
                                            @foreach($values as $value)
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#collapse{{$value->id}}"
                                                                aria-expanded="true" aria-controls="collapseOne">
                                                            {{$value->title}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse{{$value->id}}"
                                                         class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                                         aria-labelledby="headingOne"
                                                         data-bs-parent="#default-accordion-example">
                                                        <div class="accordion-body">
                                                            {!! $value->text !!}
                                                        </div>
                                                        <br/>
                                                        <ul style="margin-left: 20px;" class="list-inline d-flex align-items-center g-3 text-muted fs-14 mb-5">
                                                            <li class="list-inline-item">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="flex-shrink-0 w-100">
                                                                        <a href="{{route('core-values.edit',$value->slug)}}"
                                                                           class="btn btn-primary btn-sm">
                                                                            <i class="fa fa-pencil"></i> Edit {{$value->title}}
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            @endforeach

                                        </div>
                                        <!--start modal-->
                                        <div class="modal fade" id="showModal" tabindex="-1"
                                             aria-labelledby="exampleModalLabel"
                                             aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content border-0">
                                                    <div class="modal-header bg-soft-info p-3">
                                                        <h5 class="modal-title" id="exampleModalLabel">CFIERD
                                                            CORE VALUES</h5>
                                                        <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal"
                                                                aria-label="Close" id="close-modal"></button>
                                                    </div>
                                                    <form method="post" action="{{route('core-values.store')}}"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="row g-3">
                                                                <div class="col-lg-12">

                                                                    <label for="title"
                                                                           class="form-label">Value</label>
                                                                    <input type="text" id="title"
                                                                           class="form-control"
                                                                           name="title" placeholder="Enter title "
                                                                           required/>

                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <label for="text"
                                                                           class="form-label">Description</label>
                                                                    <textarea name="text"
                                                                              class="form-control editor"
                                                                              id="editor">

                                                    </textarea>

                                                                </div>

                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <label for="image"
                                                                               class="form-label">Image
                                                                            Cover</label>
                                                                        <input type="file" id="image" name="image"
                                                                               class="form-control"
                                                                               placeholder="Upload Image"
                                                                        />
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="justify-content-start">
                                                                <button type="button" class="btn btn-light"
                                                                        data-bs-dismiss="modal">Close
                                                                </button>
                                                                <input type="submit" class="btn btn-success"
                                                                       value="Submit"/>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end add modal-->
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

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

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

                $('#mainForm').attr('action', '/admin/mission/' + slug);

            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            $('#buttons-datatables').DataTable({
                dom: 'Bfrtip',
                buttons: ['copy', 'csv', 'excel', 'print', 'pdf']
            });
        });

        $(function () {
            $(".datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });

    </script>

@endpush


