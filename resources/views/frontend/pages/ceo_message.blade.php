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

    {{-- Message --}}
    <div class="shipping-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="shipping-img">
                        <img src="{{ !empty($message->image) ? url('storage/' . $message->image) : 'https://ui-avatars.com/api/?name=' . urlencode('CEO') }}" style="width: 600px;height: 600px;" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="shipping-text">
                        <div class="shipping-title">
                            <h2>Message From CEO</h2>
                        </div>
                        <p>{!! $message->message !!}</p>

                        <div class="shipping-card">
                            <div class="shipping-contant">
                                {{-- <div class="shipping-sign">
                                    <img src="{{ asset('frontend/assets/img/sign.png') }}" alt="image">
                                </div> --}}
                                <div class="shipping-image">
                                    <img src="{{ !empty($message->ceo_image) ? url('storage/' . $message->ceo_image) : 'https://ui-avatars.com/api/?name=' . urlencode('CEO') }}" alt="image" 
                                         style="border-radius: 50%; width: 100px; height: 100px; object-fit: cover;">
                                </div>
                                

                                <h3>{{ $message->name }}</h3>
                                <span>{{ $message->position }}</span>
                                    <p>{{ $message->ceo_short_msg }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
