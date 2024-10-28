@extends('frontend.master')

@section('title', 'CEO Message')

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

    <!-- Choose Area -->
    <div class="choose-area ptb-100">

        @if ($choose)
            {
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="choose-contant">
                            <div class="choose-card">
                                <i class='bx bx-world'></i>
                                <h3>{{ optional($choose)->row_one_title }}</h3>
                                <p>{{ optional($choose)->row_one_subtitle }}</p>
                            </div>
                        </div>

                        <div class="choose-contant">
                            <div class="choose-card">
                                <i class='bx bxs-paper-plane'></i>
                                <h3>{{ optional($choose)->row_two_title }}</h3>
                                <p>{{ optional($choose)->row_two_subtitle }}</p>
                            </div>
                        </div>

                        <div class="choose-contant">
                            <div class="choose-card">
                                <i class='bx bxs-truck'></i>
                                <h3>{{ optional($choose)->row_three_title }}</h3>
                                <p>{{ optional($choose)->row_three_subtitle }}</p>
                            </div>
                        </div>

                        <div class="choose-contant">
                            <div class="choose-card">
                                <i class='bx bx-support'></i>
                                <h3>{{ optional($choose)->row_four_title }}</h3>
                                <p>{{ optional($choose)->row_four_subtitle }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="choose-text">
                            <div class="section-title">

                                <span>Why Choose Us</span>

                                <h2>{{ optional($choose)->main_title }}</h2>

                            </div>

                            <p>{!! optional($choose)->long_descp !!}</p>

                            <a href="{{ route('contact') }}" class="default-btn-one">Contact Us</a>

                            {{-- <div class="shape-image">
                                <img src="assets/img/shape/shape2.png" alt="icon">
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
            }
        @endif

    </div>
    <!-- End Choose Area -->



@endsection
