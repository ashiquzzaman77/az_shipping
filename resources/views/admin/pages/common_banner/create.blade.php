@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!--begin::Content-->


    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Contact</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Total Contact<span
                            class="ms-2 badge bg-danger">{{ count($contacts) }}</span></li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <a href="" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-light-primary btn-sm">Add
                    Contact</a>

            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!--begin::Table-->

                    <table id="kt_datatable_example_5" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $key => $contact)
                                <tr>

                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->message }}</td>

                                    <td>
                                        <a href="" class="ms-1" title="Edit"><i
                                                class="bi bi-pencil-square fs-3 text-primary"></i></a>

                                        <a href="{{ route('delete.contact', $contact->id) }}" class="ms-1" id="delete"
                                            title="Delete"><i class="bi bi-trash3-fill fs-3 text-danger"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!--end::Table-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Post-->

    <!-- Add Modal -->

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Contact</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('store.contact') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="modal-body">

                        <div class="row">

                            <div class="col-4">

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Name</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                        autocomplete="off">

                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-4">

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                        autocomplete="off">
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>

                            </div>

                            <div class="col-4">

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Phone</label>
                                    <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone"
                                        autocomplete="off">
                                        @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>

                            </div>

                            <div class="col-4">

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Address</label>
                                    <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Address"
                                        autocomplete="off">
                                        @error('address')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror

                                </div>

                            </div>

                            <div class="col-4">

                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Ip Address</label>
                                    <input type="text" name="ip_address" class="form-control" placeholder="Ip Address"
                                        autocomplete="off">

                                </div>

                            </div>

                            <div class="col-12">
                                <div class="form-group mb-3">
                                    <label for="" class="mb-2">Message</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Write Message Here...." name="message"></textarea>
                                    @error('message')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Add Contact</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Data Table  --}}
    <script>
        $("#kt_datatable_example_5").DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +

                "<'table-responsive'tr>" +

                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    </script>
@endsection
