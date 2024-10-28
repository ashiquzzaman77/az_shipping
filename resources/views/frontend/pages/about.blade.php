@extends('frontend.master')

@section('title', 'About')

@section('content')


    <!-- Page banner Area -->
    <div class="page-banner bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">

                </div>
            </div>
        </div>
    </div>
    <!-- End Page banner Area -->

    <!-- About Safe Area -->
    <div class="about-text-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-safe-text">
                        <span style="color: #f21860 !important;">About Us</span>

                        <h2>{!! $about->title !!}</h2>
                        <p>{!! $about->long_descp !!}</p>
                    </div>

                    {{-- <div class="shipping-card">
                        <div class="shipping-contant">
                            <div class="shipping-sign">
                                <img src="{{ asset('frontend/assets/img/sign.png') }}" alt="image">
                            </div>
                            <div class="shipping-image">
                                <img src="{{ asset('frontend/assets/img/clients/client1.png') }}" alt="image">
                            </div>
                            <h3>John Doe</h3>
                            <span>CEO, Ferry</span>
                            <p>Nor again is there anyone who loves or pursues or desires to.</p>
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-6">
                    <div class="safe-image">
                        <img src="{{ !empty($about->image) ? url('storage/' . $about->image) : 'https://ui-avatars.com/api/?name=' . urlencode($about->title) }}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Safe Area -->

    <!-- Vission Info -->
    <div class="about-info-area pb-70">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">

                    <div class="about-info-card">

                        <h3>Our Mission</h3>

                        <ul>
                            @forelse ($missions as $mission)
                                <li>
                                    <i class='bx bx-check'></i>
                                    {{ $mission->mision }}
                                </li>
                            @empty
                                <p>No Mission Avaiable</p>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="about-info-card">
                        <h3>Our Promises</h3>
                        <ul>
                            <li>
                                <i class='bx bx-check'></i>
                                We provide best logistic service worldwide
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                All payment methods we accept
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                We provide proper safety and security.
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                We provide best logistic service worldwide
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                All payment methods we accept.
                            </li>
                            <li>
                                <i class='bx bx-check'></i>
                                We provide proper safety and security.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="about-info-card">
                        <h3>Our Vission</h3>
                        <ul>

                            @forelse ($visions as $vision)
                                <li>
                                    <i class='bx bx-check'></i>
                                    {{ $vision->vision }}
                                </li>
                            @empty
                                <p>No Vision Avaiable</p>
                            @endforelse

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Vission Info -->

@endsection
