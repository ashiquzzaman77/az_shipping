@extends('frontend.master')

@section('title', 'Principle')

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

    <div class="single-services-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-text">

                        <div class="service-image">
                            <img src="{{ !empty($principleItem->banner_top_image) ? url('storage/' . $principleItem->banner_top_image) : 'https://ui-avatars.com/api/?name=' . urlencode('PN') }}"
                                alt="image">
                        </div>

                        <h3>{{ $principleItem->name }}</h3>

                        <p>{{ $principleItem->short_descp }}</p>

                        <div class="image">
                            <img src="{{ !empty($principleItem->banner_center_image) ? url('storage/' . $principleItem->banner_center_image) : 'https://ui-avatars.com/api/?name=' . urlencode('PN') }}"
                                alt="image">
                        </div>

                        <p>{!! $principleItem->description !!}</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="service-sidebar">
                        <h3 class="title">Our Services</h3>
                        <ul>

                            @foreach ($services as $service)
                                <li>
                                    <a href="{{ route('service.details', [$service->slug, $service->id]) }}">
                                        <i class='bx bxs-ship'></i>
                                        {{ $service->name }}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
