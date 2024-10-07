<x-admin-app-layout :title="'Permission'">
    <!--begin::Content-->

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->
        <div class="toolbar" id="kt_toolbar">
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
                        <li class="breadcrumb-item text-muted">Edit Permission
                        </li>
                        <!--end::Item-->

                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <!--begin::Primary button-->
                    {{-- <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary">Role</a>
                    <a href="../../demo1/dist/.html" class="btn btn-sm btn-dark">User Role</a> --}}
                    <!--end::Primary button-->

                </div>
                <!--end::Actions-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Toolbar-->

        <!--begin::Post-->
        <div class="">
            <!--begin::Container-->

            <div class="row">
                <div class="col-7">

                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('update.permission') }}" method="POST" id="myForm">

                                @csrf

                                <input type="hidden" name="id" value="{{ $permissions->id }}">

                                <div class="form-group mb-3">

                                    <label for="">Permission Name</label>

                                    <input type="text" value="{{ $permissions->name }}" name="name" autocomplete="off"
                                        placeholder="Permission Name" required class="form-control">

                                </div>

                                <div class="form-group">
                                    <label for="">Group Name</label>
                                    <select name="group_name" required class="form-select">
                                        <option selected disabled>Select Group Name</option>

                                        @foreach ($groups as $group)
                                            <option value="{{ $group->group_name }}"
                                                {{ $permissions->group_name == $group->group_name ? 'selected' : '' }}>
                                                {{ $group->group_name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mt-3 btn-sm float-end">Update
                                    Permission</button>

                            </form>

                        </div>
                    </div>



                </div>
            </div>

            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>

    <!--end::Content-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    {{-- validate code  --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    group_name: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please Enter Permission Name',
                    },
                    group_name: {
                        required: 'Please Enter Group Name',
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
