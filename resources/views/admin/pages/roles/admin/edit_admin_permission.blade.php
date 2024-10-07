<x-admin-app-layout :title="'Role In Permission'">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!--begin::Content-->

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Toolbar-->

        <!--end::Toolbar-->

        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Products-->
                <div class="card card-flush">

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <form action="{{ route('update.admin', $users->id) }}" method="POST" id="myForm">

                            @csrf

                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="name" value="{{ $users->name }}"
                                                autocomplete="off" placeholder="Name" required
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label for="">Email</label>
                                            <input type="email" value="{{ $users->email }}" name="email"
                                                autocomplete="off" placeholder="Email" required
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>


                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label for="">Company Name</label>
                                            <input type="text" value="{{ $users->company_name }}" name="company_name"
                                                autocomplete="off" placeholder="Compnay Name"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label for="">Designation</label>
                                            <input type="text" value="{{ $users->designation }}" name="designation"
                                                autocomplete="off" placeholder="Designation"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>



                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label for="">Phone</label>
                                            <input type="tel" value="{{ $users->phone }}" name="phone"
                                                autocomplete="off" placeholder="Phone"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label for="">Address</label>
                                            <input type="text" value="{{ $users->address }}" name="address"
                                                autocomplete="off" placeholder="Address"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <div class="form-group mb-3">
                                            <label for="">Role</label>

                                            <select class="form-select form-select-sm" name="roles">
                                                <option selected disabled>Select Role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->name }}"
                                                        {{ $users->hasRole($role->name) ? 'selected' : '' }}>
                                                        {{ $role->name }}
                                                    </option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-2">
                                        <label for="">Status</label>
                                        <select name="status" id="" class="form-select form-select-sm">
                                            <option selected disabled>Select Status</option>
                                            <option value="active" {{ $users->status == 'active' ? 'selected' : '' }}>
                                                Active</option>
                                            <option value="inactive"
                                                {{ $users->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-2">
                                        <label for="">Mail Status</label>
                                        <select name="mail_status" id="" class="form-select form-select-sm">
                                            <option selected disabled>Select Mail Status</option>

                                            <option value="mail" {{ $users->mail_status == 'mail' ? 'selected' : '' }}>
                                                Mail</option>

                                            <option value="no_mail"
                                                {{ $users->mail_status == 'no_mail' ? 'selected' : '' }}>No Mail</option>

                                        </select>
                                    </div>

                                </div>



                            </div>

                            <div class="modal-footer">

                                <button type="submit" class="btn btn-primary btn-sm">Save changes</button>

                            </div>

                        </form>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Products-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Post-->
    </div>

    <!--end::Content-->

    {{-- validate code  --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                    roles: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Please Enter Name',
                    },
                    email: {
                        required: 'Please Enter Email',
                    },
                    password: {
                        required: 'Please Enter password',
                    },
                    roles: {
                        required: 'Please Enter Role Name',
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
