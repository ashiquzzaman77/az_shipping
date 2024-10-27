@extends('frontend.master')

@section('title', 'Legal Papers')

@section('content')

    <!-- Gallery Area -->
    <div class="gallery-area pt-100 pb-70">
        <div class="container" >

            

            <div class="row" style="margin-top: 120px">

                @forelse ($legals as $lagal)
                    <div class="col-lg-4 col-md-6">
                        <div class="ferry-gallery">
                            <img src="{{ !empty($lagal->image) ? url('storage/' . $lagal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($lagal->image) }}" alt="image">
                            <div class="caption">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <a href="{{ !empty($lagal->image) ? url('storage/' . $lagal->image) : 'https://ui-avatars.com/api/?name=' . urlencode($lagal->image) }}">
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
