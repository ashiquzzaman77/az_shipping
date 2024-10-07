<x-guest-layout>
    <style>
        .svg-icon {
            width: 20px;
            /* Adjust size as needed */
            height: 20px;
            /* Adjust size as needed */
        }

        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: linear-gradient(to right, #001430, rgb(10 29 91));
            background-repeat: no-repeat;
            overflow: hidden;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center
        }

        input,
        textarea {
            background-color: #F3E5F5;
            /* padding: 12px 15px 12px 15px !important; */
            width: 100%;
            box-sizing: border-box;
            border: none !important;
            border: 1px solid #F3E5F5 !important;
            font-size: 16px !important;
            color: #000 !important;
            font-weight: 400;
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #001430 !important;
            outline-width: 0;
            font-weight: 400;
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
        }

        .card {
            border-radius: 0;
            border: none;
        }

        .card1 {
            width: 50%;
            padding: 20px 50px 10px 50px;
        }

        .card2 {
            width: 50%;
            background-image: linear-gradient(to right, rgb(10 29 91), #001430);
        }

        #logo {
            width: 100px;
            height: 100px;
            object-fit: contain;
        }

        .heading {
            margin-bottom: 20px !important;
        }

        ::placeholder {
            color: #000 !important;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #000 !important;
        }

        ::-ms-input-placeholder {
            color: #000 !important;
        }

        .form-control-label {
            font-size: 12px;
            margin-left: 15px;
        }

        .msg-info {
            padding-left: 15px;
            margin-bottom: 30px;
        }

        .btn-color {
            border-radius: 50px;
            color: #fff;
            background-image: linear-gradient(to right, rgb(10 29 91), #001430);
            padding: 15px;
            cursor: pointer;
            border: none !important;
            margin-top: 40px;
        }

        .btn-color:hover {
            color: #fff;
            background-image: linear-gradient(to right, #001430, rgb(10 29 91));
        }

        .btn-white {
            border-radius: 50px;
            color: #001430;
            background-color: #fff;
            cursor: pointer;
            border: 2px solid #001430 !important;
            text-align: center !important;
            padding-left: 40px !important;
            padding-right: 40px !important;
        }

        .btn-white:hover {
            color: #fff;
            background-image: linear-gradient(to right, rgb(10 29 91), #001430);
        }

        a {
            color: #000;
        }

        a:hover {
            color: #000;
        }

        .bottom {
            width: 100%;
            margin-top: 50px !important;
        }

        .sm-text {
            font-size: 15px;
        }

        @media screen and (max-width: 992px) {
            .card1 {
                width: 100%;
                padding: 40px 30px 10px 30px;
            }

            .card2 {
                width: 100%;
            }

            .right {
                margin-top: 100px !important;
                margin-bottom: 100px !important;
            }

            body {
                overflow: auto;
            }
        }

        @media screen and (max-width: 1350px) {
            body {
                overflow: auto;
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 10px !important;
            }

            .card2 {
                padding: 50px;
            }

            .right {
                margin-top: 50px !important;
                margin-bottom: 50px !important;
            }

            body {
                overflow: auto;
            }
        }
    </style>
    <div class="container px-4 py-5 mx-auto">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="card card0">
                    <div class="d-flex flex-lg-row flex-column-reverse">
                        <div class="card card1">

                            <form method="POST" action="{{ route('register') }}">

                                @csrf

                                <div class="row justify-content-center my-auto">
                                    <div class="col-md-10 col-12">
                                        <div class="row justify-content-center px-3 mb-3">
                                            <img id="logo"
                                                src="https://i.ibb.co/HYRMgr8/26znqdblzf-WUKbfm30-Yplsy-Xy3-U7-J32-MCa-Fn-Ms7g.png">
                                        </div>
                                        <h3 class="mb-2 text-center heading">Sign Up Now</h3>

                                        <div class="form-outline mb-1">
                                            <x-input-label class="form-label mb-0" for="name" :value="__('Name')" />
                                            <x-text-input id="name" class="form-control form-control-solid"
                                                type="text" name="name" :value="old('name')" required autofocus
                                                autocomplete="name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>

                                        <div class="form-outline mb-1">
                                            <x-input-label class="form-label mb-0" for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control form-control-solid"
                                                type="email" name="email" :value="old('email')" required
                                                autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <div class="form-outline mb-1">
                                            <x-input-label class="form-label mb-0" for="phone" :value="__('Phone')" />
                                            <x-text-input id="phone" class="form-control form-control-solid"
                                                type="text" name="phone" :value="old('phone')" required
                                                autocomplete="off" />
                                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                                        </div>

                                        <!-- HTML -->
                                        <div class="form-outline mb-1">
                                            <x-input-label class="form-label mb-0" for="password" :value="__('Password')" />
                                            <div class="input-group mb-3">
                                                <input id="password" type="password"
                                                    class="form-control form-control-solid" name="password" required
                                                    autocomplete="new-password" aria-describedby="password-toggle-btn">
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="password-toggle-btn">
                                                    <i id="password-icon" class="bi bi-eye"></i>
                                                </button>
                                            </div>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <div class="form-outline mb-1">
                                            <x-input-label class="form-label mb-0" for="password_confirmation"
                                                :value="__('Confirm Password')" />
                                            <div class="input-group mb-3">
                                                <x-text-input id="password_confirmation"
                                                    class="form-control form-control-solid" type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />
                                                <button class="btn btn-outline-secondary" type="button"
                                                    id="password-confirmation-toggle-btn">
                                                    <i id="password-confirmation-icon" class="bi bi-eye"></i>
                                                </button>
                                            </div>
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div class="row justify-content-center px-3">
                                            <button type="submit" class="btn-block btn-color">Sign Up Now</button>
                                        </div>
                                        {{-- <div class="row justify-content-center my-2 text-center pt-3">
                                        <a href="#"><small class="text-muted">Forgot Password?</small></a>
                                    </div> --}}
                                    </div>
                                </div>
                                <div class="text-center mb-5 pt-4">
                                    <p href="#" class="sm-text mx-auto mb-3">Already have an account?
                                        <a href="{{ route('login') }}" class="ml-2 ps-2 text-center">Login
                                            Now <i class="fa-solid fa-eye"></i></a>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div class="card card2">
                            <div class="my-auto mx-md-5 px-md-5 right">
                                <h3 class="text-white mb-4">Create Your Account - Join Us Today </h3>
                                <small class="text-white">Welcome! We're excited to have you join our community. Fill
                                    out the form below to create your account and gain access to all our features.
                                    Whether you're signing up to enjoy our services or to stay updated, we're here to
                                    make your experience smooth and enjoyable. </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function togglePassword(inputId, iconId) {
                const passwordInput = document.getElementById(inputId);
                const passwordIcon = document.getElementById(iconId);

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    passwordIcon.classList.remove('bi-eye');
                    passwordIcon.classList.add('bi-eye-slash');
                } else {
                    passwordInput.type = 'password';
                    passwordIcon.classList.remove('bi-eye-slash');
                    passwordIcon.classList.add('bi-eye');
                }
            }

            document.getElementById('password-toggle-btn').addEventListener('click', function() {
                togglePassword('password', 'password-icon');
            });

            document.getElementById('password-confirmation-toggle-btn').addEventListener('click', function() {
                togglePassword('password_confirmation', 'password-confirmation-icon');
            });
        });
    </script>
</x-guest-layout>
