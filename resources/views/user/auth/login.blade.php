<x-guest-layout>

    <style>
        .form-outline {
            position: relative;
        }

        .bi-eye,
        .bi-eye-slash {
            font-size: 1rem;
            color: #6c757d;
        }

        .form-control.pe-5 {
            padding-right: 2.5rem;
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

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row justify-content-center my-auto">
                                    <div class="col-md-10 col-12">
                                        <div class="row justify-content-center px-3 mb-3">
                                            <img id="logo"
                                                src="https://i.ibb.co/HYRMgr8/26znqdblzf-WUKbfm30-Yplsy-Xy3-U7-J32-MCa-Fn-Ms7g.png">
                                        </div>

                                        <h3 class="mb-2 text-center heading">Login To Your Dashboard</h3>

                                        <p class="text-black form-desc text-center">
                                            Reach out and let the magic of collaboration illuminate
                                            our skies.
                                        </p>

                                        <div class="form-outline mb-3">
                                            <x-input-label class="form-label" for="login" :value="__('Email Or Phone')" />
                                            <x-text-input id="login"
                                                class="form-control form-control-solid rounded-0" type="text"
                                                name="login" :value="old('login')" required autocomplete="off"
                                                placeholder="example@gmail.com" />
                                            <x-input-error :messages="$errors->get('login')" class="mt-2" />
                                        </div>

                                        <div class="form-outline position-relative">
                                            <x-input-label class="form-label" for="password" :value="__('Password')" />

                                            <x-text-input id="password"
                                                class="form-control form-control-solid rounded-0 pe-5" type="password"
                                                name="password" required autocomplete="new-password"
                                                placeholder="*******" />

                                            <i id="togglePassword" class="bi bi-eye position-absolute"
                                                style="top: 73%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>


                                        <div class="row justify-content-center px-3">
                                            <button type="submit" class="btn-block btn-color">Sign In Now</button>
                                        </div>

                                        <div class="row justify-content-center my-2 text-center pt-2">
                                            <a href="{{ route('password.request') }}"><small class="text-muted">Forgot
                                                    Password?</small></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-center mb-5 pt-4">
                                    <p href="#" class="sm-text mx-auto mb-3">Don't have an account?
                                        <a href="{{ route('register') }}" class="ml-2 ps-2 text-center">Register
                                            Now</a>
                                    </p>
                                </div>
                            </form>

                        </div>
                        <div class="card card2">
                            <div class="my-auto mx-md-5 px-md-5 right">
                                <h3 class="text-white mb-4">Welcome Back! Let’s Get You Logged In</h3>
                                <small class="text-white">Welcome back! To access your account, please enter your
                                    username and password in the fields below. If you don’t have an account yet, you can
                                    easily create one by clicking the 'Sign Up' button</small>
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
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');

            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Toggle the eye icon
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
        });
    </script>

</x-guest-layout>
