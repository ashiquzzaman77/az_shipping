<section class="footer-area">
    <div class="container">
        <div class="row text-white align-items-center py-3 footer-areas">
            <div class="col-lg-3 col-12 p-4 text-lg-start text-center border-left-side">
                <div>
                    <p class="p-0 m-0 text-white fs-3 fw-bold">
                        <span class="pe-2">Learn IT,</span>Lead IT
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12 p-4 text-lg-start text-center border-left-side">
                <div>
                    <a class="text-decoration-none text-white" href="{{ route('course.registration') }}">Course
                        Registration
                    </a>
                </div>
                <div>
                    <a class="text-decoration-none text-white me-1" href="{{ route('faq') }}">FAQ </a>
                    {{-- | <a class="text-decoration-none text-white ms-1" href="javascript:void(0)" data-bs-toggle="modal"
                        data-bs-target="#discountModal">Enquiries
                    </a> --}}
                </div>
            </div>
            @php
                $courseSections = App\Models\CourseSection::orderBy('name', 'ASC')->limit(3)->get();
            @endphp
            <div class="col-lg-3 col-12 p-4 text-lg-start text-center border-left-side">
                <ul class="ms-0 ps-0" style="list-style-type: none">
                    @foreach ($courseSections as $courseSection)
                        <li class="pt-2">
                            <a class="text-white text-decoration-none"
                                href="{{ url('course-service' . '/' . $courseSection->id . '/' . $courseSection->slug) }}">
                                {{ $courseSection->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-lg-3 col-12 p-4 d-flex justify-content-between align-items-center social-area">
                <ul class="ms-0 ps-0" style="list-style-type: none">
                    <li class="pt-2">
                        <a class="text-white text-decoration-none" href="{{ route('service.all') }}"
                            style="font-size: 15px">
                            Our Service</a>
                    </li>
                    <li class="pt-2">
                        <a class="text-white text-decoration-none" href="{{ route('about') }}"
                            style="font-size: 15px">About
                            Us</a>
                    </li>
                    <li class="pt-2">
                        <a class="text-white text-decoration-none" href="{{ route('contact') }}"
                            style="font-size: 15px">
                            Contact Us</a>
                    </li>
                </ul>
                <div class="social-icons-btn">
                    <a class="icons-footer facebook" href="{{ optional($setting)->social_facebook }}"
                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
                        data-bs-title="Facebook">
                        <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a class="icons-footer linkedin" href="{{ optional($setting)->social_linkedin }}"
                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
                        data-bs-title="Linkedin">
                        <i class="fa-brands fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                    <a class="icons-footer youtube" href="{{ optional($setting)->social_youtube }}"
                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="bottom"
                        data-bs-title="Youtube">
                        <i class="fa-brands fa-youtube" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #001430">
    <div class="container">
        <div class="row py-2">
            <div class="col-lg-12">
                <div class="text-center">
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.ngenittraining.com/" class="text-decoration-none">
                            <small class="mb-0 text-white" style="font-size: 13px">
                                © 2024 by NGEN IT LTD.
                            </small>
                        </a>
                        <div class="ps-5">
                            <a href="{{ route('privacyPolicy') }}" style="font-size: 15px"
                                class="text-white text-decoration-none pe-2"><small>Privacy
                                    Policy</small></a>
                            <a href="{{ route('termsCondition') }}" style="font-size: 15px"
                                class="text-white text-decoration-none"><small>Terms
                                    &
                                    Condition</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
