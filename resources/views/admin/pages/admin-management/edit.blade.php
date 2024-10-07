<x-admin-app-layout :title="'Admin Edit List'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.admin-management.index') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span> Back to list
                </a>

            </div>
        </div>
        <div class="card-body">

            <form id="myForm" method="post" action="{{ route('admin.admin-management.update', $admin->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Use PUT or PATCH if you are updating an existing resource -->

                <div class="row p-4">

                    <!-- Name Field -->
                    <div class="col-3 mb-3">
                        <div class="form-group">
                            <label for="name" class="mb-2">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name', $admin->name) }}"
                                placeholder="Name"
                                class="form-control form-control-sm @error('name') is-invalid @enderror">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div class="col-3 mb-3">
                        <div class="form-group">
                            <label for="email" class="mb-2">Email</label>
                            <input type="email" id="email" name="email"
                                value="{{ old('email', $admin->email) }}" placeholder="email@gmail.com"
                                class="form-control form-control-sm @error('email') is-invalid @enderror">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Phone Field -->
                    <div class="col-3 mb-3">
                        <div class="form-group">
                            <label for="phone" class="mb-2">Phone</label>
                            <input type="text" id="phone" name="phone"
                                value="{{ old('phone', $admin->phone) }}" placeholder="01782*****"
                                class="form-control form-control-sm @error('phone') is-invalid @enderror">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-3 mb-3">
                        <div class="form-group">
                            <label for="address" class="mb-2">Role</label>
                            <select name="role"
                                class="form-select form-select-sm @error('role') is-invalid @enderror" id="">
                                <option selected disabled>Choose Role</option>

                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}"
                                        {{ $admin->hasRole($role->name) ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach

                            </select>
                            @error('role')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!-- Address Field -->
                    <div class="col-3 mb-3">
                        <div class="form-group">
                            <label for="address" class="mb-2">Address</label>
                            <input type="text" id="address" name="address"
                                value="{{ old('address', $admin->address) }}" placeholder="eg: Dhaka, Bangladesh"
                                class="form-control form-control-sm">
                        </div>
                    </div>

                    <!-- Image Field -->
                    <div class="col-3 mb-3">
                        <div class="form-group">
                            <label for="image" class="mb-2">Image</label>
                            <input type="file" id="image" name="image" class="form-control form-control-sm">
                            @if ($admin->image)
                                <img src="{{ asset('storage/images/' . $admin->image) }}" alt="Admin Image"
                                    class="img-thumbnail mt-2" style="max-width: 100px;">
                            @endif
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 mb-3 mt-4">
                        <button type="submit" class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                    </div>

                </div>
            </form>


        </div>

    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myForm').validate({
                    rules: {

                        course_id: {
                            required: true,
                        },

                        title: {
                            required: true,
                        },

                        duration: {
                            required: true,
                        },

                        class_number: {
                            required: true,
                        },


                    },
                    messages: {

                        course_id: {
                            required: 'Please Enter Instructor Name',
                        },

                        title: {
                            required: 'Please Enter Course Title',
                        },

                        duration: {
                            required: 'Please Fill Up this field',
                        },

                        class_number: {
                            required: 'Please Enter Class Number',
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
    @endpush


</x-admin-app-layout>
