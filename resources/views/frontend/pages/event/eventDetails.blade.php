@extends('frontend.pages.event.app')
@section('event-content')
    <section id="homepage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 px-0">
                    <div class="image-container">

                        <img src="{{ !empty($event->banner_image) ? url('storage/event/' . $event->banner_image) : asset('frontend/images/no-banner(1920-330).png') }}"
                            alt="Event Image" />

                        <div class="overlay"></div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-container content-box left-text">
                                    <h6>{{ optional($event)->banner_badge }}</h6>
                                    <h2 class="mb-0 pt-5 srpt-font">
                                        {{ optional($event)->banner_sub_title }}
                                    </h2>
                                    <h1>{{ optional($event)->banner_title }}</h1>
                                    <p class="pt-5 fw-bold">{{ optional($event)->organizer_text }}</p>
                                    <div class="pt-2">
                                        <a href="{{ optional($event)->map_link }}"
                                            class="btn btn-outline-light me-2 rounded-pill">
                                            <i class="fa-solid fa-location-dot pe-2"></i>Map
                                        </a>
                                        <a href="{{ optional($event)->website_link }}"
                                            class="btn btn-outline-light me-2 rounded-pill">
                                            <i class="fa-solid fa-globe"></i> Training
                                        </a>
                                        <a href="{{ optional($event)->whatsapp_link }}"
                                            class="btn btn-outline-light rounded-pill">
                                            <i class="fa-solid fa-share-nodes pe-2"></i>Share
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="text-container calander-box right-text mobile-none">
                                    <div class="card">
                                        <div
                                            class="card-header border-0 py-0 d-flex justify-content-between align-items-end">
                                            <p class="mb-0 pb-3">
                                                <small class="cst-font">Start At</small> <br />
                                                <span
                                                    class="fs-6 fw-bold first-color cst-font">{{ date('g:i A', strtotime(optional($event)->start_time)) }}</span>
                                            </p>
                                            <p class="text-center mb-0">
                                                <span
                                                    class="start-month">{{ date('M', strtotime(optional($event)->start_date)) }}</span>
                                                <span
                                                    class="start-date">{{ date('d', strtotime(optional($event)->start_date)) }}</span>
                                                <span
                                                    class="start-month">{{ date('Y', strtotime(optional($event)->start_date)) }}</span>
                                            </p>
                                            <p class="mb-0 pb-3">
                                                <small class="cst-font">End At</small> <br />
                                                <span
                                                    class="fs-6 fw-bold first-color cst-font">{{ date('g:i A', strtotime(optional($event)->end_time)) }}</span>
                                            </p>
                                        </div>

                                        <div class="card-body py-5">
                                            <h3 class="text-center fw-bold pb-2">
                                                Let's Countdown
                                            </h3>
                                            <div class="flip-countdown"></div>
                                        </div>

                                        <div class="card-footer border-0">
                                            <div class="row align-items-center">
                                                <div class="col-lg-12">
                                                    <div class="d-flex p-3 align-items-center justify-content-between">
                                                        <h5 class="mb-0 fw-bold cst-font first-color text-end pe-2">
                                                            Event Registraion Fee:
                                                        </h5>
                                                        <h5 class="mb-0 fw-bold cst-font second-color text-end pe-2">
                                                            Free
                                                        </h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer border-0">
                                            <button class="btn btn-primary reg-btn w-100 fw-bold mb-2 rounded-2 cst-font">
                                                Free Registraion
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="overview-section" style="background-color: #eee">
        <div class="container py-5 mobile-none">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="py-5">
                        <h1 class="pb-3 cst-font first-color">{{ optional($event)->row_one_title }}</h1>
                        <p class="fw-semibold" style="text-align: justify">
                            {!! optional($event)->row_one_description !!}
                        </p>

                        <div class="pt-3">
                            <button class="btn btn-primary reg-btn mb-2 rounded-2 cst-font">
                                Registraion Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card rounded-2 border-0 bg-transparent">
                        <div class="card-body">
                            <img class="img-fluid rounded-2 w-100"
                                src="{{ !empty(optional($event)->row_one_image) ? url('storage/event/' . optional($event)->row_one_image) : 'https://ui-avatars.com/api/?name=' . urlencode($event->row_one_title) }}"
                                alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="details-requirements">
        <div class="container py-5">
            <div class="row" style="text-align: justify">
                <div class="col-lg-12">

                    <h1 class="first-color cst-font">
                        {{ optional($event)->row_two_title }}
                    </h1>

                    <p class="pt-2">
                        {!! optional($event)->row_two_description !!}
                    </p>

                </div>
            </div>
        </div>
    </section>
    <section class="action-bg py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="text-white">
                        <h3 class="srpt-font">{{ optional($event)->row_three_badge }}</h3>
                        <h1 class="action-title pb-2 cst-font">
                            {{ optional($event)->row_three_title }}
                        </h1>
                        <p class="fw-bold" style="text-align: justify">
                            {!! optional($event)->row_three_description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="projects" style="background-color: #eee">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Loc</span>ation</h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa fa-solid fa-location-dot fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                {{ optional($event)->location }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Con</span>tact</h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa-solid fa-mobile-screen fa-fw fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                <span>Phone: <span class="ps-2">{{ optional($event)->contact }}</span></span>
                                {{-- <br />
                                <span>Telephone:
                                    <span class="ps-2">(+88) 01958025050</span></span> --}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div>
                        <h3 class="first-color fw-bold"><span style="border-bottom: 4px solid #001430;">Eve</span>nt
                            Shedule</h3>
                        <div class="d-flex align-items-center pt-4">
                            <div class="pt-4">
                                <i class="fa-regular fa-clock fa-fw fs-2 second-color"></i>
                            </div>
                            <p class="fw-semibold pt-3 ps-4 mb-0">
                                <strong class="pe-2">Event Name:</strong>{{ optional($event)->event_name }} <br>
                                <strong class="pe-2">Event Type:</strong>{{ optional($event)->event_type }} <br>
                                <strong class="pe-2">Date:</strong>
                                {{ date('D, M j, Y', strtotime(optional($event)->start_date)) }}

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
