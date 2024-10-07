@extends('frontend.master')
@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.3.2/build/css/intlTelInput.css">
    <style>
        .showcase-courses {
            width: 100%;
            height: 300px;
            position: relative;
            color: white;
            text-align: center;
        }

        .form-select option {
            background-color: #051225;
            border: none !important;
        }

        .showcase-courses img {
            width: 100%;
            height: 100%;
            position: absolute;
            object-fit: cover;
            /* Make the image cover the entire area */
            top: 0;
            left: 0;
            z-index: 99;
        }

        .showcase-courses .overlay-courses {
            width: 100%;
            height: 300px;
            background-color: rgba(0, 35, 82, 0.7);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99;
        }

        .showcase-courses h2 {
            margin-top: 100px;
            font-size: 3em;
        }

        .showcase-courses p {
            margin-top: 8px;
            font-size: 1.2em;
        }

        .page_title {
            font-size: 50px;
            text-align: center;
            color: white;
            font-weight: bold;
        }

        .form-title {
            font-size: 30px;
            font-weight: 600;
        }

        .form-desc {
            font-size: 16px;
        }

        .form-area {
            padding: 40px;
            border-radius: 12px;
            border: 1px solid #686868;
        }

        .form-color {
            font-size: 15px;
            font-weight: 400;
            background-color: #111E30 !important;
            padding-bottom: 13px !important;
            border-radius: 5px;
            border: 1px solid #FFFFFF33;
            color: #747474;
        }

        .form-color:focus {
            font-size: 15px;
            font-weight: 400;
            background-color: #111E30 !important;
            padding-bottom: 13px !important;
            border-radius: 5px;
            color: white;
            border: 1px solid #FFFFFF33;
        }

        .input-field-gap {
            margin-bottom: 14px;
        }

        .form-select:focus {
            box-shadow: none;
            outline: none;
        }

        .form-side-area {
            border-radius: 12px;
        }

        .sidebar-content {
            background-color: rgb(217 217 217 / 70%);
            width: 464px;
            height: 104px;
            position: relative;
            margin-top: -130px;
            padding: 18px 15px 5px;
            border-radius: 11px;
        }

        .sidebar-areas {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        @media (max-width: 768px) {
            .page_title {
                font-size: 40px;
            }

            .form-title {
                font-size: 20px;
                font-weight: 600;
            }

            .showcase-courses h2 {
                margin-top: 45px;
                font-size: 2.7em;
            }
        }
    </style>
    <section class="showcase-courses">
        <img src="{{ asset('storage/common_banner/' . optional($common_banner)->course_registration_banner) }}" alt="Picture"
            onerror="this.onerror=null; this.src='https://images.ctfassets.net/ihx0a8chifpc/GTlzd4xkx4LmWsG1Kw1BB/ad1834111245e6ee1da4372f1eb5876c/placeholder.com-1280x720.png?w=1920&q=60&fm=webp';" />
        <div class="overlay-courses">
            <h2>Course Registration</h2>
            <p>One-Stop Learning &amp; Development Solutions</p>
        </div>
    </section>
    <section style="background-color: #051225;">
        <div class="container py-lg-5 py-3">
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class=" pb-lg-5 pb-3">
                        <h1 class="page_title">Get Scholarship</h1>
                        <p class="text-center text-white">Strategies to Maximize Financial Aid Opportunities for Course
                            Enrollment</p>
                    </div>
                </div>
            </div> --}}

            {{-- <form action="{{ route('register' $$ 'course.registration.store') }}" method="post" enctype="multipart/form-data"> --}}
            <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">

                        <div class="row">
                            <div class="col-lg-6 form-area">
                                <div class="input-field-gap">
                                    <h2 class="text-white form-title">Let’s connect constellations</h2>
                                    <p class="text-white form-desc">Let's align our constellations! Reach out and let the
                                        magic of collaboration illuminate our skies.</p>
                                </div>



                                <div class="input-field-gap">
                                    <input type="text"
                                        class="form-control form-color @error('name') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" required name="name"
                                        placeholder="Enter Name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="input-field-gap">
                                    <input type="text"
                                        class="form-control form-color @error('email') is-invalid @enderror"
                                        id="exampleInputEmail1" aria-describedby="emailHelp" required name="email"
                                        placeholder="example@gmail.com">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="input-field-gap">
                                    <input type="tel"
                                        class="form-control form-color @error('phone') is-invalid @enderror" id=""
                                        aria-describedby="phoneHelp" required name="phone" placeholder="017*******">
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="input-field-gap">
                                    <select class="form-select form-color @error('course_id') is-invalid @enderror" required
                                        name="course_id" aria-label="Select Course" data-placeholder="Select Course">
                                        <option value="" disabled selected>Select Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('course_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="input-field-gap">
                                    <textarea class="form-control form-color @error('address') is-invalid @enderror" name="address" rows="3"
                                        cols="3" placeholder=" Address"></textarea>
                                    @error('address')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="input-field-gap">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefault">
                                        <label class="form-check-label ps-2 text-light" for="flexCheckDefault">
                                            If You Are Not Registered Yet Then Click Here.
                                        </label>
                                    </div>
                                </div>

                                <div class="input-field-gap">
                                    <input type="password"
                                        class="form-control form-color @error('password') is-invalid @enderror"
                                        id="passwordProtect" aria-describedby="password" required name="password"
                                        placeholder="*******" style="display: none;">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div>
                                    <button type="submit" class="btn bg-white w-100 fw-bold"
                                        style="color:#111E30">Submit</button>
                                </div>


                                <div class="text-light mt-3 text-center">
                                    Already have an account? <a href="{{ route('login') }}">Sign in </a>
                                </div>
                            </div>

                            <div class="col-lg-6 d-lg-block d-sm-none">
                                <div class="sidebar-areas">
                                    <img class="form-side-area" width="516px" height="635px"
                                        src="{{ asset('frontend/assets/img/registration.jpg') }}" alt="">
                                    <div class="sidebar-content">
                                        <p>"Skill development is not just about acquiring knowledge;
                                            it's about cultivating the ability to adapt and thrive
                                            in a rapidly changing world." <span class="fw-bold text-danger">- Tony
                                                Wagner</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.3.2/build/js/intlTelInput.min.js"></script>
    <script>
        const input = document.querySelector("#phone");
        const iti = window.intlTelInput(input, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.3.2/build/js/utils.js",
        });

        // Validate phone number on form submit
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            const isValid = iti.isValidNumber();
            if (!isValid) {
                event.preventDefault(); // Prevent form submission if phone number is not valid
                const errorMsg = document.querySelector('#phone-error');
                errorMsg.textContent = "Please enter a valid phone number.";
            }
        });
    </script>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const checkbox = document.getElementById('flexCheckDefault');
            const passwordProtect = document.getElementById('passwordProtect');

            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    passwordProtect.style.display = 'block';
                } else {
                    passwordProtect.style.display = 'none';
                }
            });
        });
    </script>
@endpush
