<x-app-layout :title="'User Register Course'">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


    <div class="card">


        <div class="card-body pt-5">

            <h1 style="margin-top: 30px; margin-bottom:30px;">আমার কোর্সসমূহ</h1>

            <div class="row">



                @forelse ($registerCourse as $key => $registration)
                    <div class="col-12 col-lg-3 p-2">

                        <div style="border: 1px solid #453443" class="card h-100 rounded-1">

                            <img src="{{ !empty($registration->courseName->thumbnail_image) ? url('storage/course/' . $registration->courseName->thumbnail_image) : 'https://ui-avatars.com/api/?name=' . urlencode($registration->courseName->name) }}"
                                class="card-img-top" alt="...">

                            <div class="card-body p-4">

                                <span class="m">
                                    @if ($registration->course_type == 'online')
                                        <span class="badge bg-danger">Online</span>
                                    @else
                                        <span class="badge bg-info">Offline</span>
                                    @endif
                                </span>

                                <h5 class="card-title mt-3">{{ $registration->courseName->name }}</h5>


                                @if ($registration->payment_type == 'unpaid')
                                    <a href="javascript:void(0);" style="margin-top: 40px"
                                        class="btn btn-info rounded-1 w-100" onclick="showAlert()">
                                        Pending...
                                    </a>
                                    <script>
                                        function showAlert() {
                                            alert('NgenIt Training Team Approve Request As Soon');
                                        }
                                    </script>
                                @elseif ($registration->payment_type == 'pending')
                                    <a href="javascript:void(0);" style="margin-top: 40px"
                                        class="btn btn-danger  rounded-1 w-100" data-bs-toggle="modal"
                                        data-bs-target="#paymentStatus{{ $registration->id }}">
                                        Payment
                                    </a>
                                @else
                                    <a href="{{ route('register.course.details', $registration->course_id) }}"
                                        style="margin-top: 40px" class="btn btn-dark  rounded-1 w-100">
                                        Course Details
                                    </a>
                                @endif

                            </div>

                        </div>

                    </div>
                @empty
                    <p>No Course Avaiable</p>
                @endforelse

            </div>

        </div>
    </div>
    {{-- Modal Payment --}}
    <!-- Modal trigger button -->
    @forelse ($registerCourse as $key => $registration)
        <div class="modal fade" id="paymentStatus{{ $registration->id }}" tabindex="-1" data-bs-backdrop="static"
            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="modalTitleId">
                            Course Payment
                        </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form action="{{ route('course.payment', $registration->id) }}" method="POST">
                            @csrf

                            <div class="row">
                                <!-- Payment Method -->
                                <div class="col-12 mb-4">
                                    <h4 class="fs-3 text-danger text-center fw-bolder">Please payment
                                        {{ $registration->course_amount }} Taka</h4>
                                </div>
                                <div class="col-4 mb-4">
                                    <label for="" class="mb-3">Payment Method</label>
                                    <select name="payment_method"
                                        class="form-select form-select-sm @error('payment_method') is-invalid @enderror">
                                        <option selected disabled>Choose Payment Method</option>
                                        <option value="bkash" {{ old('payment_method') == 'bkash' ? 'selected' : '' }}>
                                            Bkash</option>
                                        <option value="rocket"
                                            {{ old('payment_method') == 'rocket' ? 'selected' : '' }}>
                                            Rocket</option>
                                        <option value="nagad" {{ old('payment_method') == 'nagad' ? 'selected' : '' }}>
                                            Nagad</option>
                                        <option value="other"
                                            {{ old('payment_method') == 'other' ? 'selected' : '' }}>
                                            Other</option>
                                    </select>
                                    @error('payment_method')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-4 mb-4">
                                    <label for="" class="mb-3">Amount</label>
                                    <input type="text" name="amount" value="{{ old('amount') }}"
                                        class="form-control form-control-sm @error('amount') is-invalid @enderror">
                                    @error('amount')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Transcation Id -->
                                <div class="col-4 mb-4">
                                    <label for="" class="mb-3">Transcation Id</label>
                                    <input type="text" name="transcation_id" value="{{ old('transcation_id') }}"
                                        class="form-control form-control-sm @error('transcation_id') is-invalid @enderror">
                                    @error('transcation_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Message -->
                                <div class="col-12 mb-4">
                                    <label for="" class="mb-3">Message</label>
                                    <textarea name="note" class="form-control form-control-sm" cols="3" rows="3">{{ old('note') }}</textarea>
                                    @error('note')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mb-4">
                                    <button type="submit" class="btn btn-primary btn-sm">Submit Payment</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(
            document.getElementById("modalId"),
            options,
        );
    </script>


    {{-- @dd(Auth::user()) --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select the button
            const button = document.querySelector('.btn-danger');

            // Add click event listener
            button.addEventListener('click', function() {
                // Show toaster message
                toastr.error('Please Payment course fees');
            });
        });
    </script> --}}


</x-app-layout>
