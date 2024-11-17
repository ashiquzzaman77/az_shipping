@extends('frontend.master')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>

    <div class="page-banner bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">

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
                            style="border: 1px dotted rgb(48, 36, 71);"> <!-- Solid border -->
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
                                    <span class="small-text d-block"><a
                                            href="{{ route('view.job.details', $job->id) }}">View Details</a></span>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6">
                                    <span class="small-text d-block"><a>
                                            href="{{ route('apply.job', $job->id) }}">Apply Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <p>No Job Offer Avaiable</p>
                @endforelse


            </div>



        </div>
    </div>
@endsection
