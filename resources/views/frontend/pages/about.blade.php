@extends('frontend.master')
@section('content')
    @if (!empty($about))
        <section class="showcase">

            <img src="{{ asset('upload/about/' . $about->banner_image) }}" alt="Picture"
                onerror="this.onerror=null; this.src='https://images.ctfassets.net/ihx0a8chifpc/GTlzd4xkx4LmWsG1Kw1BB/ad1834111245e6ee1da4372f1eb5876c/placeholder.com-1280x720.png?w=1920&q=60&fm=webp';" />

        </section>

        <section style="background-color: #eee">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid rounded-4" src="{{ asset('upload/about/' . $about->ceo_section_image) }}"
                            alt="" />
                    </div>
                    <div class="col-lg-6">

                        <div>
                            <p>{{ $about->ceo_section_badge }}</p>
                            <h2 class="main-color">{{ $about->ceo_section_title }}</h2>

                            <p>{!! $about->ceo_section_description !!}</p>
                        </div>

                        <div class="pt-4">
                            <h6 class="main-color">{{ $about->ceo_name }}</h6>
                            <strong class="main-color">{{ $about->ceo_designation }}</strong>
                            <div>
                                <img class="img-fluid" src="{{ asset('upload/about/' . $about->ceo_section_signature) }}"
                                    alt="{{ $about->ceo_name }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Row Two  --}}
        <section>
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                            <div class="title-devider"></div>
                            <h5 class="mb-0">{{ $about->row_two_badge }}</h5>
                        </div>
                        <div class="pt-3">
                            <h3 class="main-color">
                                {{ $about->row_two_title }}
                            </h3>
                            <p class="para-description">
                                {!! $about->row_two_description !!}
                            </p>
                        </div>

                        {{-- <div class="pt-3">
                    <ul class="ms-0 ps-0 about-info-ul d-flex" style="list-style-type: none">
                        <li>
                            <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                            Lorem ipsum.
                        </li>
                        <li>
                            <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                            Lorem ipsum.
                        </li>
                        <li>
                            <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                            Lorem ipsum.
                        </li>
                        <li>
                            <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                            Lorem ipsum.
                        </li>
                    </ul>
                </div> --}}

                    </div>
                    <div class="col-lg-6">
                        <div>
                            <img class="img-fluid"
                                src="{{ asset('upload/about/' . ($about->row_two_image ? $about->row_two_image : '')) }}"
                                alt="Row Two Image">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Row Three --}}
        <section style="background-color: #eee">
            <div class="container py-5">
                <div class="row pb-5">
                    <div class="col-lg-12">
                        <div class="text-center section-title-about">
                            <h1>{{ $about->row_three_section_title }}</h1>
                            <div class="section-devider"
                                style="
            background-color: #0a1d5b;
            height: 2px;
            width: 10%;
            margin: auto;
          ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">

                    <div class="col-lg-4 pb-5">

                        <div class="d-flex">
                            <div class="pe-5">
                                <img src="{{ asset('upload/about/' . ($about->row_three_column_one_image ? $about->row_three_column_one_image : '')) }}"
                                    alt="Row Two Image" style="width: 50px;">
                            </div>
                            <div>
                                <h4 class="main-color">{{ $about->row_three_column_one_title }}</h4>
                                <p class="mb-0">
                                    {!! $about->row_three_column_one_description !!}
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 pb-5">

                        <div class="d-flex">
                            <div class="pe-5">
                                <img src="{{ asset('upload/about/' . ($about->row_three_column_two_image ? $about->row_three_column_two_image : '')) }}"
                                    alt="Row Two Image" style="width: 50px;">
                            </div>
                            <div>
                                <h4 class="main-color">{{ $about->row_three_column_two_title }}</h4>
                                <p class="mb-0">
                                    {!! $about->row_three_column_two_description !!}
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 pb-5">

                        <div class="d-flex">
                            <div class="pe-5">
                                <img src="{{ asset('upload/about/' . ($about->row_three_column_three_image ? $about->row_three_column_three_image : '')) }}"
                                    alt="Row Two Image" style="width: 50px;">
                            </div>
                            <div>
                                <h4 class="main-color">{{ $about->row_three_column_three_title }}</h4>
                                <p class="mb-0">
                                    {!! $about->row_three_column_three_description !!}
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        {{-- Row Four  --}}
        <section>
            <div class="container-fluid">
                <div class="row align-items-center px-0">
                    <div class="col-lg-6 px-0"
                        style="background-image: url('https://coursebuilder.thimpress.com/wp-content/uploads/sites/10/2017/06/layer-6.jpg?id=3487');">
                        <div class="p-5">
                            <div class="text-end">
                                <h1 class="fw-bold">{{ $about->row_four_column_one_title }}</h1>
                                <h5>{{ $about->row_four_column_one_header }}</h5>
                            </div>
                            <div class="pt-3">
                                <div class="w-75 ms-auto" style="text-align: end !important;">
                                    {!! $about->row_four_column_one_description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 px-0"
                        style="background-image: url('https://coursebuilder.thimpress.com/wp-content/uploads/sites/10/2017/06/layer-6.jpg?id=3487');">
                        <div class="p-5">
                            <div>
                                <h1 class="fw-bold">{{ $about->row_four_column_two_title }}</h1>
                                <h5>{{ $about->row_four_column_two_header }}</h5>
                            </div>
                            <div class="pt-3">
                                <div class="w-75 me-auto">
                                    {!! $about->row_four_column_two_description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
