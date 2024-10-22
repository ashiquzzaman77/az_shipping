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

                                        <a href="javascript:;" class="default-btn-one me-3">Contact Us</a>

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
                <h2>Safe, Faster And Reliable Logistic Services</h2>
            </div>
            <div class="services-slider-two owl-carousel owl-theme">
                <div class="service-card-two">
                    <img class="freight-image" src="{{ asset('frontend/assets/img/freight/freight1.jpg') }}" alt="image">
                    <div class="service-caption">
                        <h3>Road Freight</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="service-card-two">
                    <img class="freight-image" src="{{ asset('frontend/assets/img/freight/freight2.jpg') }}" alt="image">
                    <div class="service-caption">
                        <h3>Ocean Freight</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="service-card-two">
                    <img class="freight-image" src="{{ asset('frontend/assets/img/freight/freight3.jpg') }}" alt="image">
                    <div class="service-caption">
                        <h3>Air Freight</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="service-card-two">
                    <img class="freight-image" src="{{ asset('frontend/assets/img/freight/freight1.jpg') }}" alt="image">
                    <div class="service-caption">
                        <h3>Road Freight</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="service-card-two">
                    <img class="freight-image" src="{{ asset('frontend/assets/img/freight/freight2.jpg') }}" alt="image">
                    <div class="service-caption">
                        <h3>Ocean Freight</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="service-card-two">
                    <img class="freight-image" src="{{ asset('frontend/assets/img/freight/freight3.jpg') }}" alt="image">
                    <div class="service-caption">
                        <h3>Air Freight</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut
                            labore et dolore magna.</p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->

    <!-- About Section Start  -->
    <div class="safe-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-three">
                        <img src="{{ asset('frontend/assets/img/about/about3.jpg') }}" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-contant-others">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Safe and Faster Logistic Service Near You</h2>
                        </div>
                        <div class="about-two-text">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque,
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                                beatae vitae dicta sunt explicabo. Nemo enim ipsam quia voluptas.</p>
                            <p class="mb-30">Accusantium doloremque, totam rem aperiam, eaque ipsa quae ab illo
                                inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
                            <a href="#" class="default-btn-one me-3">Contact Us</a>
                            <div class="watch-video">
                                <div class="video-btn">
                                    <a href="https://www.youtube.com/watch?v=bk7McNUjWgw" class="popup-youtube">
                                        <i class="bx bx-play whiteText"></i>
                                        Watch Video
                                    </a>
                                </div>
                            </div>
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

    <div class="shipping-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="shipping-img">
                        <img src="assets/img/shipping/shipping1.jpg" alt="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shipping-text">
                        <div class="shipping-title">
                            <h2>Ferry Shipping Make It More Easy</h2>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui praesentium voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate
                            non provident, similique culpa qui officia deserunt mollitia animi, id est laborum et
                            dolorum. Et harum quidem rerum facilis est et expedita distinctio</p>
                        <div class="shipping-card">
                            <div class="shipping-contant">
                                <div class="shipping-sign">
                                    <img src="assets/img/sign.png" alt="image">
                                </div>
                                <div class="shipping-image">
                                    <img src="assets/img/clients/client1.png" alt="image">
                                </div>
                                <h3>John Doe</h3>
                                <span>CEO, Ferry</span>
                                <p>Nor again is there anyone who loves or pursues or desires to.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Question Start -->
    <div class="frequently-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="frequently-accrodion">
                        <h3>Frequently Asked Questions</h3>
                        <p>Have Questions?<a href="#"> Visit Our Help Center</a></p>
                        <div id="accordion">
                            <div class="accrodion-drawer">
                                <h3>How to estimate the total cost of shipment? <i class="bx bx-chevron-right"></i>
                                </h3>
                                <div class="drawer is-hidden">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, atque,
                                        alias! Repellendus saepe pariatur quidem qui voluptatibus iure ab illum.</p>
                                </div>
                            </div>
                            <div class="accrodion-drawer">
                                <h3>Where is the comapy located?<i class="bx bx-chevron-right"></i></h3>
                                <div class="drawer is-hidden">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, atque,
                                        alias! Repellendus saepe pariatur quidem qui voluptatibus iure ab illum.</p>
                                </div>
                            </div>
                            <div class="accrodion-drawer">
                                <h3>How much time do you take in delivery?<i class="bx bx-chevron-right"></i></h3>
                                <div class="drawer is-hidden">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, atque,
                                        alias! Repellendus saepe pariatur quidem qui voluptatibus iure ab illum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="frequently-image">
                        <div class="frequently-text">
                            <h3>Take Your Goods Anywhere Safely And on Time</h3>
                            <p>Lorem ipsum dolor sit amet, elit, sed do eiusmod tempor incididunt ut labore et
                                dolore
                                magna aliqua</p>
                            <a href="#">+0123 456 789</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Question End -->

    <!-- Blog Section Start  -->
    <div class="blog-area ptb-100">
        <div class="container">
            <div class="section-title text-left ml-0">
                <span>Our Blog</span>
                <h2>Read Our Latest News and Blogs</h2>
            </div>
            <div class="blog-slider owl-carousel owl-theme">
                <div class="blog-card">
                    <a class="blog-image" href="#">
                        <img src="assets/img/blog/blog4.jpg" alt="image">
                    </a>
                    <div class="blog-text">
                        <span class="meta-tag">Delivery</span>
                        <div class="date">22 August 2024</div>
                        <h3>
                            <a href="#">
                                We ensure you best the quality services
                            </a>
                        </h3>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor
                        </p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="blog-card">
                    <a class="blog-image" href="#">
                        <img src="assets/img/blog/blog7.jpg" alt="image">
                    </a>
                    <div class="blog-text">
                        <span class="meta-tag">Delivery</span>
                        <div class="date">22 August 2024</div>
                        <h3>
                            <a href="#">
                                We ensure you best the quality services
                            </a>
                        </h3>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor
                        </p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="blog-card">
                    <a class="blog-image" href="#">
                        <img src="assets/img/blog/blog8.jpg" alt="image">
                    </a>
                    <div class="blog-text">
                        <span class="meta-tag">Delivery</span>
                        <div class="date">22 August 2024</div>
                        <h3>
                            <a href="#">
                                Our customer around the world satisty with it
                            </a>
                        </h3>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor
                        </p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="blog-card">
                    <a class="blog-image" href="#">
                        <img src="assets/img/blog/blog4.jpg" alt="image">
                    </a>
                    <div class="blog-text">
                        <span class="meta-tag">Delivery</span>
                        <div class="date">22 August 2024</div>
                        <h3>
                            <a href="#">
                                Introduce new boat service in this spring
                            </a>
                        </h3>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor
                        </p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="blog-card">
                    <a class="blog-image" href="#">
                        <img src="assets/img/blog/blog7.jpg" alt="image">
                    </a>
                    <div class="blog-text">
                        <span class="meta-tag">Delivery</span>
                        <div class="date">22 August 2024</div>
                        <h3>
                            <a href="#">
                                We ensure you best the quality services
                            </a>
                        </h3>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor
                        </p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
                <div class="blog-card">
                    <a class="blog-image" href="#">
                        <img src="assets/img/blog/blog8.jpg" alt="image">
                    </a>
                    <div class="blog-text">
                        <span class="meta-tag">Delivery</span>
                        <div class="date">22 August 2024</div>
                        <h3>
                            <a href="#">
                                We ensure you best the quality services
                            </a>
                        </h3>
                        <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do tempor
                        </p>
                        <a href="#" class="default-btn-two">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Section End  -->

    <div class="newsletter-area">
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
