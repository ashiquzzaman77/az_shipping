@extends('frontend.master')
@section('content')
    <style>
        .bxs-star {
            color: #f7941d;
        }
    </style>

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
                {{-- <span>Our Services</span> --}}
                <h2>The Great Services, You Will Get From Us</h2>
            </div>

            <div class="services-slider-two owl-carousel owl-theme">

                @forelse ($services as $service)
                    <div class="service-card-two">
                        <img class="freight-image"
                            src="{{ !empty($service->thumbnail_image) ? url('storage/' . $service->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode('SS') }}"
                            alt="image">
                        <div class="service-caption">
                            <h3 style="text-align: start;">{{ $service->name }}</h3>

                            <p style="text-align: justify;">{!! $service->short_descp !!}</p>

                            <a href="{{ route('service.details', [$service->slug, $service->id]) }}"
                                class="default-btn-two">See More</a>

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
                            {{-- <span>About Us</span> --}}
                            <h4>{{ optional($about)->title }}</h4>
                        </div>
                        <div class="about-two-text">
                            <p class="" style="text-align: justify;">{!! optional($about)->short_descp !!}</p>

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
                {{-- <span>Clients Review</span> --}}
                <h2>Clients Around The World Makes Us Special</h2>
            </div>

            <div class="clients-slider owl-carousel owl-theme">
                @foreach ($clients as $client)
                    <div class="clients-slider-item">
                        <div class="quote-icon">
                            <i class="bx bxs-quote-right"></i>
                        </div>
                        <div class="item-content">

                            <div class="clients-image">
                                <img src="{{ asset('storage/' . $client->image) }}" alt="image"
                                    style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
                            </div>



                            <h3>{{ $client->name }}</h3>

                            <span>{{ $client->position }}</span>

                            <div class="rating">
                                @if ($client->star == 5)
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                @elseif ($client->star == 4)
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                @elseif ($client->star == 3)
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                @elseif ($client->star == 2)
                                    <i class="bx bxs-star"></i>
                                    <i class="bx bxs-star"></i>
                                @elseif ($client->star == 1)
                                    <i class="bx bxs-star"></i>
                                @endif
                            </div>

                            <p>{!! substr($client->message, 0, 110) !!}</p>

                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </div>
    <!-- Client Section End -->
@endsection
