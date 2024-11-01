@extends('frontend.master')

@section('title', 'Vision')

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


    <!-- Vission Info -->
    <div class="about-info-area pb-70 pt-100">
        <div class="container">

            {{-- MIssion  --}}
            <div class="row align-items-start">

                <div class="col-lg-4 col-md-6">

                    <div class="">

                        <img src="{{ asset('frontend/img/Our-Mission-Banner_AZS.jpg') }}" style="width:600px;height:400px"
                            alt="">

                    </div>

                </div>

                <div class="col-lg-8 col-md-6">

                    <div class="">

                        <h3 style="text-align: justify;">{!! optional($mission)->mision !!}</h3>


                    </div>

                </div>

            </div>

            {{-- Vision  --}}
            <div class="row align-items-start pt-100">

                <div class="col-lg-8 col-md-6">

                    <div class="">

                        <h3 style="text-align: justify;">{!! optional($vission)->vision !!}</h3>


                    </div>

                </div>

                <div class="col-lg-4 col-md-6">

                    <div class="">

                        <img src="{{ asset('frontend/img/Our-Vision-Banner_AZS.jpg') }}" style="width:600px;height:400px"
                            alt="">

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- End Vission Info -->



@endsection
