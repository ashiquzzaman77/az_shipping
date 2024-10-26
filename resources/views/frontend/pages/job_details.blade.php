@extends('frontend.master')

@section('content')
    <div class="page-banner bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-content">
                        <h2>{{ $job->rank }}</h2>
                        {{-- <ul>
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li>Job</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">

            <div class="col-lg-12 mb-3">
                <h3>{{ $job->rank }}</h3>
            </div>

            <div class="col-md-4">

                <div class="job-details">
                    <p><strong>Deadline:</strong>
                        {{ $job->deadline ? \Carbon\Carbon::parse($job->deadline)->format('d M Y') : 'No deadline set' }}
                    </p>
                    <p><strong>Contract Duration:</strong> {{ $job->contract_duration }}</p>
                    <p><strong>Experience Required:</strong> {{ $job->experienced }}</p>
                    <p><strong>Salary:</strong> {{ $job->salary }}</p>
                </div>

            </div>

            <div class="col-md-4">

                <div class="job-details">
                    <p><strong>Total Needed:</strong> {{ $job->total_needed }}</p>
                    <p><strong>DWT/GRT/TEU:</strong> {{ $job->dwt }}</p>
                    <p><strong>Ship Particulars:</strong> {{ $job->ship_particulars }}</p>
                </div>

            </div>

            <div class="col-lg-12 mt-3">
                <p>{!!  $job->long_descp !!}</p>
            </div>

        </div>
    </div>
@endsection
