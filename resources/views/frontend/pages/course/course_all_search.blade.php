@forelse ($courses as $course)
    <div class="col-lg-3 mb-4">
        <div class="card border-0 bg-light shadow-sm rounded-2">
            <div class="card-header p-0 bg-transparent">

                <div>
                    <img class="rounded-2 img-fluid course-images"
                        src="{{ asset(!empty($course->thumbnail_image) ? url('storage/course/' . $course->thumbnail_image) : url('images/no-shop-imge.png')) }}"
                        alt="">
                </div>

                <div class="p-2 text-center">

                    <small class="pe-3">
                        <span class="cource-badge rounded-2">
                            <i class="fa-solid fa-graduation-cap"></i>
                            Batch 2
                        </span>
                    </small>
                    <small class="pe-3">
                        <span class="cource-badge rounded-2">
                            {{-- <i class="fa-solid fa-chair pe-2" aria-hidden="true"></i> --}}
                            <i class="fa-solid fa-user"></i>
                            {{ $course->available_seats }}
                        </span>
                    </small>

                    @php
                        $registrationEndTimestamp = strtotime($course->registration_end_date);
                        $currentTime = time();
                        $remainingTime = $registrationEndTimestamp - $currentTime;
                        $remainingDays = floor($remainingTime / (60 * 60 * 24));
                    @endphp

                    @if ($remainingDays > 0)
                        <small class="pe-3">
                            <span class="course-badge rounded-2">
                                <i class="fa-solid fa-clock"></i>
                                {{ $remainingDays }} Days
                            </span>
                        </small>
                    @endif


                </div>

            </div>
            <div class="card-body">
                <div class="course-title">
                    <h6 class="mb-0">
                        {{ $course->name }}
                    </h6>
                </div>
                <div class="pt-2">
                    <a href="{{ url('course' . '/' . $course->id . '/' . $course->slug) }}"
                        class="primary-btn-one w-100 rounded-0">See Details
                        <i class="fa-solid fa-arrow-right ps-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
@empty
    <div class="text-center py-3">
        <img class="img-fluid" width="210px"
            src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg" alt="No Content">
    </div>
    <h5 class="text-center text-warning">No Course available right now.</h5>
@endforelse
