<header class="header-area">
    
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-6">
                    <ul class="left-info">
                        <li>
                            <a
                                href="javascript:;">
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

                            <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}" style="width: 120px; height: 50px;" class="main-logo" alt="logo">

                            <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}" style="width: 120px; height: 50px;" class="white-logo" alt="logo">

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

                        <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}" class="main-logo" style="width: 160px; height: 70px;" alt="logo">

                        <img src="{{ !empty(optional($setting)->site_logo) && file_exists(public_path('storage/' . optional($setting)->site_logo)) ? asset('storage/' . optional($setting)->site_logo) : asset('frontend/images/no-logo(217-55).jpg') }}" style="width: 160px; height: 70px;" class="white-logo" alt="logo">

                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav ms-auto">

                            <li class="nav-item active">
                                <a href="index-3.html" class="nav-link">
                                    Home
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Good To Know <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Legal Papers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">Our Vision</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.html" class="nav-link">Why Choose Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Officals</a>
                                    </li>

                                    <!-- <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            User <i class="bx bx-chevron-right"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="sign-in.html" class="nav-link">Sign In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="sign-up.html" class="nav-link">Sign Up</a>
                                            </li>
                                        </ul>
                                    </li> -->

                                    <!-- <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-condition.html" class="nav-link">Terms & Condition</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="error-404.html" class="nav-link">404 Error Page</a>
                                    </li> -->

                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="team.html" class="nav-link">
                                    Our Team
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Services <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">Crew Management</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">PEME Medical Support</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Flag Document Arrangement</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Travel & Visa Processing</a>
                                    </li>
                                </ul>
                            </li>

                            <!-- <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Blog <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Single Blog</a>
                                    </li>
                                </ul>
                            </li> -->

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Job <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Current Requirements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Drop Your CV</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Our Principle <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Akij Shipping Line Ltd</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a href="" class="nav-link">Drop CV</a>
                                    </li> -->
                                </ul>
                            </li>

                            <!-- <li class="nav-item">
                                <a href="javascript:void(0)" class="nav-link search-box">
                                    <i class="bx bx-search"></i>
                                </a>
                            </li> -->

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
