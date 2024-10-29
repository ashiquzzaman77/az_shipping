<header class="header-area">

    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="left-info">
                        <li>
                            <a href="javascript:;">
                                <i class="bx bxs-envelope"></i>
                                <span class="__cf_email__"
                                    data-cfemail="99f1fcf5f5f6d9fffcebebe0b7faf6f4">operation.azss@gmail.com</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+823-456-879">
                                <i class="bx bxs-phone-call"></i>
                                +880 233 3325127
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul class="right-info">
                        <li class="mr-20">
                            <a href="#contact">Contact</a>
                        </li>
                        <li class="mr-20">
                            <a href="">Career</a>
                        </li>
                        <!-- <li class="mr-20">
                            <a href="javascript:;">News & Media</a>
                        </li> -->
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area">
        <div class="ferry-responsive-nav">
            <div class="container">
                <div class="ferry-responsive-menu">
                    <div class="logo">
                        <a href="index.html">

                            <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                                style="width: 120px; height: 50px;" class="main-logo" alt="logo">

                            <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                                style="width: 120px; height: 50px;" class="white-logo" alt="logo">

                            {{-- <img src="assets/img/loA.jpg" class="white-logo" alt="logo"> --}}

                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ferry-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('homepage') }}">

                        <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                            class="main-logo" style="width: 160px; height: 70px;" alt="logo">

                        <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                            style="width: 160px; height: 70px;" class="white-logo" alt="logo">

                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item active">
                                <a href="{{ route('homepage') }}" class="nav-link">
                                    Home
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Good To Know <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item">
                                        <a href="{{ route('about') }}" class="nav-link">About Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('legal.papers') }}" class="nav-link">Legal Papers</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('vision') }}" class="nav-link">Our Mission & Vision</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('why.choose.us') }}" class="nav-link">Why Choose Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('ceo.messge') }}" class="nav-link">Message From CEO</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('all.team') }}" class="nav-link">
                                    Our Team
                                </a>
                            </li>

                            {{-- @php
                                $services = app\Models\Service::where('status', 'active')->latest()->limit(6)->get();
                            @endphp --}}

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Services <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">

                                    @if ($services->isNotEmpty())
                                        @foreach ($services as $service)
                                            <li class="nav-item">
                                                <a href="{{ route('service.details', [$service->slug, $service->id]) }}"
                                                    class="nav-link">{{ $service->name }}</a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="nav-item">No Service found.</li>
                                    @endif



                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Job <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('all.job') }}" class="nav-link">Current Requirements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('drop.cv') }}" class="nav-link">Drop Your CV</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Our Principle <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">

                                    @if ($principles->isNotEmpty())
                                        @foreach ($principles as $principle)
                                            <li class="nav-item">
                                                <a href="{{ route('principle.details', [$principle->slug, $principle->id]) }}"
                                                    class="nav-link">{{ $principle->name }}</a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="nav-item ms-3">No principles found.</li>
                                    @endif

                                </ul>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
