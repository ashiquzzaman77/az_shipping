@extends('frontend.master')
@section('content')
    <div class="page-banner bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Our Expert Team</h2>
                        <ul>
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li>Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-area" style="margin-top: 40px">
        <div class="container">
            <div class="section-title">
                <span>Our Team</span>
                <h2>Intelligence Heros Make The Comapny Proud</h2>
            </div>
            <div class="row">

                @forelse ($teams as $team)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-card">
                            <div class="team-image">
                                <img src="{{ !empty($team->image) ? url('storage/team/' . $team->image) : 'https://ui-avatars.com/api/?name=' . urlencode($team->name) }}"
                                    alt="image">
                                <div class="caption">
                                    <ul>
                                        <li>
                                            <a href="{{ $team->facebook }}" target="_blank">
                                                <i class="bx bxl-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ 'https://wa.me/' . $team->whatup }}" target="_blank">
                                                <i class="bx bxl-whatsapp"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="tel:{{ $team->phone }}" target="_blank">
                                                <i class="bx bx-phone"></i>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="team-text">
                                <h3>{{ $team->name }}</h3>
                                <span>{{ $team->position }}</span>
                                <p>{!! $team->short_descp !!}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="mb-5">No Team Member Avaiable</p>
                @endforelse

                {{-- <div class="col-lg-12 col-md-12">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div> --}}

            </div>
        </div>
    </div>


    <div class="newsletter-area">
        <div class="container">
            <div class="newsletter-content">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="newsletter-title">
                            <h3>Subscribe to our newsletter:</h3>
                            <p>Focused on the transport and logistic industry</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL"
                                required autocomplete="off">
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
