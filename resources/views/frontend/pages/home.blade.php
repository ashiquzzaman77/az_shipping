@extends('frontend.master')
@section('content')

    <!-- Banner Section -->
    @if (
        !empty(optional($homePage)->banner_one_image) ||
            !empty(optional($homePage)->banner_two_image) ||
            !empty(optional($homePage)->banner_three_image))
        <section>
            <div class="slider">
                @if (!empty(optional($homePage)->banner_one_image))
                    <div class="slick-slide text-right banenr-main">
                        <img src="{{ asset('storage/homepage/' . optional($homePage)->banner_one_image) }}"
                            alt="Banner One Image" class="img-fluid">
                    </div>
                    <!-- slick-slide -->
                @endif
                @if (!empty(optional($homePage)->banner_two_image))
                    <div class="slick-slide text-right banenr-main">
                        <img src="{{ asset('storage/homepage/' . optional($homePage)->banner_two_image) }}"
                            alt="Banner Two Image" class="img-fluid">
                    </div>
                    <!-- slick-slide -->
                @endif
                @if (!empty(optional($homePage)->banner_three_image))
                    <div class="slick-slide text-right banenr-main">
                        <img src="{{ asset('storage/homepage/' . optional($homePage)->banner_three_image) }}"
                            alt="Banner Three Image" class="img-fluid">
                    </div>
                    <!-- slick-slide -->
                @endif
            </div>
        </section>
    @endif

    <!-- Filter Section -->
    <section class="filter_section">
        <div class="container">

            <form action="{{ route('search.course') }}" method="post">
                @csrf
                <div class="row align-items-center">

                    <div class="col-lg-2">
                        <select class="form-select home-select mb-lg-0 mb-2 @error('course_type') is-invalid @enderror"
                            name="course_type" autocomplete="off" aria-label="Course Type">
                            <option selected disabled>Course Type</option>
                            <option value="offline">Offline</option>
                            <option value="online">Online</option>
                        </select>
                        @error('course_type')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-lg-2">
                        <select
                            class="form-select home-select mb-lg-0 mb-2 @error('course_section_id') is-invalid @enderror"
                            name="course_section_id" aria-label="Course Section">
                            <option selected disabled>Course Section</option>
                            @foreach ($courseSections as $courseSection)
                                <option value="{{ $courseSection->id }}">{{ $courseSection->name }}</option>
                            @endforeach
                        </select>
                        @error('course_section_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-lg-2">
                        <select
                            class="form-select home-select mb-lg-0 mb-2 @error('course_category_id') is-invalid @enderror"
                            name="course_category_id" aria-label="Selected Category">
                            <option selected disabled>Selected Category</option>
                            @foreach ($courseCategorys as $courseCategory)
                                <option value="{{ $courseCategory->id }}">{{ $courseCategory->name }}</option>
                            @endforeach
                        </select>
                        @error('course_category_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-lg-2">
                        <select class="form-select home-select mb-lg-0 mb-2 @error('month') is-invalid @enderror"
                            name="month" aria-label="Month">
                            <option selected disabled>Month</option>
                            <option value="january">January</option>
                            <option value="february">February</option>
                            <option value="march">March</option>
                            <option value="april">April</option>
                            <option value="may">May</option>
                            <option value="june">June</option>
                            <option value="july">July</option>
                            <option value="august">August</option>
                            <option value="september">September</option>
                            <option value="october">October</option>
                            <option value="november">November</option>
                            <option value="december">December</option>
                        </select>
                        @error('month')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-lg-2">
                        <select class="form-select home-select mb-lg-0 mb-2 @error('year') is-invalid @enderror"
                            name="year" aria-label="Year">
                            <option selected disabled>Year</option>
                            <option value="2024">2024</option>
                            {{-- <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option> --}}
                        </select>
                        @error('year')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-lg-2 text-center">
                        <button type="submit" class="primary-btn-one"><i class="fa-solid fa-magnifying-glass pe-2"></i>
                            Search</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
    
    <!-- Row Two Section -->
    <section>
        <div class="container">
            <div class="row py-5 align-items-center">
                <div class="col-lg-6 bio-area">
                    <h2 class="text-center text-lg-start special-text">
                        {{ optional($homePage)->row_two_title }}
                    </h2>

                    <p class="text-justify py-3">
                        {!! optional($homePage)->row_two_description !!}
                    </p>

                    <a href="{{ optional($homePage)->row_two_button_url }}"
                        class="primary-btn-one">{{ optional($homePage)->row_two_button_name }}</a>

                </div>
                <div class="col-lg-6">

                    @if (!empty(optional($homePage)->row_two_image))
                        <img class="img-fluid w-100"
                            src="{{ asset('storage/homepage/' . optional($homePage)->row_two_image) }}" alt="" />
                    @endif

                </div>
            </div>
        </div>
    </section>

    {{-- News Section Added Course  --}}
    <section>
        <div class="container">
            <div class="row pb-5">

                @php
                    $sections = App\Models\CourseSection::withCount('coursesCount')->latest()->get();
                @endphp

                <div class="col-lg-12">
                    {{-- <div class="col-lg-12" style="background-color: #eeeeee;padding: 15px;"> --}}

                    <div id="sync2" class="owl-carousel owl-theme mb-3 py-3">

                        @foreach ($sections as $section)
                            @php
                                $totalCourses = App\Models\Course::where('course_section_id', $section->id)->count();
                            @endphp
                            <div class="item">
                                <div>
                                    <div class="card courses-cat-slide">
                                        <div class="card-body border-0 shadow-sm p-2">
                                            <p class="mb-0 course_title p-3">
                                                {{ $section->name }}
                                            </p>
                                            {{-- <div>
                                                <small class="">• {{ $totalCourses }} Course</small>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div id="sync1" class="owl-carousel owl-theme">

                        @foreach ($sections as $section)
                            @php
                                // Fetch courses for the given section
                                $sectionWiseCourses = App\Models\Course::where('course_section_id', $section->id)
                                    ->limit(4)
                                    ->get();
                            @endphp

                            <div class="item">
                                <div class="row gx-3">

                                    @foreach ($sectionWiseCourses as $sectionWiseCourse)
                                        <div class="col-lg-3 mb-lg-0 mb-3">

                                            <div class="card border-0 bg-light shadow-sm rounded-2">
                                                <div class="card-header p-0 bg-transparent">

                                                    <div>
                                                        <img class="rounded-2 img-fluid course-images"
                                                            src="{{ asset(!empty($sectionWiseCourse->thumbnail_image) ? url('storage/course/' . $sectionWiseCourse->thumbnail_image) : url('images/no-shop-imge.png')) }}"
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
                                                                {{ $sectionWiseCourse->available_seats }}
                                                            </span>
                                                        </small>

                                                        @php
                                                            $registrationEndTimestamp = strtotime(
                                                                $sectionWiseCourse->registration_end_date,
                                                            );
                                                            $currentTime = time();
                                                            $remainingTime = $registrationEndTimestamp - $currentTime;
                                                            $remainingDays = floor($remainingTime / (60 * 60 * 24));
                                                        @endphp

                                                        @if ($remainingDays > 0)
                                                            <small class="pe-3">
                                                                <span class="course-badge rounded-2">
                                                                    <i class="fa-solid fa-clock"></i>
                                                                    {{ $remainingDays }} Days
                                                                </span>
                                                            </small>
                                                        @endif


                                                    </div>

                                                </div>
                                                <div class="card-body">
                                                    <div class="course-title">
                                                        <h6 class="mb-0">
                                                            {{ $sectionWiseCourse->name }}
                                                        </h6>
                                                    </div>
                                                    <div class="pt-2">
                                                        <a href="{{ url('course' . '/' . $sectionWiseCourse->id . '/' . $sectionWiseCourse->slug) }}"
                                                            class="primary-btn-one w-100 rounded-0">See Details
                                                            <i class="fa-solid fa-arrow-right ps-2"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach



                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Row Three Services Section -->
    <section class="service-bg"
        style="background-image: url('{{ asset('storage/homepage/' . optional($homePage)->row_three_background_image) }}');">
        <div class="container">
            <div class="row py-5">
                <div class="text-center px-5">
                    <h3 class="section-title text-white">{{ optional($homePage)->row_three_title }}</h3>
                    <div class="divider-extra"></div>
                    <p class="text-white py-0 px-0 px-lg-5 py-lg-3">
                        {!! optional($homePage)->row_three_description !!}
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="service-slick-carousel">

                        <!-- Service One -->
                        <div class="card service-box-card border-0 rounded-0 service-one">
                            <div class="card-body service-card">
                                <div class="text-center">
                                    <div class="py-3">
                                        <h4 class="text-white">{{ optional($homePage)->row_three_column_one_title }}</h4>
                                        <div class="divider"></div>
                                    </div>
                                    <p class="text-white service_home_para">
                                        {!! optional($homePage)->row_three_column_one_description !!}
                                    </p>
                                    <div class="text-center">
                                        <div class="py-3 learn-more-btn">
                                            {{-- <a href="{{ optional($homePage)->row_three_column_one_url }}"
                                                class="">Learn
                                                More</a> --}}
                                            <br>
                                            <a href="{{ optional($homePage)->row_three_column_one_button_url }}"
                                                class="primary-btn-one">{{ optional($homePage)->row_three_column_one_button_name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Service Two -->
                        <div class="card service-box-card border-0 rounded-0 service-two">
                            <div class="card-body service-card">
                                <div class="text-center">
                                    <div class="py-3">
                                        <h4 class="text-white">{{ optional($homePage)->row_three_column_two_title }}</h4>
                                        <div class="divider"></div>
                                    </div>
                                    <p class="text-white">
                                        {!! optional($homePage)->row_three_column_two_description !!}
                                    </p>
                                    <div class="text-center">
                                        <div class="py-3 learn-more-btn">
                                            {{-- <a href="{{ optional($homePage)->row_three_column_two_url }}"
                                                class="">Learn
                                                More</a> --}}
                                            <br>
                                            <a href="{{ optional($homePage)->row_three_column_two_button_url }}"
                                                class="primary-btn-one">{{ optional($homePage)->row_three_column_two_button_name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Service Three -->
                        <div class="card service-box-card border-0 rounded-0 service-three">
                            <div class="card-body service-card">
                                <div class="text-center">
                                    <div class="py-3">
                                        <h4 class="text-white">{{ optional($homePage)->row_three_column_three_title }}
                                        </h4>
                                        <div class="divider"></div>
                                    </div>
                                    <p class="text-white">
                                        {!! optional($homePage)->row_three_column_three_description !!}
                                    </p>
                                    <div class="text-center">
                                        <div class="py-3 learn-more-btn">
                                            {{-- <a href="{{ optional($homePage)->row_three_column_three_url }}"
                                                class="">Learn
                                                More</a> --}}
                                            <br>
                                            <a href="{{ optional($homePage)->row_three_column_three_button_url }}"
                                                class="primary-btn-one">{{ optional($homePage)->row_three_column_three_button_name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Service Four -->
                        <div class="card service-box-card border-0 rounded-0 service-four">
                            <div class="card-body service-card">
                                <div class="text-center">
                                    <div class="py-3">
                                        <h4 class="text-white">{{ optional($homePage)->row_three_column_four_title }}</h4>
                                        <div class="divider"></div>
                                    </div>
                                    <p class="text-white">
                                        {!! optional($homePage)->row_three_column_four_description !!}
                                    </p>
                                    <div class="text-center">
                                        <div class="py-3 learn-more-btn">
                                            {{-- <a href="{{ optional($homePage)->row_three_column_four_url }}"
                                                class="">Learn
                                                More</a> --}}
                                            <br>
                                            <a href="{{ optional($homePage)->row_three_column_four_button_url }}"
                                                class="primary-btn-one">{{ optional($homePage)->row_three_column_four_button_name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Row Four Why Diffrent -->
    <section>
        <div class="container py-5 mt-3">
            <div class="row">
                <div class="text-center px-5">
                    <h3 class="section-title">{{ optional($homePage)->row_four_title }}</h3>
                    <div class="divider"></div>
                    <p class="text-muted py-3 px-5">
                        {{ optional($homePage)->row_four_header }}
                    </p>
                </div>
                <div class="col-lg-2 different_icon_column">
                    <a href="{{ optional($homePage)->row_four_column_one_url }}" style="text-decoration: none">
                        <div class="text-center p-3">

                            <div class="diffrent-icons text-center" style="background-color:transparent;">

                                @if (!empty(optional($homePage)->row_four_column_one_image))
                                    <img src="{{ asset('storage/homepage/' . optional($homePage)->row_four_column_one_image) }}"
                                        alt="" style="width: 50px;height: 50px;">
                                @else
                                    <img src="{{ asset('path/to/default/avatar/image.jpg') }}"
                                        style="width: 50px;height: 50px;" alt="">
                                @endif

                            </div>

                            <p class="pt-3 different_icon_description">
                                {{ optional($homePage)->row_four_column_one_description }}</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 different_icon_column">
                    <a href="{{ optional($homePage)->row_four_column_two_url }}" style="text-decoration: none">
                        <div class="text-center p-3">

                            <div class="diffrent-icons text-center" style="background-color:transparent;">
                                @if (!empty(optional($homePage)->row_four_column_two_image))
                                    <img src="{{ asset('storage/homepage/' . optional($homePage)->row_four_column_two_image) }}"
                                        alt="" style="width: 50px;height: 50px;">
                                @else
                                    <img src="{{ asset('path/to/default/avatar/image.jpg') }}"
                                        style="width: 50px;height: 50px;" alt="">
                                @endif
                            </div>

                            <p class="pt-3 different_icon_description">
                                {{ optional($homePage)->row_four_column_two_description }}</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 different_icon_column">
                    <a href="{{ optional($homePage)->row_four_column_three_url }}" style="text-decoration: none">
                        <div class="text-center p-3">

                            <div class="diffrent-icons text-center" style="background-color:transparent;">

                                @if (!empty(optional($homePage)->row_four_column_three_image))
                                    <img src="{{ asset('storage/homepage/' . optional($homePage)->row_four_column_three_image) }}"
                                        alt="" style="width: 50px; height: 50px;">
                                @else
                                    <img src="{{ asset('path/to/default/avatar/image.jpg') }}"
                                        style="width: 50px;height: 50px;" alt="">
                                @endif

                            </div>

                            <p class="pt-3 different_icon_description">
                                {{ optional($homePage)->row_four_column_three_description }}</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 different_icon_column">
                    <a href="{{ optional($homePage)->row_four_column_four_url }}" style="text-decoration: none">
                        <div class="text-center p-3">

                            <div class="diffrent-icons text-center" style="background-color:transparent;">

                                @if (!empty(optional($homePage)->row_four_column_four_image))
                                    <img src="{{ asset('storage/homepage/' . optional($homePage)->row_four_column_four_image) }}"
                                        alt="" style="width: 50px;height: 50px;">
                                @else
                                    <img src="{{ asset('path/to/default/avatar/image.jpg') }}"
                                        style="width: 50px; height: 50px;" alt="">
                                @endif

                            </div>

                            <p class="pt-3 different_icon_description">
                                {{ optional($homePage)->row_four_column_four_description }}</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 different_icon_column">
                    <a href="{{ optional($homePage)->row_four_column_five_url }}" style="text-decoration: none">
                        <div class="text-center p-3">

                            <div class="diffrent-icons text-center" style="background-color:transparent;">

                                @if (!empty(optional($homePage)->row_four_column_five_image))
                                    <img src="{{ asset('storage/homepage/' . optional($homePage)->row_four_column_five_image) }}"
                                        alt="" style="width: 50px; height: 50px;">
                                @else
                                    <img src="{{ asset('path/to/default/avatar/image.jpg') }}"
                                        style="width: 50px; height: 50px;" alt="">
                                @endif

                            </div>

                            <p class="pt-3 different_icon_description">
                                {{ optional($homePage)->row_four_column_five_description }}</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 different_icon_column">
                    <a href="{{ optional($homePage)->row_four_column_six_url }}" style="text-decoration: none">
                        <div class="text-center p-3">

                            <div class="diffrent-icons text-center" style="background-color:transparent;">

                                @if (!empty(optional($homePage)->row_four_column_six_image))
                                    <img src="{{ asset('storage/homepage/' . optional($homePage)->row_four_column_six_image) }}"
                                        alt="" style="width: 50px; height: 50px;">
                                @else
                                    <img src="{{ asset('path/to/default/avatar/image.jpg') }}"
                                        style="width: 50px; height: 50px;" alt="">
                                @endif

                            </div>

                            <p class="pt-3 different_icon_description">
                                {{ optional($homePage)->row_four_column_six_description }}</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-12 text-center py-5">
                    <a href="{{ optional($homePage)->row_four_button_url }}"
                        class="primary-btn-one">{{ optional($homePage)->row_four_button_name }}</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Row Five Course  --}}
    <section>
        <div class="container">

            <div class="text-center px-5">
                <h3 class="section-title">{{ optional($homePage)->row_five_title }}</h3>
                <div class="divider"></div>
                <p class="py-3 px-5">
                    {{ optional($homePage)->row_five_header }}
                </p>
            </div>

            {{-- <div class="row mb-5">
                    <div class="col-lg-4">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <div class="row align-items-center p-3">

                                    <div class="col-lg-5">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/course/' . optional($homePage->courseOneHomePage)->thumbnail_image) }}"
                                            alt="" />
                                    </div>

                                    <div class="col-lg-7">
                                        <div>

                                            <h6 class="fw-bold" style="color: #001430">
                                                {{ optional($homePage->courseOneHomePage)->name }}
                                            </h6>

                                            <p>
                                                {{ optional($homePage->courseOneHomePage)->short_descp }}
                                            </p>
                                            <button class="primary-btn-one w-100 rounded-0">
                                                Learn More
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="row align-items-center p-3">

                                <div class="col-lg-5">
                                    <img class="img-fluid"
                                        src="{{ asset('storage/course/' . optional($homePage->courseTwoHomePage)->thumbnail_image) }}"
                                        alt="" />
                                </div>

                                <div class="col-lg-7">
                                    <div>

                                        <h6 class="fw-bold" style="color: #001430">
                                            {{ optional($homePage->courseTwoHomePage)->name }}
                                        </h6>

                                        <p>
                                            {{ optional($homePage->courseTwoHomePage)->short_descp }}
                                        </p>
                                        <button class="primary-btn-one w-100 rounded-0">
                                            Learn More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <div class="row align-items-center p-3">

                                <div class="col-lg-5">
                                    <img class="img-fluid"
                                        src="{{ asset('storage/course/' . optional($homePage->courseThreeHomePage)->thumbnail_image) }}"
                                        alt="" />
                                </div>

                                <div class="col-lg-7">
                                    <div>

                                        <h6 class="fw-bold" style="color: #001430">
                                            {{ optional($homePage->courseThreeHomePage)->name }}
                                        </h6>

                                        <p>
                                            {{ optional($homePage->courseThreeHomePage)->short_descp }}
                                        </p>
                                        <button class="primary-btn-one w-100 rounded-0">
                                            Learn More
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
            <div class="row mb-5 pb-2">

                <div class="col-lg-4">
                    <div class="card border-0" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                        <div class="card-body course-description-card">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="course-details-img">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/course/' . optional($homePage->courseOneHomePage)->thumbnail_image) }}"
                                            alt="Course Image">
                                    </div>
                                    <div class="pt-3">
                                        <h6 class="fw-bold" style="color: #001430; height: 45px;">
                                            {{ optional($homePage->courseOneHomePage)->name }}
                                        </h6>

                                        <p>
                                            {!! optional($homePage->courseOneHomePage)->short_descp !!}
                                        </p>
                                        <a href="{{ url('course' . '/' . optional($homePage->courseOneHomePage)->id . '/' . optional($homePage->courseOneHomePage)->slug) }}"
                                            class="primary-btn-one w-100 rounded-0">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                        <div class="card-body course-description-card">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="course-details-img">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/course/' . optional($homePage->courseTwoHomePage)->thumbnail_image) }}"
                                            alt="" />
                                    </div>
                                    <div class="pt-3">
                                        <h6 class="fw-bold" style="color: #001430; height: 45px;">
                                            {{ optional($homePage->courseTwoHomePage)->name }}
                                        </h6>

                                        <p>
                                            {!! optional($homePage->courseTwoHomePage)->short_descp !!}
                                        </p>
                                        <a href="{{ url('course' . '/' . optional($homePage->courseTwoHomePage)->id . '/' . optional($homePage->courseOneHomePage)->slug) }}"
                                            class="primary-btn-one w-100 rounded-0">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                        <div class="card-body course-description-card">
                            <div class="row align-items-center">
                                <div class="col-lg-12">
                                    <div class="course-details-img">
                                        <img class="img-fluid"
                                            src="{{ asset('storage/course/' . optional($homePage->courseThreeHomePage)->thumbnail_image) }}"
                                            alt="" />
                                    </div>
                                    <div class="pt-3">
                                        <h6 class="fw-bold" style="color: #001430; height: 45px;">
                                            {{ optional($homePage->courseThreeHomePage)->name }}
                                        </h6>

                                        <p>
                                            {!! optional($homePage->courseThreeHomePage)->short_descp !!}
                                        </p>
                                        <a href="{{ url('course' . '/' . optional($homePage->courseThreeHomePage)->id . '/' . optional($homePage->courseThreeHomePage)->slug) }}"
                                            class="primary-btn-one w-100 rounded-0">
                                            Learn More
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Row Six Explore SEction -->
    <section class="explore-bg"
        style="background-image: url({{ asset('storage/homepage/' . optional($homePage)->row_six_background_image) }});">
        <div class="container explore-section">
            <div class="text-center pb-5">
                <h3 class="section-title text-white">{{ optional($homePage)->row_six_title }}</h3>
                <div class="divider-extra"></div>
                <p class="text-white">
                    {{ optional($homePage)->row_six_header }}
                </p>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-4 mb-2 mb-lg-0">
                            <a href="{{ optional($homePage)->row_six_section_one_url }}"
                                class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">{{ optional($homePage)->row_six_section_one_title }}</p>
                                    </div>
                                    <div class="">
                                        <a href="{{ optional($homePage)->row_six_section_one_url }}"><i
                                                class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mb-2 mb-lg-0">
                            <a href="{{ optional($homePage)->row_six_section_two_url }}"
                                class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">{{ optional($homePage)->row_six_section_two_title }}</p>
                                    </div>
                                    <div class="">
                                        <a href="{{ optional($homePage)->row_six_section_two_url }}"><i
                                                class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mb-2 mb-lg-0">
                            <a href="{{ optional($homePage)->row_six_section_three_url }}"
                                class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">{{ optional($homePage)->row_six_section_three_title }}</p>
                                    </div>
                                    <div class="">
                                        <a href="{{ optional($homePage)->row_six_section_three_url }}"><i
                                                class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row pt-3">

                        <div class="col-lg-4 mb-2 mb-lg-0">
                            <a href="{{ optional($homePage)->row_six_section_four_url }}"
                                class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">{{ optional($homePage)->row_six_section_four_title }}</p>
                                    </div>
                                    <div class="">
                                        <a href="{{ optional($homePage)->row_six_section_four_url }}"><i
                                                class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mb-2 mb-lg-0">
                            <a href="{{ optional($homePage)->row_six_section_five_url }}"
                                class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">{{ optional($homePage)->row_six_section_five_title }}</p>
                                    </div>
                                    <div class="">
                                        <a href="{{ optional($homePage)->row_six_section_five_url }}"><i
                                                class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 mb-2 mb-lg-0">
                            <a href="{{ optional($homePage)->row_six_section_six_url }}"
                                class="text-decoration-none text-muted">
                                <div
                                    class="p-3 bg-white d-flex align-items-center shadow-sm explore-service justify-content-between">
                                    <div>
                                        <p class="mb-0">{{ optional($homePage)->row_six_section_six_title }}</p>
                                    </div>
                                    <div class="">
                                        <a href="{{ optional($homePage)->row_six_section_six_url }}"><i
                                                class="fa-solid fa-arrow-right diffrent-icons service-icons text-white"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="text-center pt-5">
                    <a href="{{ optional($homePage)->row_six_button_url }}" class="primary-btn-two">
                        {{ optional($homePage)->row_six_button_name }} </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Row Seven Popular -->
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card shape">
                        <div class="card-header">
                            <h4 class="mb-0">{{ optional($homePage)->row_seven_badge }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="{{ optional($homePage)->row_seven_section_one_url ?? 'javascript:void(0)' }}"
                                        class="text-decoration-none">
                                        <div class="card rounded-0 border-0 shadow-sm p-3">
                                            <div class="d-flex">
                                                <h1 class="mb-0 pe-2 sape-icons">
                                                    <img src="{{ asset('storage/homepage/' . optional($homePage)->row_seven_section_one_icon) }}"
                                                        alt="" style="width: 50px; height: 50px;">
                                                </h1>
                                                <div>
                                                    <p class="mb-0 fw-bold" style="color: var(--primary-color)">
                                                        {{ optional($homePage)->row_seven_section_one_title }}
                                                    </p>
                                                    <small class="text-muted pt-3">
                                                        {{ optional($homePage)->row_seven_section_one_description }}
                                                    </small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-end mb-0">
                                                    <a href="{{ optional($homePage)->row_seven_section_one_url }}"
                                                        class="text-decoration-none fs-4">
                                                        <i class="fa-solid fa-plus fs-6"
                                                            style="color:var(--primary-color)"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href="{{ optional($homePage)->row_seven_section_two_url ?? 'javascript:void(0)' }}"
                                        class="text-decoration-none">
                                        <div class="card rounded-0 border-0 shadow-sm p-3">
                                            <div class="d-flex">
                                                <h1 class="mb-0 pe-2 sape-icons">
                                                    <img src="{{ asset('storage/homepage/' . optional($homePage)->row_seven_section_two_icon) }}"
                                                        alt="" style="width: 50px; height: 50px;">
                                                </h1>
                                                <div>
                                                    <p class="mb-0 fw-bold" style="color: var(--primary-color)">
                                                        {{ optional($homePage)->row_seven_section_two_title }}
                                                    </p>
                                                    <small class="text-muted pt-3">
                                                        {{ optional($homePage)->row_seven_section_two_description }}
                                                    </small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-end mb-0">
                                                    <a href="{{ optional($homePage)->row_seven_section_two_url }}"
                                                        class="text-decoration-none fs-4">
                                                        <i class="fa-solid fa-plus fs-6"
                                                            style="color:var(--primary-color)"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4">
                                    <a href="{{ optional($homePage)->row_seven_section_three_url ?? 'javascript:void(0)' }}"
                                        class="text-decoration-none">
                                        <div class="card rounded-0 border-0 shadow-sm p-3">
                                            <div class="d-flex">
                                                <h1 class="mb-0 pe-2 sape-icons">
                                                    <img src="{{ asset('storage/homepage/' . optional($homePage)->row_seven_section_three_icon) }}"
                                                        alt="" style="width: 50px; height: 50px;">
                                                </h1>
                                                <div>
                                                    <p class="mb-0 fw-bold" style="color: var(--primary-color)">
                                                        {{ optional($homePage)->row_seven_section_three_title }}
                                                    </p>
                                                    <small class="text-muted pt-3">
                                                        {{ optional($homePage)->row_seven_section_three_description }}
                                                    </small>
                                                </div>
                                            </div>
                                            <div>
                                                <p class="text-end mb-0">
                                                    <a href="{{ optional($homePage)->row_seven_section_three_url }}"
                                                        class="text-decoration-none fs-4">
                                                        <i class="fa-solid fa-plus fs-6"
                                                            style="color:var(--primary-color)"></i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section style="background-color: var(--primary-color)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 py-5">
                    <h2 class="text-center text-white special-text pt-3">
                        {{ optional($homePage)->row_nine_title }}
                    </h2>
                    <div class="text-center py-3">
                        <a href="{{ optional($homePage)->row_nine_button_url }}"
                            class="btn primary-btn-two text-center">{{ optional($homePage)->row_nine_button_name }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container py-5">
            <div class="row">
                <div class="text-center px-5">
                    <h3 class="section-title">{{ optional($homePage)->row_ten_title }}</h3>
                    <div class="divider"></div>
                    <p class="text-muted py-3 px-5">
                        {{ optional($homePage)->row_ten_header }}
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="slider-pertners">
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <a href="https://www.ngenitltd.com/" target="_blank" rel="noopener noreferrer">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <img class="img-fluid" src="{{ asset('images/ngenit_logo.png') }}"
                                            alt="ngenit" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <a href="https://jaragroups.com/" target="_blank" rel="noopener noreferrer">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <img class="img-fluid" src="{{ asset('images/jaragroup_logo.png') }}"
                                            alt="jaragroups" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <a href="https://gamersbd.com/" target="_blank" rel="noopener noreferrer">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <img class="img-fluid"
                                            src="https://gamersbd.com/wp-content/uploads/2022/05/GamersBD-Final-1-AI-File.png.png"
                                            alt="gamersbd" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <a href="https://dadabhaai.com/" target="_blank" rel="noopener noreferrer">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <img class="img-fluid" src="{{ asset('images/dadabhaai_logo.png') }}"
                                            alt="dadabhaai" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="pe-2">
                            <div class="card partners-logo">
                                <a href="https://www.techfocusltd.com/" target="_blank" rel="noopener noreferrer">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <img class="img-fluid" src="{{ asset('images/techfocus_logo.png') }}"
                                            alt="techfocusltd" />
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    {{-- Course --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('input[name="create_account"]').change(function() {
                if ($(this).is(':checked')) {
                    $('.account_password').show();
                } else {
                    $('.account_password').hide();
                }
            });
            $('select[name="course_section_id"]').on('change', function() {
                var course_section_id = $(this).val();
                if (course_section_id) {
                    $.ajax({
                        url: "{{ url('/category-register/ajax') }}/" + course_section_id,
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
