<div class="offcanvas offcanvas-start w-75" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
    style="background: var(--primary-color);" aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand" href="index.html">
            <img class="img-fluid"
                src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                alt="" />
        </a>
        <button type="button" class="btn-close navbar-toggler-close main-color" data-bs-dismiss="offcanvas"
            aria-label="Close">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('homepage') }}">Home</a></li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('courses.all') }}">All Courses</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mobile-menu-link text-white" href="#" id="navbarDropdown"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services
                </a>
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
            </li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('all.category') }}">Category</a></li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('course.registration') }}">Course Registration</a></li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('login') }}">Login</a></li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('contact') }}">Contact Us</a></li>
            <li class="text-style-none text-decoration-none"><a class="mobile-menu-link"
                    href="{{ route('about') }}">About</a></li>
        </ul>
    </div>
</div>

<!-- Sidebar Fixed Modal Start -->
<!-- Button trigger modal -->
<button type="button" class="toggle-btn-sidebar" data-bs-toggle="modal" data-bs-target="#discountModal">
    Inquiry Now!
</button>

<!-- Modal -->
<div class="modal fade" id="discountModal" tabindex="-1" aria-labelledby="discountModalLabel" aria-hidden="true"
    data-bs-target="#staticBackdrop">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header rounded-2" style="background: #0a1d5b; color: white">
                <h5 class="modal-title" id="discountModalLabel">
                    Get Course Query!
                </h5>
                <button type="button" class="btn-close" style="color: white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Modal content goes here -->
                @php
                    $courses = App\Models\Course::latest('id')->get();
                @endphp
                <div class="container">
                    <form action="{{ route('course.query.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="">Course</label>
                                    <select class="form-select form-select-sm" required name="course_id"
                                        aria-label="Select Course" data-placeholder="Select Course">
                                        <option value="" disabled selected>Select Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="">Name<span
                                            class="text-danger">*</span></label>
                                    <input style="background: #e6e8ee" type="text" class="form-control"
                                        name="name" id="exampleInputEmail1" aria-describedby="emailHelp" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="">Email <span
                                            class="text-danger">*</span></label>
                                    <input style="background: #e6e8ee" type="email" class="form-control"
                                        id="exampleInputEmail1" name="email" aria-describedby="emailHelp" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="">Phone <span
                                            class="text-danger">*</span></label>
                                    <input style="background: #e6e8ee" type="text" class="form-control"
                                        id="exampleInputEmail1" name="phone" aria-describedby="emailHelp" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-check" style="padding-top: 37px">
                                    <input class="form-check-input" name="call" type="checkbox" value="1"
                                        id="flexCheckChecked" />
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Call For Details !
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <label for="exampleInputEmail1" class="">Message</label>
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Your message" id="floatingTextarea2"
                                        style="height: 100px"></textarea>
                                    {{-- <label for="floatingTextarea2">Your Message</label> --}}
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-end pt-3">
                                    <button type="submit" class="primary-btn-one">
                                        Submit <i class="fa-solid fa-check ps-3"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
