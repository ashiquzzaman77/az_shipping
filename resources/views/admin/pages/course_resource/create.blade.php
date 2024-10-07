<x-admin-app-layout :title="'Course Resource'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.course_resource.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.course_resource.store') }}"
                enctype="multipart/form-data">
                @csrf

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Course Name</label>
                                <select name="course_id" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                    @if (count($courses) > 0)
                                        <OPtion>Choose Course List</OPtion>
                                        @foreach ($courses as $course)
                                            <option class="form-control" value="{{ $course->id }}">{{ $course->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Course Curriculum</label>
                                <select name="course_curriculum_id" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Pdf File</label>
                                <input type="file" name="course_file[]" multiple
                                    class="form-control form-control-sm">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Class Video</label>
                                <input type="file" name="course_video[]" multiple
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
        {{-- <script type="text/javascript">
            $(document).ready(function() {
                $('#myForm').validate({
                    rules: {

                        instructor_id: {
                            required: true,
                        },

                        name: {
                            required: true,
                        },

                        lecture: {
                            required: true,
                        },

                        project: {
                            required: true,
                        },

                        course_duration: {
                            required: true,
                        },

                        course_time: {
                            required: true,
                        },

                        price: {
                            required: true,
                        },

                        registration_start_date: {
                            required: true,
                        },

                        registration_end_date: {
                            required: true,
                        },


                    },
                    messages: {

                        instructor_id: {
                            required: 'Please Enter Instructor Name',
                        },

                        name: {
                            required: 'Please Enter Course Name',
                        },

                        lecture: {
                            required: 'Please Enter Lecture Name',
                        },

                        project: {
                            required: 'Please Enter Project',
                        },

                        course_duration: {
                            required: 'Please Enter Course Duration',
                        },

                        course_time: {
                            required: 'Please Enter Course Time',
                        },

                        price: {
                            required: 'Please Enter Price',
                        },

                        registration_start_date: {
                            required: 'Please Enter Start Date',
                        },

                        registration_end_date: {
                            required: 'Please Enter End Date',
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
        </script> --}}

        {{-- Course Curriculum --}}
        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="course_id"]').on('change', function() {
                    var course_id = $(this).val();
                    if (course_id) {
                        $.ajax({
                            url: "{{ url('/course/ajax') }}/" + course_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="course_curriculum_id"]').html('');
                                var d = $('select[name="course_curriculum_id"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="course_curriculum_id"]').append(
                                        '<option value="' + value.id + '">' + value
                                        .title + '</option>');
                                });
                            },

                        });
                    } else {
                        alert('danger');
                    }
                });
            });
        </script>
    @endpush


</x-admin-app-layout>
