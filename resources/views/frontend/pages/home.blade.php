@extends('frontend.master')
@section('content')

    <!-- Banner Section Start  -->
    <div class="hero-slider-three owl-carousel owl-theme">

        @forelse ($banners as $item)
            <div class="hero-slider-three-item"
                style="background-image: url('{{ !empty($item->image) ? url('storage/banner/' . $item->image) : '' }}');">

                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center mt-50">
                                <div class="col-lg-8 col-md-8">
                                    <div class="slider-three-text">
                                        <span>{{ $item->badge }}</span>
                                        <h1>{{ $item->title }}</h1>
                                        <p>{{ $item->sub_title }}</p>

                                        <a href="{{ route('contact') }}" class="default-btn-one me-3">Contact Us</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No Image Avaiable</p>
        @endforelse
        {{-- <div class="hero-slider-three-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center mt-50">
                            <div class="col-lg-8 col-md-8">
                                <div class="slider-three-text">
                                    <span>Since 1992</span>
                                    <h1>Digital Solution for Transportation and Logistic </h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt ut labore et dolore.</p>
                                    <a href="#" class="default-btn-one me-3">Contact Us</a>
                                    <a href="#" class="default-btn-two">Get A Quote</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-slider-three-item">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="row align-items-center mt-50">
                            <div class="col-lg-8 col-md-8">
                                <div class="slider-three-text">
                                    <span>Since 1992</span>
                                    <h1>Digital Solution for Transportation and Logistic </h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                        tempor
                                        incididunt ut labore et dolore.</p>
                                    <a href="#" class="default-btn-one me-3">Contact Us</a>
                                    <a href="#" class="default-btn-two">Get A Quote</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
    <!-- Banner Section End  -->

    <!-- Service Section Start -->
    <div class="freight-area freight-area-two pt-100 pb-70">
        <div class="container">

            <div class="section-title">
                <span>Our Services</span>
                <h2>The Great Services, You Will Get From Us</h2>
            </div>

            <div class="services-slider-two owl-carousel owl-theme">

                @forelse ($services as $service)
                <div class="service-card-two">
                    <img class="freight-image" src="{{ !empty($service->thumbnail_image) ? url('storage/' . $service->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode('SS') }}" alt="image">
                    <div class="service-caption">
                        <h3>{{ $service->name }}</h3>

                        <p style="text-align: justify;">{!! $service->short_descp !!}</p>


                        {{-- <a href="#" class="default-btn-two">Read More</a> --}}
                    </div>
                </div>
                
                @empty
                    <p>No Service Avaiable</p>
                @endforelse
                
            </div>
        </div>
    </div>
    <!-- Service Section End -->

    <!-- About Section Start  -->
    <div class="safe-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-img-three">
                                <img src="{{ !empty($about->image_two) ? url('storage/' . $about->image_two) : 'https://ui-avatars.com/api/?name=' . urlencode('A') }}"
                                    style="width: 100%" alt="" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="about-img-three">
                                <img src="{{ !empty($about->image_one) ? url('storage/' . $about->image_one) : 'https://ui-avatars.com/api/?name=' . urlencode('A') }}"
                                    style="width: 100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-contant-others">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>{{ optional($about)->title }}</h2>
                        </div>
                        <div class="about-two-text">
                            <p class="">{!! optional($about)->short_descp !!}</p>

                            <a href="{{ route('contact') }}" style="margin-top: 20px" class="default-btn-one me-3">Contact
                                Us</a>

                            {{-- <div class="watch-video">
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube">
                                        <i class="bx bx-play whiteText"></i>
                                        Watch Video
                                    </a>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End  -->

    <!-- Client Section Start -->
    <div class="clients-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Clients Review</span>
                <h2>Clients Around The World Makes Us Special</h2>
            </div>
            <div class="clients-slider owl-carousel owl-theme">
                <div class="clients-slider-item">
                    <div class="quote-icon">
                        <i class="bx bxs-quote-right"></i>
                    </div>
                    <div class="item-contant">
                        <div class="clients-image">
                            <img src="assets/img/clients/client1.jpg" alt="image">
                        </div>
                        <h3>Minthy Sananda</h3>
                        <span>CEO of LTD company</span>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <p>On the other hand, we denounce with righteous indignation dislike men who are so beguiled
                            and.</p>
                    </div>
                </div>
                <div class="clients-slider-item">
                    <div class="quote-icon">
                        <i class="bx bxs-quote-right"></i>
                    </div>
                    <div class="item-contant">
                        <div class="clients-image">
                            <img src="assets/img/clients/client2.jpg" alt="image">
                        </div>
                        <h3>Ramos Jhon Smith </h3>
                        <span>CEO of LTD company</span>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <p>On the other hand, we denounce with righteous indignation dislike men who are so beguiled
                            and.</p>
                    </div>
                </div>
                <div class="clients-slider-item">
                    <div class="quote-icon">
                        <i class="bx bxs-quote-right"></i>
                    </div>
                    <div class="item-contant">
                        <div class="clients-image">
                            <img src="assets/img/clients/client4.jpg" alt="image">
                        </div>
                        <h3>JACK Smith </h3>
                        <span>CEO of LTD company</span>
                        <div class="rating">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                        <p>On the other hand, we denounce with righteous indignation dislike men who are so beguiled
                            and.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Client Section End -->

   

    <div class="newsletter-area" style="margin-top: 100px">
        <div class="container">
            <div class="newsletter-content">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="newsletter-title">
                            <h3>Subscribe to our newsletter:</h3>
                            <p>Focused on the transport and logistic industry</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-form">
                            <form>
                                <input type="email" class="form-control" placeholder="Email Address">
                                <button type="submit" class="btn btn-primary">
                                    Subscribe
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
