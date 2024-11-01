<header class="header-area">

    <style>
        .badge {
            display: inline-block;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(5px);
            /* Optional blur effect */
        }

        .x-sign {
            --interval: 0.5s;
            /* Fast flicker */
            display: block;
            font-size: 15px;
            background: linear-gradient(45deg, rgb(202, 145, 2), orangered, mediumblue, purple);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: saturate(60%);
            animation: flicker steps(300) var(--interval) infinite;
        }

        @keyframes flicker {
            50% {
                filter: saturate(200%) hue-rotate(20deg);
            }
        }

        /* ============================ */
    </style>




    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="left-info">
                        <li>
                            <a href="javascript:;">
                                <i class="bx bxs-envelope"></i>
                                <span class="__cf_email__"
                                    data-cfemail="99f1fcf5f5f6d9fffcebebe0b7faf6f4">{{ optional($setting)->primary_email }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+823-456-879">
                                <i class="bx bxs-phone-call"></i>
                                {{ optional($setting)->primary_phone }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <ul class="right-info">
                        <li class="mr-20">
                            <a href="{{ route('contact') }}">Contact</a>
                        </li>

                        <li class="mr-20 badge">
                            <a href="https://erp.gso.gov.bd/cdc-search/" target="blank" class="x-sign">CDC Search</a>
                        </li>

                        <!-- <li class="mr-20">
                            <a href="javascript:;">News & Media</a>
                        </li> -->
                        <li>
                            <a href="{{ optional($setting)->social_facebook }}" target="_blank" aria-label="Facebook">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ optional($setting)->social_linkedin }}" target="_blank" aria-label="LinkedIn">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ optional($setting)->whatsapp }}" target="_blank" aria-label="WhatsApp">
                                <i class="bx bxl-whatsapp"></i>
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

                            <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/.jpg') }}" class="main-logo" alt="logo">

                            <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/.jpg') }}" class="white-logo" alt="logo">

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

                        {{-- <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                            class="main-logo" alt="logo"> <span style="background: linear-gradient(to right, #825fff, #7bcefe); -webkit-background-clip: text; color: transparent; font-weight: bold;">AZ Shipping Services</span> --}}

                        <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/') }}"
                            class="main-logo" alt="logo"> <span style="background: linear-gradient(to right, #825fff, #7bcefe); -webkit-background-clip: text; color: transparent; font-weight: bold;">AZ Shipping Services</span>


                        {{-- <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}"
                             class="white-logo" alt="logo"> --}}

                    </a>
                    <div class="collapse navbar-collapse mean-menu">

                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item {{ request()->routeIs('homepage') ? 'active' : '' }}">
                                <a href="{{ route('homepage') }}" class="nav-link">Home</a>
                            </li>

                            <li
                                class="nav-item {{ request()->routeIs('about') || request()->routeIs('legal.papers') || request()->routeIs('vision') || request()->routeIs('why.choose.us') || request()->routeIs('ceo.message') ? 'active' : '' }}">
                                <a href="#" class="nav-link">Good To Know <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                        <a href="{{ route('about') }}" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('legal.papers') ? 'active' : '' }}">
                                        <a href="{{ route('legal.papers') }}" class="nav-link">Legal Papers</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('vision') ? 'active' : '' }}">
                                        <a href="{{ route('vision') }}" class="nav-link">Our Mission & Vision</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('why.choose.us') ? 'active' : '' }}">
                                        <a href="{{ route('why.choose.us') }}" class="nav-link">Why Choose Us</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('ceo.message') ? 'active' : '' }}">
                                        <a href="{{ route('ceo.message') }}" class="nav-link">Message From CEO</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item {{ request()->routeIs('all.team') ? 'active' : '' }}">
                                <a href="{{ route('all.team') }}" class="nav-link">Our Team</a>
                            </li>

                            <li class="nav-item {{ request()->routeIs('service.details.*') ? 'active' : '' }}">
                                <a href="#" class="nav-link">Services <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    @if ($services->isNotEmpty())
                                        @foreach ($services as $service)
                                            <li
                                                class="nav-item {{ request()->routeIs('service.details', [$service->slug, $service->id]) ? 'active' : '' }}">
                                                <a href="{{ route('service.details', [$service->slug, $service->id]) }}"
                                                    class="nav-link">{{ $service->name }}</a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="nav-item ms-3">No Service found.</li>
                                    @endif
                                </ul>
                            </li>

                            <li
                                class="nav-item {{ request()->routeIs('all.job') || request()->routeIs('drop.cv') ? 'active' : '' }}">
                                <a href="#" class="nav-link">Job <i class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item {{ request()->routeIs('all.job') ? 'active' : '' }}">
                                        <a href="{{ route('all.job') }}" class="nav-link">Current Requirements</a>
                                    </li>
                                    <li class="nav-item {{ request()->routeIs('drop.cv') ? 'active' : '' }}">
                                        <a href="{{ route('drop.cv') }}" class="nav-link">Drop Your CV</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item {{ request()->routeIs('principle.details.*') ? 'active' : '' }}">
                                <a href="#" class="nav-link">Our Principle <i
                                        class="bx bx-chevron-down"></i></a>
                                <ul class="dropdown-menu">
                                    @if ($principles->isNotEmpty())
                                        @foreach ($principles as $principle)
                                            <li
                                                class="nav-item {{ request()->routeIs('principle.details', [$principle->slug, $principle->id]) ? 'active' : '' }}">
                                                <a href="{{ route('principle.details', [$principle->slug, $principle->id]) }}"
                                                    class="nav-link">{{ $principle->name }}</a>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="nav-item ms-3">No principles found.</li>
                                    @endif
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="http://azshipping.net/" target="blank" class="x-sign">Mariner's Login</a>
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
