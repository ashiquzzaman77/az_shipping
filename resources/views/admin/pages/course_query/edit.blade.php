<x-admin-app-layout :title="'Course Create'">
    <div class="card card-flash">
        <div class="card-header">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.course.index') }}" class="btn btn-light-primary rounded-2">
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

            <form id="myForm" method="post" action="{{ route('admin.course.update', $course->id) }}"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="card bg-light">

                    <div class="row p-4">

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Instructor Name</label>
                                <select name="instructor_id" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                    @if (count($admins) > 0)
                                        @foreach ($admins as $admin)
                                            <option class="form-control" value="{{ $admin->id }}"
                                                {{ $course->instructor_id == $admin->id ? 'selected' : '' }}>
                                                {{ $admin->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>

                        </div>

                        <div class="col-4 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Course Name</label>
                                <input type="text" name="name" placeholder="Corse Name"
                                    class="form-control form-control-sm" value="{{ $course->name }}">
                            </div>
                        </div>

                        <div class="col-5 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Tags</label>
                                <input type="text" name="tags" data-role="tagsinput" placeholder="" class="form-control form-control-sm"
                                    value="{{ $course->tags }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Lecture</label>
                                <input type="text" name="lecture" placeholder="25 Leacture"
                                    class="form-control form-control-sm" value="{{ $course->lecture }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Project</label>
                                <input type="text" name="project" placeholder="Five Project"
                                    class="form-control form-control-sm" value="{{ $course->project }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Course Duration</label>
                                <input type="text" name="course_duration" placeholder="6 Months"
                                    class="form-control form-control-sm" value="{{ $course->course_duration }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Course Time</label>
                                <input type="text" name="course_time" placeholder="Eg: 2.00-4.00 Pm (Sat-Fri)"
                                    class="form-control form-control-sm" value="{{ $course->course_time }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Available Seats</label>
                                <input type="number" name="available_seats" placeholder="Eg: 10"
                                    class="form-control form-control-sm" value="{{ $course->available_seats }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Price</label>
                                <input type="number" name="price" placeholder="Eg:20000"
                                    class="form-control form-control-sm" value="{{ $course->price }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Discount Price</label>
                                <input type="number" name="discount_price" placeholder="Eg:10000"
                                    class="form-control form-control-sm" value="{{ $course->discount_price }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Online Price</label>
                                <input type="number" name="online_price" placeholder="Eg:5000"
                                    class="form-control form-control-sm" value="{{ $course->online_price }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Discount Start Date</label>
                                <input type="date" name="discount_start_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm" value="{{ $course->discount_start_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Discount End Date</label>
                                <input type="date" name="discount_end_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm" value="{{ $course->discount_end_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Class Start Date</label>
                                <input type="date" name="class_start_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm" value="{{ $course->class_start_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Class End Date</label>
                                <input type="date" name="class_end_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm" value="{{ $course->class_end_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Registration Start Date</label>
                                <input type="date" name="registration_start_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm"
                                    value="{{ $course->registration_start_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Registration End Date</label>
                                <input type="date" name="registration_end_date"
                                    min="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                                    class="form-control form-control-sm"
                                    value="{{ $course->registration_end_date }}">
                            </div>
                        </div>

                        <div class="col-5 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Image</label>
                                <input type="file" name="thumbnail_image" accept="image/*"
                                    class="form-control form-control-sm mb-3">

                                <img class="" src="{{ asset('storage/course/' . $course->thumbnail_image) }}"
                                    height="40" width="40" alt="">
                            </div>
                        </div>

                        <div class="col-12 mb-3 mt-4">
                            <button type="submit" class="btn btn-primary rounded-0 px-5 btn-sm float-end">Update
                                Course</button>
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
        </script>
    @endpush


</x-admin-app-layout>
