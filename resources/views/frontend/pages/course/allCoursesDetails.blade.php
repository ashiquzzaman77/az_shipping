@extends('frontend.master')
@section('content')
    <style>
        .accordion-item {
            display: none;
        }

        .course_details-img {
            height: 400px;
            width: 600px;
            object-fit: cover;
        }

        @media only screen and (max-width: 479px) {
            .course_details-img {
                height: 100%;
                width: 100%;
                object-fit: cover;
            }
        }
    </style>
    <style>
        .form-check-input {
            width: 50px;
            height: 25px;
            cursor: pointer;
        }

        .form-check-input:checked {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .form-check-input:checked:focus {
            box-shadow: none;
        }

        .form-switch .form-check-input {
            width: 3em;
        }

        .form-switch .form-check-input:focus {
            box-shadow: none;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('frontend/css/main-style.css') }}">

    <section class="showcase">
        <img src="{{ !empty($coursedetail->course_banner_image) ? url('storage/course/' . $coursedetail->course_banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($coursedetail->name) }}"
            alt="Picture" />
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 px-0 sticky-top-menu d-none">
                    <div class="card p-0 rounded-0 shadow-sm border-0 menu-card">
                        <div class="card-body p-0 rounded-0 py-3">
                            <ul class="ps-0 details-menus mb-0" style="list-style-type: none">
                                <li class="pe-4">
                                    <a href="#overview"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Overview</a>
                                </li>
                                <li class="pe-4">
                                    <a href="#curriculum"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Course
                                        Curriculum</a>
                                </li>
                                <li class="pe-4">
                                    <a href="#schedule"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Course
                                        Schedule</a>
                                </li>
                                <li class="pe-4">
                                    <a href="#projects"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Course
                                        Projects</a>
                                </li>
                                <li class="pe-4">
                                    <a href="#related"
                                        class="text-decoration-none text-uppercase fw-bold primary-text-color">Related
                                        Courses</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 px-0">
                    <div>
                        <div id="overview">
                            <div class="row py-5 gx-5 px-3 px-lg-0 align-items-center">

                                <div class="col-lg-5">
                                    <div class="">

                                        {{-- <h6 class="text-danger fw-bold text-lg-start text-center">
                                            {{ $coursedetail->badge }}
                                        </h6> --}}

                                        <h2 name="course_id" class="fw-bold text-lg-start text-center main-color">
                                            {{ $coursedetail->name }}
                                        </h2>

                                        {{-- <h2 name="course_section_id" value="{{ old('course_section_id', $coursedetail->course_section_id) }}" class="fw-bold text-lg-start text-center main-color">
                                            {{ $coursedetail->course_section_id }}
                                        </h2>

                                        <h2 name="course_category_id" class="fw-bold text-lg-start text-center main-color">
                                            {{ $coursedetail->course_category_id }}
                                        </h2> --}}

                                        @if (!empty($coursedetail->short_descp))
                                            <p class="text-justify">
                                                {!! $coursedetail->short_descp !!}
                                            </p>
                                        @endif

                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card rounded-4 mx-3 mx-lg-0 mb-2 mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <p class="mb-0">Duration</p>
                                                            <h3 class="fw-bold pt-2 number-font main-color duration">
                                                                {{ $coursedetail->course_duration }}
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card rounded-4 mx-3 mx-lg-0 mb-2 mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <p class="mb-0">Lectures</p>
                                                            <h3 class="fw-bold pt-2 number-font main-color">
                                                                {{ $coursedetail->lecture }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card rounded-4 mx-3 mx-lg-0 mb-2 mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <p class="mb-0">Projects</p>
                                                            <h3 class="fw-bold pt-2 number-font main-color">
                                                                {{ $coursedetail->project }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-3">
                                                <div class="card rounded-4 mx-3 mx-lg-0 mb-2 mb-lg-0">
                                                    <div class="card-body">
                                                        <div class="text-center">
                                                            <p class="mb-0">Enrolled</p>
                                                            <h3 class="fw-bold pt-2 number-font main-color">
                                                                {{ $coursedetail->total_student }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>



                                        {{-- @if (!empty($coursedetail->total_student))
                                            <p class="text-success text-lg-start text-center">
                                                {{ $coursedetail->total_student }} Students
                                            </p>
                                        @endif --}}



                                        {{-- <div class="d-flex mb-lg-0 mb-4 mt-4">

                                            <a href="{{ route('course.registration') }}"
                                                class="primary-btn-one me-3">Admission</a>

                                            <a href="" class="primary-btn-one me-3">Course Curriculum</a>

                                            @if (!empty($coursedetail->total_student))
                                                <a href="javascript:;" class="primary-btn-one">{{ $coursedetail->total_student }}
                                                    Students</a>
                                            @endif

                                        </div> --}}

                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="text-end pt-lg-0 pt-3">
                                        <img class="img-fluid rounded-3 course_details-img"
                                            src="{{ !empty($coursedetail->thumbnail_image) ? url('storage/course/' . $coursedetail->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode($coursedetail->name) }}"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-lg-8 py-5 pb-lg-5 pb-0">
                                    @if (!empty($coursedetail->overview))
                                        <div class="">
                                            <h5 class="primary-text-color fw-bold">
                                                Course Overview
                                            </h5>
                                            <p class="pt-3" style="text-align: justify">
                                                {!! $coursedetail->overview !!}
                                            </p>
                                        </div>
                                    @endif
                                    <!-- Course Curriculum -->
                                    @if ($courseCurriculams->isNotEmpty())
                                        <div id="curriculum" class="py-3">
                                            <h5 class="primary-text-color fw-bold pb-lg-0 pb-3">
                                                Course Curriculum
                                            </h5>
                                            <div>
                                                <div class="accordion" id="accordionExample">
                                                    @forelse ($courseCurriculams as $index => $courseCurriculam)
                                                        <div
                                                            class="accordion-item border-0 shadow-sm accordion-item-{{ $index }}">
                                                            <h2 class="accordion-header mb-1">
                                                                <button
                                                                    class="accordion-button border-0 shadow-sm collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseOne{{ $courseCurriculam->id }}"
                                                                    aria-expanded="true"
                                                                    aria-controls="collapseOne{{ $courseCurriculam->id }}">
                                                                    <i class="fa-solid fa-arrow-right-long pe-3"></i>
                                                                    {{ $courseCurriculam->title }}
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne{{ $courseCurriculam->id }}"
                                                                class="accordion-collapse collapse"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="mb-3 text-center">
                                                                        <small
                                                                            class="bg-warning-light p-2 rounded-2 badges">
                                                                            <i
                                                                                class="fa-solid fa-tv primary-text-color"></i>
                                                                            {{ $courseCurriculam->class_number }} live
                                                                            class
                                                                        </small>
                                                                    </div>
                                                                    <p>
                                                                        {!! $courseCurriculam->description !!}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @empty
                                                        <p>No Course Curriculum Available</p>
                                                    @endforelse
                                                </div>
                                                <div class="d-flex justify-content-center align-items-center mt-4">
                                                    <button class="primary-btn-one" id="loadMore">See More <i
                                                            class="fa-solid fa-arrow-down-long"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif


                                    <!-- Course Schedule -->
                                    @if ($courseSchedules->isNotEmpty() || $courseOutlines->isNotEmpty())
                                        <div id="schedule" class="py-3">
                                            @if ($courseSchedules->isNotEmpty())
                                                <h5 class="primary-text-color fw-bold">
                                                    Course Schedule
                                                </h5>
                                                {{-- <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit.
                                            </p> --}}


                                                @forelse ($courseSchedules as $courseSchedule)
                                                    <div class="table-responsive">
                                                        <table class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th style="background-color: #eee;color: black;font-size: 15px;"
                                                                        scope="col">
                                                                        Venue
                                                                    </th>
                                                                    <th style="background-color: #eee;color: black;font-size: 15px;"
                                                                        scope="col">
                                                                        Starting Date
                                                                    </th>
                                                                    <th style="background-color: #eee;color: black;font-size: 15px;"
                                                                        scope="col">
                                                                        Duration
                                                                    </th>
                                                                    <th style="background-color: #eee;color: black;font-size: 15px;"
                                                                        scope="col">
                                                                        Fees
                                                                    </th>
                                                                    {{-- <th class="text-center"
                                                                    style="background-color: #eee;color: black;font-size: 15px;"
                                                                    scope="col">
                                                                    Join Now
                                                                </th> --}}
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>{{ $courseSchedule->venue }}</td>
                                                                    <td>{{ $courseSchedule->starting_date }}</td>
                                                                    <td>{{ $courseSchedule->duration }}</td>
                                                                    <td>{{ $courseSchedule->fees }} Tk</td>
                                                                    {{-- <td class="text-center">
                                                                    <a href="" class=""><i
                                                                            class="fa-solid fa-eye text-muted"></i></a>
                                                                </td> --}}
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                @empty
                                                    <p>No course schedules found.</p>
                                                @endforelse
                                            @endif

                                            @if ($courseOutlines->isNotEmpty())
                                                <h5 class="primary-text-color fw-bold pt-3">
                                                    What Will You Learn In This Course?
                                                </h5>

                                                <div class="row gx-1">

                                                    @forelse ($courseOutlines as $courseOutline)
                                                        <div class="col-lg-6">
                                                            <div class="card p-0 mb-1 why-choses">
                                                                <div class="card-body p-0">
                                                                    <p class="mb-0 p-3">
                                                                        <img src="https://cdn.ostad.app/public/upload/2023-10-29T15-06-39.968Z-checkbox-circle-line.svg"
                                                                            alt="" />
                                                                        {{ $courseOutline->title }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    @empty
                                                        <p>Course Outline Not Avaiable</p>
                                                    @endforelse

                                                </div>
                                            @endif

                                        </div>
                                    @endif
                                    <!-- Course Projects -->
                                    @if ($courseProjects->isNotEmpty())
                                        <div id="projects" class="py-3">
                                            <h3 class="primary-text-color fw-bold">
                                                Course Projects
                                            </h3>

                                            {{-- <p class="pt-2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            </p> --}}

                                            <!-- Project Slide -->
                                            <div class="slider-project pt-3">
                                                @forelse ($courseProjects as $courseProject)
                                                    <div class="slider-items">
                                                        <div class="project-box">
                                                            <div class="box p-2">
                                                                <img class="img-fluid"
                                                                    src="{{ !empty($courseProject->image) ? url('storage/course_project/' . $courseProject->image) : 'https://ui-avatars.com/api/?name=' . urlencode($courseProject->title) }}"
                                                                    alt="" />
                                                                <div class="box-content">
                                                                    <h3 class="title">{{ $courseProject->title }}</h3>
                                                                    <span
                                                                        class="post">{{ $courseProject->short_description }}</span>
                                                                    <ul class="icon">
                                                                        <li>
                                                                            <a href="#"><i
                                                                                    class="fa fa-search"></i></a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#"><i
                                                                                    class="fa fa-link"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <p>No Course Project Avaiable</p>
                                                @endforelse

                                                <!-- Add more slider items as needed -->
                                            </div>
                                        </div>
                                    @endif


                                </div>

                                <div class="col-lg-4 rounded-5 p-4 mt-2 mt-lg-5">
                                    <div class="p-5 py-3 rounded-5" style="background-color: #eee">
                                        <div class="py-4">
                                            <h4 class="fw-bold primary-text-color">
                                                Admission Is Going On
                                            </h4>
                                            <p>
                                                Enroll now to any of our Offline (On- Campus) or
                                                Online (Live Class) courses as per your suitable
                                                time.
                                            </p>
                                        </div>
                                        <div>
                                            <!-- Switch Toggle Button -->
                                            <div class="d-flex align-items-center justify-content-center mb-3">
                                                <!-- Offline Label -->
                                                <label class="form-check-label me-1" for="toggleSwitch"
                                                    id="offlineLabel">Offline</label>
                                                <!-- Switch Toggle -->
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="toggleSwitch">
                                                </div>
                                                <!-- Online Label -->
                                                <label class="form-check-label ms-1" for="toggleSwitch"
                                                    id="onlineLabel">Online</label>
                                            </div>
                                            <!-- Offline Course Fee Section -->
                                            <div id="offlineSection" class="card join_offline">
                                                <div class="card-body">
                                                    <h5>Course Fee Offline</h5>
                                                    <h4 class="fw-bold py-2">BDT
                                                        {{ number_format($coursedetail->price, 2) }}</h4>
                                                    <a type="submit" class="primary-btn-one add_to_cart_price"
                                                        data-course_id="{{ $coursedetail->id }}"
                                                        data-course_section_id="{{ $coursedetail->course_section_id }}"
                                                        data-course_category_id="{{ $coursedetail->course_category_id }}"
                                                        data-course_type="{{ $coursedetail->course_type }}"
                                                        data-course_amount="{{ $coursedetail->price }}">Enroll Now
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Online Course Fee Section (Initially Hidden) -->
                                            <div id="onlineSection" class="card join_offline d-none">
                                                <div class="card-body">
                                                    <h5>Course Fee Online</h5>
                                                    <h4 class="fw-bold py-2">BDT
                                                        {{ number_format($coursedetail->online_price, 2) }}</h4>
                                                    @if ($coursedetail->online_price == null)
                                                    @else
                                                        <a type="submit" class="primary-btn-one add_to_cart_online_price"
                                                            data-course_id="{{ $coursedetail->id }}"
                                                            data-course_section_id="{{ $coursedetail->course_section_id }}"
                                                            data-course_category_id="{{ $coursedetail->course_category_id }}"
                                                            data-course_type="{{ $coursedetail->course_type }}"
                                                            data-course_amount="{{ $coursedetail->online_price }}">Enroll
                                                            Now
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h5>Need more information?</h5>
                                            <a type="submit" href="{{ route('contact') }}"
                                                class="primary-btn-one add_to_cart_price w-100 rounded-0"
                                                data-course_id="5" data-course_section_id="1" data-course_category_id="2"
                                                data-course_type="offline" data-course_amount="15000">Contact Us
                                            </a>
                                            <div class="pt-3">
                                                <a href="">
                                                    <div class="d-flex align-items-center">
                                                        <small><i class="fa-solid fa-headphones-simple pe-3"></i></small>
                                                        <small>{{ optional($setting)->primary_phone ?? '(+88) 01958025050' }}</small>
                                                    </div>
                                                </a>
                                            </div>
                                            <div>
                                                <a href="">
                                                    <div class="d-flex align-items-center">
                                                        <small><i class="fa-regular fa-envelope pe-3"></i></small>
                                                        <small>{{ optional($setting)->support_email ?? 'inquiry@ngenitltd.com' }}</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if ($relatedcourses->isNotEmpty())
                                    <div class="col-lg-12">
                                        <!-- Related Courses -->
                                        <div id="related" class="py-3">
                                            <h3 class="primary-text-color fw-bold pb-3 pb-lg-0">
                                                Related Courses
                                            </h3>
                                            {{-- <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit.
                                        </p> --}}
                                            <!-- Releted Course slider -->
                                            <div class="slider-related-courses">
                                                @forelse ($relatedcourses as $courses)
                                                    <div class="releted-course-items">
                                                        <div class="card border-0 bg-light shadow-sm rounded-2">
                                                            <div class="card-header p-0 bg-transparent">

                                                                <div>
                                                                    <img class="rounded-2 img-fluid course-images"
                                                                        src="{{ asset(!empty($courses->thumbnail_image) ? url('storage/course/' . $courses->thumbnail_image) : url('images/no-shop-imge.png')) }}"
                                                                        alt="">
                                                                </div>

                                                                <div class="p-2 text-center">

                                                                    <small class="pe-3">
                                                                        <span class="cource-badge rounded-2">
                                                                            <i class="fa-solid fa-graduation-cap"></i>
                                                                            Batch 2
                                                                        </span>
                                                                    </small>
                                                                    <small class="pe-3">
                                                                        <span class="cource-badge rounded-2">
                                                                            {{-- <i class="fa-solid fa-chair pe-2" aria-hidden="true"></i> --}}
                                                                            <i class="fa-solid fa-user"></i>
                                                                            {{ $courses->available_seats }}
                                                                        </span>
                                                                    </small>
                                                                    @php
                                                                        // Convert registration end date to Unix timestamp
                                                                        $registrationEndTimestamp = strtotime(
                                                                            $courses->registration_end_date,
                                                                        );
                                                                        // Current time
                                                                        $currentTime = time();
                                                                        // Calculate remaining time in seconds
                                                                        $remainingTime =
                                                                            $registrationEndTimestamp - $currentTime;
                                                                        // Convert remaining time to days
                                                                        $remainingDays = floor(
                                                                            $remainingTime / (60 * 60 * 24),
                                                                        );
                                                                    @endphp

                                                                    <small class="pe-3">
                                                                        <span class="course-badge rounded-2">
                                                                            {{-- <i class="far fa-clock " aria-hidden="true"></i> --}}
                                                                            <i class="fa-solid fa-clock"></i>
                                                                            {{ $remainingDays }} Days
                                                                        </span>
                                                                    </small>

                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="course-title">
                                                                    <h6 class="mb-0">
                                                                        {{ $courses->name }}
                                                                    </h6>
                                                                </div>
                                                                <div class="pt-2">
                                                                    <a href="{{ url('course' . '/' . $courses->id . '/' . $courses->slug) }}"
                                                                        class="primary-btn-one w-100 rounded-0 rounded-0">See
                                                                        Details
                                                                        <i class="fa-solid fa-arrow-right ps-2"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <p>No Course Avaiable</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fixed-bottom px-0" id="bottomSection">
        <div class="card rounded-0 border-0" style="background-color: #0a1d5b">
            <div class="card-header border-0 bg-transparent pb-0 pt-2 pe-3 text-end"
                style="margin-bottom: -30px; position: relative; z-index: 5">
                <button id="closeButton" class="p-0 border-0 bg-transparent fs-4">
                    <i class="fa-solid fa-xmark text-white"></i>
                </button>
            </div>

            {{-- <form method="POST" action="{{ route('course.enroll', $coursedetail->id) }}"> --}}

            <div class="card-body p-1">
                <div class="container px-0">
                    <div class="row align-items-center">
                        <div class="col-lg-5">

                            <p class="mb-0">
                                <span class="fw-bold text-white">Call This Number:</span>
                                <span class="text-white">{{ optional($setting)->primary_phone }}</span>
                            </p>
                            <div class="d-flex align-items-center">
                                <h2 class="pe-3 fw-bold text-white mb-0">BDT
                                    {{ number_format($coursedetail->price, 2) }}</h2>
                                {{-- <h6>
                                    <a href="" class="text-decoration-none text-white"><i
                                            class="fa-solid fa-ticket pe-2"></i>Promo Code</a>
                                </h6> --}}
                            </div>
                        </div>

                        <div class="col-lg-7">
                            <div class="text-end">

                                <a type="submit" data-course_section_id="{{ $coursedetail->course_section_id }}"
                                    data-course_category_id="{{ $coursedetail->course_category_id }}"
                                    data-course_type="{{ $coursedetail->course_type }}"
                                    data-course_type="{{ $coursedetail->course_type }}"
                                    data-course_amount="{{ $coursedetail->price }}"
                                    data-course_id="{{ $coursedetail->id }}"
                                    class="add_to_cart_price primary-btn-one  ps-3 text-center"
                                    style="border: 1px solid white; color: white !important">Enroll Running
                                    Batch</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- </form> --}}

        </div>
    </section>
    @push('scripts')
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> --}}
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
        <script>
            document
                .getElementById("closeButton")
                .addEventListener("click", function() {
                    document.getElementById("bottomSection").style.display = "none";
                    setTimeout(function() {
                        document.getElementById("bottomSection").style.display =
                            "block"; // or "flex", "inline-block", etc., based on your layout needs
                    }, 15000); // 3000 milliseconds = 3 seconds
                });
        </script>
        <script>
            document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
                anchor.addEventListener("click", function(e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute("href")).scrollIntoView({
                        behavior: "smooth",
                    });
                });
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const accordionItems = document.querySelectorAll('.accordion-item');
                const loadMoreButton = document.getElementById('loadMore');
                let visibleItems = 8;

                function showAccordionItems(count) {
                    accordionItems.forEach((item, index) => {
                        if (index < count) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });

                    // Change button text based on the visible items
                    if (count >= accordionItems.length) {
                        loadMoreButton.textContent = 'See Less';
                    } else {
                        loadMoreButton.textContent = 'See More';
                    }
                }

                showAccordionItems(visibleItems);

                loadMoreButton.addEventListener('click', function() {
                    if (loadMoreButton.textContent === 'See More') {
                        visibleItems += 4;
                        if (visibleItems >= accordionItems.length) {
                            visibleItems = accordionItems.length;
                        }
                        showAccordionItems(visibleItems);
                    } else {
                        visibleItems = 8;
                        showAccordionItems(visibleItems);
                    }
                });
            });
        </script>
        <script>
            document.getElementById('toggleSwitch').addEventListener('change', function() {
                const offlineSection = document.getElementById('offlineSection');
                const onlineSection = document.getElementById('onlineSection');

                // Toggle visibility of offline and online sections
                offlineSection.classList.toggle('d-none');
                onlineSection.classList.toggle('d-none');
            });
        </script>
    @endpush
@endsection
