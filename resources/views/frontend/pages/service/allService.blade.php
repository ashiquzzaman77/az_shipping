@extends('frontend.master')
@section('content')
    <!-- Banner Section -->
    <section class="showcase">
        <img class="img-fluid"
             src="{{ asset('storage/common_banner/' . optional($common_banner)->our_service_banner) }}"
             alt="Picture"
             onerror="this.onerror=null; this.src='https://images.ctfassets.net/ihx0a8chifpc/GTlzd4xkx4LmWsG1Kw1BB/ad1834111245e6ee1da4372f1eb5876c/placeholder.com-1280x720.png?w=1920&q=60&fm=webp';"/>
    </section>

    <!-- All Servises -->

    <section>
        <div class="container py-5 pt-0">

            <div class="row">
                <div class="col-lg-12 p-3">
                    <div class="text-center w-75 w-lg-100 mx-auto my-5">
                        <h4>Explore Our Services</h4>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex">
                            <!-- (Optional) Existing dropdowns can stay here -->
                        </div>

                        <div>
                            <div class="input-group">
                                <input type="text" id="serviceSearch" class="form-control custom-search-box"
                                    placeholder="Search Service Name" autocomplete="off">
                                <span class="input-group-text primary-btn-one text-center">
                                    <i class="fa-solid fa-search"></i>
                                </span>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <div class="row" id="servicesContainer">
                @forelse ($services as $service)
                    <div class="col-md-3 col-sm-6 service-item mb-4">
                        <a href="{{ url('/services/details/' . $service->id . '/' . $service->slug) }}">
                            <div class="box-service">
                                <img src="{{ asset('storage/service/' . $service->thumbnail_image) }}" />
                                <div class="box-service-content">
                                    <h5 class="title text-white">{{ $service->name }}</h5>
                                    <p class="post">{{ $service->header }}</p> <br>
                                    <span class="post mt-5">
                                        <a href="{{ url('/services/details/' . $service->id . '/' . $service->slug) }}"
                                            class="text-white">See More <i class="fa-solid fa-arrow-right-long"></i></a>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>No Service Available</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#serviceSearch').on('keyup', function() {
                var query = $(this).val();
                $.ajax({
                    url: "{{ route('services.search') }}",
                    method: 'GET',
                    data: {
                        query: query
                    },
                    success: function(data) {
                        $('#servicesContainer').html(data);
                    }
                });
            });
        });
    </script>
@endsection
