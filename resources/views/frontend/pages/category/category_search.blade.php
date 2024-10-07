@forelse ($courses as $course)
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header p-0">
                <div>
                    <img class="img-fluid w-100 rounded-2"
                        src="{{ asset('storage/course_category/' . $course->thumbnail_image) }}" alt=""
                        style="height: 220px;">
                </div>
            </div>
            <div class="card-body">
                <h5>{{ $course->name }}</h5>
                <p style="background-color: #001c44; width: 40%; height: 3px;"></p>

                @php
                    $description = $course->description;
                    $words = explode(' ', strip_tags($description));
                    $limitedWords = array_slice($words, 0, 18);
                    $limitedDescription = implode(' ', $limitedWords);
                @endphp

                <p>{!! $limitedDescription !!}.....</p>

                <a href="{{ url('/category/details/' . $course->id . '/' . $course->slug) }}" class="primary-btn-one">
                    See Details <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
@empty
    <p>No Category Available</p>
@endforelse
