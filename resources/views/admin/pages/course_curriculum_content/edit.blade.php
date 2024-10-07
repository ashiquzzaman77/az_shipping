<x-admin-app-layout :title="'Course Curriculium Content Edit'">

    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.course_curriculum_content.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post"
                action="{{ route('admin.course_curriculum_content.update', $courseContent->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="course_curriculum_id" class="mb-2">Course Curriculum Name</label>
                                <select name="course_curriculum_id" id="course_curriculum_id"
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">
                                    <option selected disabled>Choose Course Corriculum</option>
                                    @foreach ($courseCurriculums as $courseCurriculum)
                                        <option value="{{ $courseCurriculum->id }}"
                                            {{ $courseContent->course_curriculum_id == $courseCurriculum->id ? 'selected' : '' }}>
                                            {{ $courseCurriculum->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="course_file" class="mb-2">File</label>
                                <input type="file" name="course_file" id="course_file"
                                    class="form-control form-control-sm mb-5">
                                @if ($courseContent->course_file)
                                    <a href="{{ asset('storage/' . $courseContent->course_file) }}" target="_blank"
                                        class="">
                                        Download PDF
                                    </a>
                                @else
                                    <p class="text-danger">No file available</p>
                                @endif

                            </div>
                        </div>



                        <div class="col-12 mb-3 mt-4">
                            <button type="submit"
                                class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update</button>
                        </div>

                    </div>
                </div>

            </form>

        </div>

    </div>

    <div class="card card-flash">

        <div class="card-body">

            <div class="card bg-light">

                <div class="row p-4">

                    <div class="col-12">

                        <h5>Class Video</h5>
                        <hr>

                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Sl No</th>
                                    <th scope="col">Video</th>
                                    <th scope="col">File</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <form action="{{ route('update.video') }}" method="POST" enctype="multipart/form-data">

                                    @csrf

                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <video width="40%" height="90" controls>
                                                <source src="{{ asset('storage/' . $courseContent->course_video) }}"
                                                    type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </td>
                                        <td>
                                            <input type="hidden" name="id" value="{{ $courseContent->id }}">
                                            <input type="file" class="btn-sm"
                                                value="{{ $courseContent->course_video }}" name="course_video"
                                                autocomplete="off">
                                        </td>
                                        <td class="text-center">
                                            <button type="submit"
                                                class="btn btn-light-primary btn-sm p-2">Update</button>

                                            <a href="{{ route('delete.video', $courseContent->id) }}" class="p-2"><i
                                                    class="bi bi-trash3-fill fs-5 text-danger"></i></a>
                                        </td>
                                    </tr>

                                </form>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>


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
