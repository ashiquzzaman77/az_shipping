@forelse ($services as $service)
    <div class="col-md-3 col-sm-6 service-item">
        <div class="box-service">
            <img src="{{ asset('storage/service/' . $service->thumbnail_image) }}" />
            <div class="box-service-content">
                <h3 class="title">{{ $service->name }}</h3>
                <span class="post">{{ $service->header }}</span>
                <span class="post">
                    <a href="{{ url('/services/details/' . $service->id . '/' . $service->slug) }}" class="text-white">See
                        More <i class="fa-solid fa-arrow-right-long"></i></a>
                </span>
            </div>
        </div>
    </div>
@empty
    <p>No Service Available</p>
@endforelse
