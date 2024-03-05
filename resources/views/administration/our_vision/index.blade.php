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

                                        <a href="" class="btn btn-info add-btn">
                                            <i class="fa fa-arrow-left"></i> Back
                                        </a>

                                        <button class="btn btn-info add-btn" data-bs-toggle="modal"
                                                data-bs-target="#showModal">
                                            <i class="fa fa-plus"></i> Add Vision
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
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <!--start table-->
                                @if($visions)
                                    @foreach($visions as $vision)
                                        <table style="width: 100%;" id="buttons-datatables"
                                               class="display table table-bordered dataTable no-footer"
                                               aria-describedby="buttons-datatables_info">
                                            <thead>
                                            <tr>
                                                <th class="sorting sorting_asc" tabindex="0"
                                                    aria-controls="buttons-datatables" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 224.4px;">Image
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="buttons-datatables"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Position: activate to sort column ascending"
                                                    style="width: 336.4px;">Title
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="buttons-datatables"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Office: activate to sort column ascending"
                                                    style="width: 164.4px;">Text
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="buttons-datatables"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Salary: activate to sort column ascending"
                                                    style="width: 112.4px;">Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="even">
                                                <td class="sorting_1">
                                                    <img class="rounded-start w-50"
                                                         src="{{ asset($vision->image) }}" alt="Card image">
                                                </td>
                                                <td>{{$vision->title}}</td>
                                                <td>
                                                    {!! substr($vision->text,0,50) !!}....<a href="{{route('vision.edit',$vision->slug)}}" class=""
                                                                                             title="Edit">Read More</a>
                                                </td>
                                                <td>
                                                    <a href="{{route('vision.edit',$vision->slug)}}" class="edit-button btn btn-sm btn-primary"
                                                     title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <!-- Delete Button -->
                                                    <form action="{{ route('vision.destroy',$vision->slug)}}"
                                                          method="POST" onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <!--start modal-->
                        <div class="modal fade" id="showModal" tabindex="-1"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content border-0">
                                    <div class="modal-header bg-soft-info p-3">
                                        <h5 class="modal-title" id="exampleModalLabel">CFIRED
                                            VISION</h5>
                                        <button type="button" class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close" id="close-modal"></button>
                                    </div>
                                    <form method="post" action="{{route('vision.store')}}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-lg-12">

                                                    <label for="title"
                                                           class="form-label">Section Title</label>
                                                    <input type="text" id="title"
                                                           class="form-control"
                                                           name="title" placeholder="Enter title "
                                                           required/>

                                                </div>
                                                <div class="col-lg-12">
                                                    <label for="text"
                                                           class="form-label">Content</label>
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

                $('#mainForm').attr('action', '/admin/vision/' + slug);

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


