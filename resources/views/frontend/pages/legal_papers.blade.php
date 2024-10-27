@extends('frontend.master')

@section('title', 'Legal Papers')

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

    <!-- Gallery Area -->
    <div class="gallery-area pb-70">
        <div class="container">

            <div class="row" style="margin-top: 60px">

                @forelse ($legals as $lagal)
                    <div class="col-lg-4 col-md-6">
                        <div class="ferry-gallery">
                            <img src="{{ !empty($lagal->image) ? url('storage/' . $lagal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($lagal->image) }}"
                                alt="image">
                            <div class="caption">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <a
                                            href="{{ !empty($lagal->image) ? url('storage/' . $lagal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($lagal->image) }}">
                                            <i class='bx bx-show-alt'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No Lagel Papers Avaiable</p>
                @endforelse

            </div>
        </div>
    </div>
    <!-- End Gallery Area -->

@endsection
