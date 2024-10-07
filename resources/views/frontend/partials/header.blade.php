<section>
    <div class="top-header p-2" style="background-color: #001430;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="mb-0 text-white">
                            <span><span class="fw-bold text-white">Hotline: </span>
                                <a href="https://wa.me/{{ optional($setting)->whatsapp }}" class="text-white ps-2 fw-bold"
                                    target="_blank">
                                    {{ optional($setting)->whatsapp ?? '01958-025050' }}
                                </a> |
                                <a href="mailto:{{ optional($setting)->primary_email }}" class="text-white fw-bold"
                                    target="_blank">
                                    {{ optional($setting)->primary_email ?? 'inquiry@ngenitltd.com' }}
                                </a>
                            </span>
                        </p>
                        <div class="top-social">

                            @if (Auth::user())
                                <div class="popover__wrapper me-lg-5 me-100 w-100">
                                    <a href="#">
                                        <h2 class="popover__title mb-1 fw-bold aos-init aos-animate"
                                            data-aos="fade-left">
                                            <span>
                                                <i
                                                    class="fa-solid fa-user primary-text-color fs-6 social-top me-2"></i>{{ Auth::user()->name }}
                                            </span>
                                        </h2>
                                    </a>
                                    <div class="popover__content text-start">

                                        {{-- <a href="{{ route('logout') }}" class="btn signin mb-2 rounded-0">Logout</a> --}}

                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="btn signin mb-2 rounded-0">Logout</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>


                                        <hr class="text-muted">
                                        <ul class="account p-0 text-muted text-start" style="list-style-type: none">

                                            <li>
                                                <i class="fa fa-user m-2" aria-hidden="true"></i>
                                                <a href="{{ route('profile.edit') }}" class="">My Profile</a>
                                            </li>

                                            {{-- <li>
                                                <i class="fa fa-list m-2" aria-hidden="true"></i>
                                                <a href="" class="">My Cart</a>
                                            </li> --}}

                                            <li>
                                                <i class="fa fa-envelope m-2" aria-hidden="true"></i>
                                                <a href="{{ route('user.register.course.list') }}" class="">My
                                                    Course</a>
                                            </li>

                                            {{-- <li>
                                                <i class="fa fa-star m-2" aria-hidden="true"></i>
                                                <a href="javascript:;" class="">Favorites Courses</a>
                                            </li> --}}

                                            {{-- <li>
                                                <i class="fa fa-list m-2" aria-hidden="true"></i>
                                                <a href="javascript:;" class="">Notification</a>
                                            </li> --}}

                                        </ul>

                                        {{-- <hr class="text-muted"> --}}

                                        {{-- <ul class="account p-0 text-muted text-start mb-0"
                                            style="list-style-type: none">
                                            <li>
                                                <i class="fa fa-user m-2" aria-hidden="true"></i>
                                                <a href="javascript:;" class="">Jobs & Offers</a>
                                            </li>
                                        </ul> --}}

                                    </div>
                                </div>
                            @else
                                <div class="popover__wrapper me-lg-5 me-100 w-100">
                                    <a href="#">
                                        <h2 class="popover__title mb-1 fw-bold aos-init aos-animate"
                                            data-aos="fade-left">
                                            <span>
                                                <i class="fa-solid fa-user primary-text-color fs-6 social-top"></i>
                                            </span>
                                        </h2>
                                    </a>
                                    <div class="popover__content text-start">

                                        <a href="{{ route('login') }}" class="btn signin mb-2 rounded-0">Log In</a>

                                        <div class="text-muted">
                                            First time here?
                                            <a href="{{ route('register') }}" class="main-color"
                                                style="text-decoration: underline">Sign Up</a>
                                        </div>

                                        <hr class="text-muted">

                                        <ul class="account p-0 text-muted text-start" style="list-style-type: none">

                                            <li>
                                                <i class="fa fa-user m-2" aria-hidden="true"></i>
                                                <a href="{{ route('courses.all') }}" class="">All Courses</a>
                                            </li>

                                            <li>
                                                <i class="fa fa-envelope m-2" aria-hidden="true"></i>
                                                <a href="{{ route('service.all') }}" class="">All Services</a>
                                            </li>

                                            {{-- <li>
                                                <i class="fa fa-star m-2" aria-hidden="true"></i>
                                                <a href="" class="">Favorites Courses</a>
                                            </li> --}}

                                            {{-- <li>
                                                <i class="fa fa-list m-2" aria-hidden="true"></i>
                                                <a href="" class="">Notification</a>
                                            </li> --}}

                                        </ul>
                                        {{-- <hr class="text-muted">

                                        <ul class="account p-0 text-muted text-start mb-0"
                                            style="list-style-type: none">
                                            <li>
                                                <i class="fa fa-user m-2" aria-hidden="true"></i>
                                                <a href="" class="">Jobs & Offers</a>
                                            </li>
                                        </ul> --}}
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
<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light main_header">
        <div class="container">
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img class="img-fluid"
                    src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                    alt="" />
            </a>
            <button class="navbar-toggler main-color" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#staticBackdrop" aria-controls="staticBackdrop" id="navbarToggler">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse align-items-center" id="navbarScroll">
                <div class="ms-5">
                    <div class="btn-group position-static" title="Our Courses">

                        <button class="category-btn-header dropdown-toggle text-white" type="button"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <i class="fa-solid fa-list fa-fw"></i>
                        </button>

                        <ul class="dropdown-menu w-100 m-0 rounded-0 p-0 border-0 courses-tabs-header"
                            style="border-top: 1px solid #0a1d5b;">
                            @php
                                $courseSections = App\Models\CourseSection::orderBy('name', 'ASC')
                                    ->limit(8)
                                    ->latest()
                                    ->get();
                            @endphp

                            <div class="container px-0" style="border-top: 1px solid #0a1d5b">
                                <div class="row gx-0">
                                    <div class="col-lg-2" style="background: #fff;">
                                        <ul class="nav nav-tabs flex-column border-0" id="myTab" role="tablist">
                                            @foreach ($courseSections as $key => $courseSection)
                                                <li class="nav-item cources-category-top" role="presentation">
                                                    <button
                                                        class="nav-link cources-category-top-link text-white {{ $key == 0 ? 'active' : '' }}"
                                                        id="tab-{{ $courseSection->id }}" data-bs-toggle="tab"
                                                        data-bs-target="#section{{ $courseSection->id }}"
                                                        type="button" role="tab"
                                                        aria-controls="section{{ $courseSection->id }}"
                                                        aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                                                        {{ $courseSection->name }}
                                                    </button>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    <div class="col-lg-10 header-courses">
                                        <div class="tab-content" id="myTabContent">
                                            @foreach ($courseSections as $key => $courseSection)
                                                @php
                                                    $sectionWiseCats = App\Models\CourseCategory::where(
                                                        'course_section_id',
                                                        $courseSection->id,
                                                    )
                                                        ->orderBy('name', 'ASC')
                                                        ->limit(3)
                                                        ->get();
                                                @endphp
                                                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                                                    id="section{{ $courseSection->id }}" role="tabpanel"
                                                    aria-labelledby="tab-{{ $courseSection->id }}">
                                                    <div class="row p-3">
                                                        @forelse ($sectionWiseCats as $sectionWiseCat)
                                                            <div class="col-lg-4">

                                                                <a href="{{ url('/category/details/' . $sectionWiseCat->id . '/' . $sectionWiseCat->slug) }}"
                                                                    class="fw-bold border-bottom text-muted pb-2">
                                                                    {{ $sectionWiseCat->name }}
                                                                </a>

                                                                @php
                                                                    $catWiseCourses = App\Models\Course::where(
                                                                        'course_category_id',
                                                                        $sectionWiseCat->id,
                                                                    )
                                                                        ->orderBy('name', 'ASC')
                                                                        ->latest()
                                                                        ->limit(5)
                                                                        ->get();
                                                                @endphp

                                                                <ul class="ps-0 ms-0 pt-3"
                                                                    style="list-style-type: none;">

                                                                    @forelse ($catWiseCourses as $catWiseCourse)
                                                                        <li class="pb-3">
                                                                            <a href="{{ url('course' . '/' . $catWiseCourse->id . '/' . $catWiseCourse->slug) }}"
                                                                                class="text-decoration-none primary-text-color menu-link menu-link-text">
                                                                                {{ $catWiseCourse->name }}
                                                                            </a>
                                                                        </li>
                                                                    @empty
                                                                        <p>No Course Avaiable</p>
                                                                    @endforelse


                                                                </ul>
                                                            </div>
                                                        @empty
                                                            <p>No Category Avaiable</p>
                                                        @endforelse


                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>


                    </div>
                </div>
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>
                    {{-- <li class="nav-item dropdown position-static">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown"
                            role="button" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            aria-expanded="false">Online Learning</a>
                        <ul class="dropdown-menu w-100 m-0 rounded-0 p-0 py-0" style="border-top: 1px solid #0a1d5b;"
                            aria-labelledby="navbarScrollingDropdown">
                            <div style="background: #eee">
                                <div>
                                    <div class="container">
                                        <div class="row gx-0">
                                            <div class="col-lg-3" style="background: #fff">
                                                <ul class="nav nav-tabs flex-column border-0" id="myTab"
                                                    role="tablist">
                                                    <li class="nav-item cources-category-top" role="presentation">
                                                        <button
                                                            class="nav-link cources-category-top-link text-white active"
                                                            id="home-tab" data-bs-toggle="tab"
                                                            data-bs-target="#home-tab-pane" type="button"
                                                            role="tab" aria-controls="home-tab-pane"
                                                            aria-selected="true">
                                                            Data Science
                                                        </button>
                                                    </li>
                                                    <li class="nav-item cources-category-top" role="presentation">
                                                        <button class="nav-link cources-category-top-link text-white"
                                                            id="profile-tab" data-bs-toggle="tab"
                                                            data-bs-target="#profile-tab-pane" type="button"
                                                            role="tab" aria-controls="profile-tab-pane"
                                                            aria-selected="false">
                                                            Profile
                                                        </button>
                                                    </li>
                                                    <li class="nav-item cources-category-top" role="presentation">
                                                        <button class="nav-link cources-category-top-link text-white"
                                                            id="contact-tab" data-bs-toggle="tab"
                                                            data-bs-target="#contact-tab-pane" type="button"
                                                            role="tab" aria-controls="contact-tab-pane"
                                                            aria-selected="false">
                                                            Contact
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-9 header-courses">
                                                <div class="tab-content" id="myTabContent">
                                                    <div class="tab-pane fade show active p-3" id="home-tab-pane"
                                                        role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <p class="fw-bold border-bottom text-muted">
                                                                    Degrees
                                                                </p>
                                                                <ul class="ps-0 ms-0" style="list-style-type: none;">
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link">
                                                                            <i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>
                                                                            New Data Science Courses</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Beginner
                                                                            Data Science Courses</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Advanced
                                                                            Data Science Courses</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Data
                                                                            Science Projects</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Advanced
                                                                            Data Science Courses</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <p class="fw-bold border-bottom text-muted">
                                                                    Certificate programs
                                                                </p>
                                                                <ul class="ps-0 ms-0" style="list-style-type: none;">
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link">
                                                                            <i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>
                                                                            New Data Science Courses</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Beginner
                                                                            Data Science Courses</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Advanced
                                                                            Data Science Courses</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Data
                                                                            Science Projects</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Advanced
                                                                            Data Science Courses</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <p class="fw-bold border-bottom text-muted">
                                                                    Get Started
                                                                </p>
                                                                <ul class="ps-0 ms-0" style="list-style-type: none;">
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link">
                                                                            <i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>
                                                                            New Data Science Courses</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Beginner
                                                                            Data Science Courses</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Advanced
                                                                            Data Science Courses</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Data
                                                                            Science Projects</a>
                                                                    </li>
                                                                    <li class="pb-3">
                                                                        <a href=""
                                                                            class="text-decoration-none primary-text-color menu-link"><i
                                                                                class="fa-solid fa-arrow-right-long pe-3"></i>Advanced
                                                                            Data Science Courses</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                                        aria-labelledby="profile-tab" tabindex="0">
                                                        2
                                                    </div>
                                                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel"
                                                        aria-labelledby="contact-tab" tabindex="0">
                                                        3
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('courses.all') }}">Courses</a>
                    </li>


                    <li class="nav-item">

                        <div class="btn-group">

                            <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-expanded="false">
                                Services
                            </button>

                            <ul class="dropdown-menu py-0 rounded-0 border-0" style="background: #001430; top:57px;">
                                <li class="p-1"><a class="dropdown-item text-white menu-drop"
                                        href="{{ route('service.all') }}">All
                                        Services</a>
                                </li>
                                @foreach ($services as $sercice)
                                    <li class="p-1"><a class="dropdown-item text-white menu-drop"
                                            href="{{ url('/services/details/' . $sercice->id . '/' . $sercice->slug) }}">{{ $sercice->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('all.category') }}">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('event') }}">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register-btn" aria-current="page" href="{{ route('course.registration') }}">Course
                            Registration</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('about') }}" class="nav-link" aria-current="page">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('contact') }}">Contact Us</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>
