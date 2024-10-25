@extends('frontend.master')
@section('content')
    <div class="page-banner bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>Our Job Offer</h2>
                        <ul>
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li>Job</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-area" style="padding-top: 50px">
        <div class="container">

            <div class="section-title">
                {{-- <span>Career</span> --}}
                <h2>Features Jobs at Sea</h2>
            </div>

            <div class="row my-5">

                <!-- First Job  -->
                @forelse ($jobs as $job)
                    <div class="col-md-6 col-lg-6">
                        <div class="feature-job-block rounded my-3 gray-light-bg shadow"
                            style="border: 2px dotted rgb(48, 36, 71);"> <!-- Solid border -->
                            <div class="job-content px-5 pt-5">
                                <h4>{{ $job->rank }}</h4>
                                <p></p>
                                <div class="row pb-3">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <span class="small-text d-block"><i
                                                class="fas fa-angle-right mr-1 color-accent"></i>Deadline:
                                            {{ $job->deadline ? \Carbon\Carbon::parse($job->deadline)->format('d M Y') : 'No deadline set' }}</span>
                                        <span class="small-text d-block"><i
                                                class="fas fa-angle-right mr-1 color-accent"></i>Contract Duration:
                                            {{ $job->contract_duration }}
                                        </span>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <span class="small-text d-block"><i
                                                class="fas fa-angle-right mr-1 color-accent"></i>Total Needed:
                                            {{ $job->total_needed }}</span>
                                        <span class="small-text d-block"><i
                                                class="fas fa-angle-right mr-1 color-accent"></i>Salary:
                                            {{ $job->salary }}</span>
                                        <span class="small-text d-block"><i
                                                class="fas fa-angle-right mr-1 color-accent"></i>Experienced:
                                            {{ $job->experienced }}</span>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <span class="small-text d-block"><i
                                                class="fas fa-angle-right mr-1 color-accent"></i>DWT/GRT/TEU:
                                            {{ $job->dwt }} </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters px-5 py-3 border-top">
                                <div class="col-12 col-sm-6 col-md-6">
                                    <span class="small-text d-block"><i class="fas fa-angle-right mr-1 color-accent"></i><a
                                            href="{{ route('view.job.details', $job->id) }}">View Details</a></span>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6">
                                    <span class="small-text d-block"><i class="fas fa-angle-right mr-1 color-accent"></i><a
                                            href="apply-now?id=NDE=">Apply Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <p>No Job Offer Avaiable</p>
                @endforelse


            </div>

            {{-- <div class="newsletter-content mb-5">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="newsletter-title">
                            <h3>Send To Your CV:</h3>
                            <p>Highlight Key Skills and Expertise</p>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-form">
                            <form>
                                <input type="file" class="form-control" placeholder="Email Address">
                                <button type="submit" class="btn btn-primary">
                                    Drop CV
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>


    {{-- <div class="newsletter-area">
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
    </div> --}}
@endsection
