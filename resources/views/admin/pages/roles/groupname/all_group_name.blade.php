<x-admin-app-layout :title="'Group Name'">
    <!--begin::Content-->

    <!--begin::Toolbar-->
    {{-- <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Permission</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-300 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Total Group Name <span
                            class="ms-2 badge bg-danger">{{ count($groups) }}</span>
                    </li>
                    <!--end::Item-->

                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">

                <!--begin::Primary button-->
                <a href="{{ route('all.role') }}" class="btn btn-sm btn-light-success">Role</a>
                <a href="{{ route('all.permission') }}" class="btn btn-sm btn-light-primary">Permission</a>
                <a href="{{ route('all.roles.permission') }}" class="btn btn-sm btn-light-info">Role In Permission</a>
                <!--end::Primary button-->

            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div> --}}
    <!--end::Toolbar-->

    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <!--begin::Products-->
            <div class="card">
                <!--begin::Card header-->
                <div class="">
                    <!--begin::Card toolbar-->
                    <div class="float-end m-4">
                        <!--begin::Add product-->
                        <a href="" class="btn btn-light-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#addModal">Add Group Name</a>
                    </div>

                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_datatable_example_5">

                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bolder fs-7 gs-0">

                                <th>Sl</th>
                                <th>Group Name</th>
                                <th>Action</th>

                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">

                            <!--begin::Table row-->
                            @foreach ($groups as $key => $group)
                                <tr>

                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $group->group_name }}</td>

                                    <td>

                                        <a href="" title="Edit" data-bs-toggle="modal"
                                            data-bs-target="#editModal{{ $group->id }}"><i
                                                class="bi bi-pencil-square fs-3 text-primary"></i></a>

                                        {{-- Edit Modal --}}

                                        <div class="modal fade" id="editModal{{ $group->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Group Name</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>

                                                    <form action="{{ route('update.group.name') }}" method="POST" id="myForm">

                                                        @csrf

                                                        <input type="hidden" name="id" value="{{ $group->id }}">

                                                        <div class="modal-body">

                                                            <div class="form-group">
                                                                <label for="">Group Name</label>
                                                                <input type="text" name="group_name"
                                                                    value="{{ $group->group_name }}" autocomplete="off"
                                                                    placeholder="Group Name" required class="form-control">
                                                            </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary btn-sm">Update
                                                                Group</button>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        <a href="{{ route('delete.group.name', $group->id) }}" title="Delete" id="delete"><i class="bi bi-trash3-fill fs-3 text-danger"></i></a>

                                    </td>

                                </tr>
                            @endforeach
                            <!--end::Table row-->


                        </tbody>
                        <!--end::Table body-->

                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Products-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->



    {{-- Add Role --}}
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Group Name</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('store.group.name') }}" method="POST" id="myForm">

                    @csrf

                    <div class="modal-body">

                        <div class="form-group">
                            <label for="">Group Name</label>
                            <input type="text" name="group_name" autocomplete="off" placeholder="Group Name" required
                                class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    {{-- Add Role --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    {{-- validate code  --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    group_name: {
                        required: true,
                    },
                },
                messages: {
                    group_name: {
                        required: 'Enter Group Name',
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
</x-admin-app-layout>
