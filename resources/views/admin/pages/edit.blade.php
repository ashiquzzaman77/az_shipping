<x-admin-app-layout :title="'Course Edit'">
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

                        <div class="col-3 mb-3 form-group">

                            <div class="">
                                <label for="" class="mb-2">Instructor Name</label>
                                <select class="form-select form-select-solid form-select-sm" name="instructor_id[]"
                                    id="field2" multiple="" multiselect-search="true"
                                    multiselect-select-all="true" multiselect-max-items="2">

                                    @if (count($admins) > 0)
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->id }}"
                                                {{ in_array($admin->id, explode(',', $course->instructor_id)) ? 'selected' : '' }}>
                                                {{ $admin->name }}
                                            </option>
                                        @endforeach
                                    @endif


                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Service Name</label>
                                <select class="form-select form-select-solid form-select-sm" name="service_id[]"
                                    id="field2" multiple="" multiselect-search="true"
                                    multiselect-select-all="true" multiselect-max-items="2">

                                    @if (count($services) > 0)
                                        @foreach ($services as $service)
                                            <option value="{{ $service->id }}"
                                                {{ in_array($service->id, explode(',', $course->service_id)) ? 'selected' : '' }}>
                                                {{ $service->name }}
                                            </option>
                                        @endforeach
                                    @endif


                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Industry Name</label>
                                <select class="form-select form-select-solid form-select-sm" name="industry_id[]"
                                    id="field2" multiple="" multiselect-search="true"
                                    multiselect-select-all="true" multiselect-max-items="2">

                                    @if (count($industrys) > 0)
                                        @foreach ($industrys as $industry)
                                            <option value="{{ $industry->id }}"
                                                {{ in_array($industry->id, explode(',', $course->industry_id)) ? 'selected' : '' }}>
                                                {{ $industry->name }}
                                            </option>
                                        @endforeach
                                    @endif


                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Course Type</label>
                                <select name="course_type" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                    <option value="offline" {{ $course->course_type == 'offline' ? 'selected' : '' }}>
                                        Offline</option>

                                    <option value="online" {{ $course->course_type == 'online' ? 'selected' : '' }}>
                                        Online</option>

                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3">

                            <div class="form-group">
                                <label for="" class="mb-2">Course Section Name</label>
                                <select name="course_section_id" data-placeholder="Select Row One.."
                                    class="form-select form-select-sm" data-control="select2"
                                    data-placeholder="Select an option">

                                    @if (count($courseSections) > 0)
                                        @foreach ($courseSections as $courseSection)
                                            <option class="form-control" value="{{ $courseSection->id }}"
                                                {{ $course->course_section_id == $courseSection->id ? 'selected' : '' }}>
                                                {{ $courseSection->name }}
                                            </option>
                                        @endforeach
                                    @endif

                                </select>
                            </div>

                        </div>

                        <div class="col-3 mb-3 form-group">
                            <label for="course_category_id" class="mb-2">Course Category Name</label>
                            <select name="course_category_id" data-placeholder="Select Row One.."
                                class="form-select form-select-sm" data-control="select2">
                                <option selected>Select an option</option>
                                @if ($courseCats->isNotEmpty())
                                    @foreach ($courseCats as $courseCat)
                                        <option value="{{ $courseCat->id }}"
                                            {{ $course->course_category_id == $courseCat->id ? 'selected' : '' }}>
                                            {{ $courseCat->name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>

                            <!-- Error Message Display -->
                            @if ($errors->has('course_category_id'))
                                <div class="text-danger mt-1">
                                    {{ $errors->first('course_category_id') }}
                                </div>
                            @endif
                        </div>



                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Course Name</label>
                                <input type="text" name="name" placeholder="Corse Name"
                                    class="form-control form-control-sm" value="{{ $course->name }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Tags</label>
                                <input type="text" name="tags" data-role="tagsinput" placeholder=""
                                    class="form-control form-control-sm" value="{{ $course->tags }}">
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
                                <input type="number" name="project" placeholder="10"
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
                                <label for="" class="mb-2">Total Student</label>
                                <input type="number" name="total_student" placeholder="Eg: 12,255"
                                    class="form-control form-control-sm" value="{{ $course->total_student }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Currency</label>
                                <input type="number" name="currency" placeholder="Eg: 10"
                                    class="form-control form-control-sm" value="{{ $course->currency }}">
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
                                <input type="date" name="discount_start_date" min=""
                                    class="form-control form-control-sm" value="{{ $course->discount_start_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Discount End Date</label>
                                <input type="date" name="discount_end_date" min=""
                                    class="form-control form-control-sm" value="{{ $course->discount_end_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Class Start Date</label>
                                <input type="date" name="class_start_date" min=""
                                    class="form-control form-control-sm" value="{{ $course->class_start_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Class End Date</label>
                                <input type="date" name="class_end_date" min=""
                                    class="form-control form-control-sm" value="{{ $course->class_end_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Registration Start Date</label>
                                <input type="date" name="registration_start_date" min=""
                                    class="form-control form-control-sm"
                                    value="{{ $course->registration_start_date }}">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Registration End Date</label>
                                <input type="date" name="registration_end_date" min=""
                                    class="form-control form-control-sm"
                                    value="{{ $course->registration_end_date }}">
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Short Description</label>
                                <textarea name="short_descp" class="form-control editor" id="" cols="3" rows="3">{!! $course->short_descp !!}</textarea>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Overview</label>
                                <textarea name="overview" class="form-control editor" id="" cols="3" rows="3">{!! $course->overview !!}</textarea>
                            </div>
                        </div>

                        <div class="col-6 mb-3">
                            <div class="form-group">
                                <label for="" class="mb-2">Description</label>
                                <textarea name="description" class="form-control editor" id="" cols="2" rows="2">{!! $course->description !!}</textarea>
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Image</label>
                                <input type="file" name="thumbnail_image" accept="image/*"
                                    class="form-control form-control-sm mb-3">

                                <img class="" src="{{ asset('storage/course/' . $course->thumbnail_image) }}"
                                    height="40" width="40" alt="">
                            </div>
                        </div>

                        <div class="col-3 mb-3">
                            <div class="">
                                <label for="" class="mb-2">Course Banner Image</label>
                                <input type="file" name="course_banner_image" accept="image/*"
                                    class="form-control form-control-sm mb-3">

                                <img class=""
                                    src="{{ asset('storage/course/' . $course->course_banner_image) }}"
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

                        course_section_id: {
                            required: true,
                        },

                        course_category_id: {
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

                        course_section_id: {
                            required: 'Please Enter Course Section Name',
                        },

                        course_category_id: {
                            required: 'Please Enter Category Name',
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

        {{-- Category --}}
        <script type="text/javascript">
            $(document).ready(function() {
                $('select[name="course_section_id"]').on('change', function() {
                    var course_section_id = $(this).val();
                    if (course_section_id) {
                        $.ajax({
                            url: "{{ url('/category/ajax') }}/" + course_section_id,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                $('select[name="course_category_id"]').html('');
                                var d = $('select[name="course_category_id"]').empty();
                                $.each(data, function(key, value) {
                                    $('select[name="course_category_id"]').append(
                                        '<option value="' + value.id + '">' + value
                                        .name + '</option>');
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
