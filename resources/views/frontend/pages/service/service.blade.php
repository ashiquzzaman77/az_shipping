@extends('frontend.master')
@section('content')
    <section class="">
        @if (!empty($service->banner_image))
            <img class="img-fluid" src="{{ asset('storage/service/' . $service->banner_image) }}" alt="Picture" />
        @endif
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb" class="py-3">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('homepage') }}" class="text-decoration-none main-color">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="" class="text-decoration-none main-color">{{ $service->name }}</a>
                            </li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-9">
                    <div class="text-start py-2 pt-0">
                        <h1 class="main-color">
                            {{ $service->name }}
                        </h1>
                        <div class="section-devider"
                            style="background-color: #0a1d5b;height: 2px;width: 10%;margin: start;">
                        </div>
                        <p class="pt-3 fs-6 mb-1" style="text-align: justify">
                            {{ $service->header }}
                        </p>
                    </div>
                    {{-- <div>
                        <img class="img-fluid w-100"
                            src="https://www.promisetrainingglobal.com/wp-content/webp-express/webp-images/doc-root/wp-content/uploads/2017/12/public-course.jpg.webp"
                            alt="" />
                    </div> --}}
                    <div>
                        <p class="py-2" style="text-align: justify">
                            {!! $service->description !!}
                        </p>
                    </div>
                </div>

                <div class="col-lg-3">
                    {{-- <h3 class="main-color">Search a Course</h3> --}}



                    {{-- <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="row gx-1">

                                    <div class="col-lg-6">
                                        <select class="form-select rounded-0" name="course_section_id"
                                            aria-label="Default select example">
                                            <option selected disabled>Select Type</option>
                                            @foreach ($courseSections as $courseSection)
                                                <option value="{{ $courseSection->id }}">{{ $courseSection->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-lg-6">
                                        <select class="form-select rounded-0" name="course_name"
                                            aria-label="Default select example">
                                            <option selected disabled>Select Course</option>
                                        </select>
                                    </div>


                                </div>


                                <div class="table-responsive mt-3">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="background-color: #0a1d5b; color: white">
                                                        Course Title
                                                    </th>
                                                    <th style="background-color: #0a1d5b; color: white">
                                                        Venue
                                                    </th>
                                                    <th style="background-color: #0a1d5b; color: white">
                                                        Fees
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">

                                                <tr>
                                                    <td>

                                                        <p id="courseTitle" class="more-text">

                                                        </p>

                                                    </td>
                                                    <td class="text-muted">Offline</td>
                                                    <td class="text-muted">$5000</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <select class="form-select rounded-0" name="course_section_id"
                                            aria-label="Default select example">
                                            <option selected disabled>Select Type</option>
                                            @foreach ($courseSections as $courseSection)
                                                <option value="{{ $courseSection->id }}">{{ $courseSection->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">

                                        <select class="form-select rounded-0" name="course_name"
                                            aria-label="Default select example" onchange="updateCourseInfo()">
                                            <option>Select Course</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="table-responsive mt-3">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="background-color: #0a1d5b; color: white">Course Title</th>
                                                <th style="background-color: #0a1d5b; color: white">Type</th>
                                                <th style="background-color: #0a1d5b; color: white">Fees</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider" id="courseDetails">
                                            <!-- Default course details row -->
                                            <tr>

                                                <td>
                                                    <p id="courseTitle" class="more-text">Course Not Selected</p>
                                                </td>

                                                <td class="text-muted">Offline</td>

                                                <td id="coursePrice" class="text-muted">$5000</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row gx-1">
                                    <div class="col-lg-6">
                                        <select class="form-select rounded-0" name="course_section_id"
                                            aria-label="Default select example" onchange="getCoursesOptions(this)">
                                            <option selected disabled>Select Type</option>
                                            @foreach ($courseSections as $courseSection)
                                                <option value="{{ $courseSection->id }}">{{ $courseSection->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <select class="form-select rounded-0" name="course_name"
                                            aria-label="Default select example" onchange="updateCourseInfo()">
                                            <option>Select Course</option>
                                            @foreach ($courses as $course)
                                                <option value="{{ $course->id }}" data-type="{{ $course->course_type }}"
                                                    data-price="{{ $course->offline_price }}">
                                                    {{ $course->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="table-responsive mt-3">
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th style="background-color: #0a1d5b; color: white">Course Title</th>
                                                <th style="background-color: #0a1d5b; color: white">Type</th>
                                                <th style="background-color: #0a1d5b; color: white">Fees</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider" id="courseDetails">
                                            
                                            <tr>
                                                <td>
                                                    <p id="courseTitle" class="more-text">Course Not Selected</p>
                                                </td>
                                                <td id="courseType" class="text-muted"></td>
                                                <td id="coursePrice" class="text-muted">$5000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="primary-btn-one me-2 rounded-0">Connect Us</a>
                                    <a href="#" class="primary-btn-one rounded-0">Register</a>
                                </div>
                            </div>
                        </div>
                    </form> --}}

                    <div class="mt-3">

                        <div class="card border-0 rounded-0 shadow-none" style="background-color: #eaf6f5">
                            <div class="card-body">
                                <div class="d-flex justify-content-center flex-column text-center p-5 px-3">
                                    <h6 class="text-center pb-4" style="color: #00a3af">
                                        Need more information?
                                    </h6>
                                    <a href="javascript:;" class="btn bg-white rounded-pill btn w-100">Connect With Us</a>
                                    <p class="pt-3">
                                        <i class="fa-solid fa-phone"></i> {{ optional($setting)->primary_phone }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- ========================== iiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii  --}}


    <section>
        <div class="container mb-5">
            <div class="row align-items-center" style="background-color: #eaf6f5">

                <div class="col-lg-6">
                    <div class="row p-2 py-3" style="background-color: #eaf6f5">

                        @php
                            $courseSections = App\Models\CourseSection::orderBy('name', 'ASC')
                                ->limit(8)
                                ->latest()
                                ->get();
                        @endphp

                        <div class="col-lg-5">
                            <select class="form-select bg-white rounded-0" name="course_section_id"
                                aria-label="Default select example">
                                <option selected>Course Type</option>

                                @foreach ($courseSections as $key => $courseSection)
                                    <option value="{{ $courseSection->id }}">{{ $courseSection->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-5">

                            <select class="form-select bg-white rounded-0" name="course_id"
                                aria-label="Default select example" onchange="getCourses(this)">

                                <option>Select Category</option>

                            </select>
                        </div>

                    </div>
                </div>


            </div>
            <!-- All Courses Table -->
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="table-responsive" id="service_course_table">
                        @include('frontend.pages.service.partials.course_table')
                    </div>
                </div>
            </div>
        </div>


    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
        $(document).ready(function() {
            // When course section selection changes
            $('select[name="course_section_id"]').on('change', function() {
                var course_section_id = $(this).val();
                if (course_section_id) {
                    $.ajax({
                        url: "{{ url('/category/ajax') }}/" + course_section_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            // Clear previous options
                            $('select[name="course_id"]').empty();

                            // Append new options
                            $.each(data, function(key, value) {
                                $('select[name="course_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option>'
                                );
                            });
                        },
                        error: function(xhr, status, error) {
                            console.error('Error fetching categories:', error);
                            alert('Error fetching categories. Please try again.');
                        }
                    });
                } else {
                    alert('No course section selected');
                }
            });

        });


        function getCourses(selectElement) {
            var course_category_id = $(selectElement).val();
            var courseTable = $('#service_course_table');

            if (course_category_id) {
                $.ajax({
                    url: "{{ url('/course/ajax') }}",
                    type: "GET",
                    dataType: "json",
                    data: {
                        course_category_id: course_category_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data.hasOwnProperty('error')) {
                            alert(data.error);
                        } else {
                            // Clear previous table row data
                            courseTable.empty();

                            courseTable.html(data.table_view);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                        alert('Error: Unable to reach the server. Please try again.');
                    }
                });
            } else {
                alert('No course category selected');
            }
        }


        function getCoursesOptions(selectElement) {
            var course_category_id = $(selectElement).val();
            var courseTable = $('#service_course_table');

            if (course_category_id) {
                $.ajax({
                    url: "{{ url('/course/ajax') }}",
                    type: "GET",
                    dataType: "json",
                    data: {
                        course_category_id: course_category_id
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data.hasOwnProperty('error')) {
                            alert(data.error);
                        } else {
                            // Clear previous table row data
                            courseTable.empty();

                            courseTable.html(data.table_view);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                        alert('Error: Unable to reach the server. Please try again.');
                    }
                });
            } else {
                alert('No course category selected');
            }
        }
    </script>
@endsection
