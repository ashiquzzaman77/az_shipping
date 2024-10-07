<x-admin-app-layout :title="'Course Category Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.course_category.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.course_category.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Course Section</label>
                                <select name="course_section_id" class="form-select form-select-sm" id="">
                                    <option value="">Select Course Section</option>
                                    @foreach ($courseSections as $courseSection)
                                        <option value="{{ $courseSection->id }}">{{ $courseSection->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Category Name</label>
                                <input type="text" name="name" placeholder="Course Category Name"
                                       class="form-control form-control-sm @error('name') is-invalid @enderror" 
                                       value="{{ old('name') }}">
                                
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Course Category Header</label>

                                <textarea name="header" placeholder="Course Category Header" class="form-control" cols="3" rows="3">{{ old('header') }}</textarea>

                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Description</label>
                                <textarea name="description" class="form-control editor" required>{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>


                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Banner Image</label>
                                <input type="file" name="banner_image" accept="image/*"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Thumbnail Image</label>
                                <input type="file" name="thumbnail_image" accept="image/*"
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Logo</label>
                                <input type="file" name="logo" accept="image/*"
                                    class="form-control form-control-sm">
                            </div>
                        </div>


                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Submit</button>
                        </div>

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
                        course_section_id: {
                            required: true,
                        },

                        name: {
                            required: true,
                        },

                        banner_image: {
                            required: true,
                        },
                        description: {
                            required: true,
                        },
                    },
                    messages: {

                        course_section_id: {
                            required: 'Please Enter Course Section Name',
                        },

                        name: {
                            required: 'Please Enter Course Category Name',
                        },
                        banner_image: {
                            required: 'Please Enter Banner Image',
                        },
                        description: {
                            required: 'Please Enter Description',
                        },
                    },
                    errorElement: 'span',
                    errorPlacement: function(error, element) {
                        if (element.attr("name") == "description") {
                            error.insertAfter(element);
                        } else {
                            error.addClass('invalid-feedback');
                            element.closest('.form-group').append(error);
                        }
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
