<x-admin-app-layout :title="'Course Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.course_curriculam.index') }}" class="btn btn-light-primary rounded-2">
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
                action="{{ route('admin.course_curriculam.update', $courseCurriculam->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Course Name</label>
                                <select name="course_id" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                    @if (count($courses) > 0)
                                        @foreach ($courses as $course)
                                            <option class="form-control" value="{{ $course->id }}"
                                                {{ $courseCurriculam->course_id == $course->id ? 'selected' : '' }}>
                                                {{ $course->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>

                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Badge Name</label>
                                <input type="text" name="badge" placeholder="Badge Name"
                                    class="form-control form-control-sm" value="{{ $courseCurriculam->badge }}">
                            </div>
                        </div>

                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Title</label>
                                <input type="text" name="title" placeholder="Course Title"
                                    class="form-control form-control-sm" value="{{ $courseCurriculam->title }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Duration</label>
                                <input type="text" name="duration" placeholder="Eg: 5 Hours"
                                    class="form-control form-control-sm" value="{{ $courseCurriculam->duration }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Class Number</label>
                                <input type="number" name="class_number" placeholder="10"
                                    class="form-control form-control-sm" value="{{ $courseCurriculam->class_number }}">
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Description</label>
                                <textarea name="description" id="" placeholder="Description" cols="2" rows="2"
                                    class="form-control editor">{{ $courseCurriculam->description }}</textarea>
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

    {{-- <div class="card card-flash mt-5">


        <div class="card-body shadow">

            <div class="mb-3">
                <h2>Curriculum Video</h2>
            </div>

            <div class="card shadow mb-3">
                <div class="card-body">
                    <div class="row">

                        <div class="col-4 shadow" style="padding: 20px">

                            <form action="{{ route('store.new.video') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="videoid" value="{{ $courseCurriculam->id }}">

                                <div class="row">

                                    <div class="col-12">
                                        <label for="">Add Video</label>
                                        <input type="file" autocomplete="off" class="form-control form-control-sm"
                                            name="course_video">
                                    </div>

                                    
                                </div>

                                <div class="pt-3 float-end">
                                    <label for=""></label>
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>

                            </form>

                        </div>

                        <div class="col-8 shadow" style="padding: 20px">
                            <h5>Class Video</h5>
                            <hr>

                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl No</th>
                                        <th scope="col">Video</th>
                                        <th scope="col">File</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <form action="{{ route('update.video.curriculum') }}" method="POST"
                                        enctype="multipart/form-data">

                                        @csrf

                                        @foreach ($multivideo as $key => $video)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <video width="40%" height="90" controls>
                                                        <source src="{{ asset('storage/' . $video->course_video) }}"
                                                            type="video/mp4">
                                                    </video>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-control"
                                                        name="course_video[{{ $video->id }}]" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn-success"><i
                                                            class="bi bi-pencil text-light"></i></button>

                                                    <a href="{{ route('delete.multi-video', $video->id) }}"
                                                        class=""><i
                                                            class="bi bi-trash3-fill text-danger"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </form>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div> --}}

    {{-- Pdf File Section --}}
    {{-- <div class="card card-flash mt-5">


        <div class="card-body shadow">

            <div class="mb-3">
                <h2>Curriculum File</h2>
            </div>

            <div class="card shadow mb-3">
                <div class="card-body">
                    <div class="row">

                        <div class="col-4 shadow" style="padding: 20px">

                            <form action="{{ route('store.new.file') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="fileid" value="{{ $courseCurriculam->id }}">

                                <div class="row">

                                    <div class="col-12">
                                        <label for="">Add File</label>
                                        <input type="file" autocomplete="off" class="form-control form-control-sm"
                                            name="course_file">
                                    </div>

                                </div>

                                <div class="pt-3 float-end">
                                    <label for=""></label>
                                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                </div>

                            </form>

                        </div>

                        <div class="col-8 shadow" style="padding: 20px">
                            <h5>Resource File</h5>
                            <hr>

                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">File</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <form action="{{ route('update.file.curriculum') }}" method="POST"
                                        enctype="multipart/form-data">

                                        @csrf

                                        @foreach ($multifile as $key => $file)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                                    <a href="{{ asset('storage/' . $file->course_file) }}"
                                                        target="_blank" class="">
                                                        Download PDF
                                                    </a>
                                                </td>
                                                <td>
                                                    <input type="file" class="form-control form-control-sm"
                                                        name="course_file[{{ $file->id }}]" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn-success"><i
                                                            class="bi bi-pencil text-light"></i></button>

                                                    <a href="{{ route('delete.multi-file', $file->id) }}"
                                                        class=""><i
                                                            class="bi bi-trash3-fill text-danger"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </form>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div> --}}

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
