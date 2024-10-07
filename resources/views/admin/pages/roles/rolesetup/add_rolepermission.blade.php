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

                            <form action="{{ route('store.roles.permission') }}" method="POST" id="myForm">

                                @csrf

                                <div class="form-group mb-5">
                                    <label class="form-label">Role Name</label>
                                    <select name="role_id" class="form-select form-select-sm">
                                        <option selected disabled>Select Role</option>

                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach

                                    </select>
                                </div>

                                <div class="">

                                    <input type="checkbox"  id="checkDefaultmain">

                                    <label class="form-check-label" for="checkDefaultmain">
                                        All Permission
                                    </label>

                                </div>

                                <hr>


                                {{-- Role In Permission Group --}}

                                @foreach ($permission_groups as $group)
                                    <div class="row">

                                        <div class="col-3">
                                            <div class="mb-3">
                                                <input type="checkbox" class="" id="checkDefault">
                                                <label class="form-check-label" for="checkDefault">
                                                    {{ $group->group_name }}
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-9">

                                            @php
                                                $permissions = App\Models\Admin::getpermissionByGroupName(
                                                    $group->group_name,
                                                );
                                            @endphp

                                            @foreach ($permissions as $permission)
                                                <div class="mb-3">

                                                    <input type="checkbox" class=""
                                                        id="checkDefault{{ $permission->id }}" name="permission[]"
                                                        value="{{ $permission->id }}">

                                                    <label class="form-check-label" for="checkDefault{{ $permission->id }}">
                                                        {{ $permission->name }}
                                                    </label>

                                                </div>
                                            @endforeach
                                            <br>

                                        </div>

                                    </div>
                                @endforeach

                                {{-- Role In Permission Group --}}

                                <div class="col-12 mt-5">
                                    <button type="submit" class="btn btn-primary btn-sm me-2 px-3 float-end">Add Role
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
