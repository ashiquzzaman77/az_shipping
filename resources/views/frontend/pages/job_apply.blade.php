@extends('frontend.master')

@section('content')
    <div class="page-banner bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">

                </div>
            </div>
        </div>
    </div>

    <div class="sign-in-area mb-5" style="margin-top: 50px">
        <div class="container">
            <div class="section-title">
                <h2>Apply For Job</h2>
                <p>A concise and compelling job description will play a major role in attracting qualified candidates.
                </p>
            </div>
            <div class="sign-in-form">

                <form method="POST" action="{{ route('apply.job.post') }}" enctype="multipart/form-data">
                    @csrf
                
                    <div class="row">
                
                        <div class="col-12 col-lg-12">
                            <div class="form-group">
                                <label for="" class="mb-2">Rank Name:</label>
                                <input type="hidden" name="job_id" value="{{ $job->id }}">
                                <input type="text" class="form-control" value="{{ $job->rank }}" disabled id="rank" placeholder="Enter Rank Name">
                            </div>
                        </div>
                
                        <div class="col-12 col-lg-12">
                            <div class="form-group">
                                <label for="" class="mb-2">Name:</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="" class="mb-2">Email:</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="" class="mb-2">Phone:</label>
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Enter Phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="" class="mb-2">Passport Number:</label>
                                <input type="text" class="form-control" name="passport_number" id="passport_number" placeholder="Passport Number" value="{{ old('passport_number') }}">
                                @error('passport_number')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="" class="mb-2">Nationality:</label>
                                <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Type Country Name" value="{{ old('nationality') }}">
                                @error('nationality')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                
                        <div class="col-12 col-lg-12">
                            <div class="">
                                <label for="" class="mb-2">Drop CV</label>
                                <input type="file" name="attachment" class="form-control my-auto">
                                @error('attachment')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                
                    </div>
                
                    <div class="form-group form-check text-center mt-4">
                        <input type="checkbox" name="agree" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I agree to the terms & conditions.</label>
                        @error('agree')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                
                    <div class="text-center">
                        <button type="submit" class="btn default-btn-one">Apply Post</button>
                    </div>
                
                </form>
                

            </div>
        </div>
    </div>


   
@endsection
