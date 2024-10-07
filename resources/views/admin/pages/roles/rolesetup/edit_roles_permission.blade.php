<x-admin-app-layout :title="'Role In Permission'">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <style>
        .form-check-label {
            text-transform: capitalize;
        }
    </style>
    <!--begin::Content-->

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">


        <!--begin::Post-->
        <div class="">
            <!--begin::Container-->

            <div class="row">
                <div class="col-8">

                    <div class="card">
                        <div class="card-body">

                            <form action="{{ route('admin.roles.update', $role->id) }}" method="POST" id="myForm">

                                @csrf

                                <div class="form-group mb-5">
                                    <label class="form-label">Role Name</label>
                                    <input type="text" class="form-control form-control-sm text-danger" disabled
                                        name="name" value="{{ $role->name }}">
                                </div>

                                <div class="">
                                    <input type="checkbox" class="" id="checkDefaultmain">

                                    <label class="form-check-label" for="checkDefaultmain">
                                        All Permission
                                    </label>

                                </div>

                                <hr>


                                {{-- Role In Permission Group --}}

                                @foreach ($permission_groups as $group)
                                    <div class="row">
                                        <div class="col-3">

                                            @php
                                                $permissions = App\Models\Admin::getpermissionByGroupName(
                                                    $group->group_name,
                                                );
                                            @endphp

                                            <div class="">
                                                <input class="" type="checkbox" value=""
                                                    id="flexCheckDefault"
                                                    {{ App\Models\Admin::roleHasPermissions($role, $permissions) ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="flexCheckDefault">{{ $group->group_name }}</label>
                                            </div>
                                        </div>

                                        <div class="col-9">

                                            @foreach ($permissions as $permission)
                                                <div class="">
                                                    <input class="" name="permission[]"
                                                        {{ $role->hasPermissionTo($permission->name) ? 'checked' : '' }}
                                                        type="checkbox" value="{{ $permission->name }}"
                                                        id="flexCheckDefault{{ $permission->name }}">
                                                    <label class="form-check-label"
                                                        for="flexCheckDefault{{ $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                                <div class="mb-3"></div>
                                            @endforeach
                                            <br>
                                        </div>

                                    </div>
                                @endforeach

                                {{-- Role In Permission Group --}}

                                <div class="col-12 mt-5">
                                    <button type="submit" class="btn btn-primary btn-sm me-2 px-3 float-end">Update
                                        Role
                                        Permission</button>
                                </div>
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

    <script type="text/javascript">
        $('#checkDefaultmain').click(function() {

            if ($(this).is(':checked')) {
                $('input[ type= checkbox]').prop('checked', true);
            } else {
                $('input[ type= checkbox]').prop('checked', false);
            }

        });
    </script>

    {{-- validate code  --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    role_id: {
                        required: true,
                    },
                },
                messages: {
                    role_id: {
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
