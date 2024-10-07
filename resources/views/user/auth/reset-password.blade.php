<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
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
                            <form method="POST" action="{{ route('password.store') }}">
                                @csrf
                                <!-- Password Reset Token -->
                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <div class="row justify-content-center my-auto">
                                    <div class="col-md-10 col-12">
                                        <div class="row justify-content-center px-3 mb-3">
                                            <img id="logo" class="img-fluid"
                                                src="https://i.ibb.co/HYRMgr8/26znqdblzf-WUKbfm30-Yplsy-Xy3-U7-J32-MCa-Fn-Ms7g.png">
                                        </div>
                                        <h3 class="mb-2 text-center heading">Reset Your Password?</h3>
                                        <p class="text-black form-desc text-center">
                                            Don't worry, it happens to the best of us! Enter your registered email
                                            address, and we'll send you instructions to reset your password and regain
                                            access to your account.
                                        </p>
                                        <div class="form-outline mb-3 pt-4">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email"
                                                class="form-control form-control-solid rounded-0" type="email"
                                                name="email" readonly :value="old('email', $request->email)" required autofocus
                                                autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        {{-- <div class="form-outline mb-3 pt-4">
                                            <x-input-label for="password" :value="__('Password')" />
                                            <x-text-input id="password"
                                                class="form-control form-control-solid rounded-0" type="password"
                                                name="password" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-outline mb-3 pt-4">
                                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                            <x-text-input id="password_confirmation"
                                                class="form-control form-control-solid rounded-0" type="password"
                                                name="password_confirmation" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div> --}}
                                        <div>
                                            <p for="password" class="mb-0">Password</p>
                                            <div class="input-group form-outline">
                                                <x-text-input id="password"
                                                    class="form-control form-control-solid rounded-0" type="password"
                                                    name="password" required autocomplete="new-password" />
                                                <button type="button" class="btn btn-outline-secondary rounded-0"
                                                    onclick="togglePasswordVisibility('password', this)">
                                                    <i class="fa-solid fa-eye" id="eye-icon-password"></i>
                                                </button>
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <p for="password_confirmation" class="mb-0">Confirm Password</p>
                                            <div class="input-group form-outline">
                                                <x-text-input id="password_confirmation"
                                                    class="form-control form-control-solid rounded-0" type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />
                                                <button type="button" class="btn btn-outline-secondary rounded-0"
                                                    onclick="togglePasswordVisibility('password_confirmation', this)">
                                                    <i class="fa-solid fa-eye" id="eye-icon-password-confirmation"></i>
                                                </button>
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="text-center mb-5 mt-4">
                                    <p class="sm-text mx-auto mb-3">
                                        <x-primary-button class="btn-block btn-color" type="submit">
                                            {{ __('Email Password Reset Link') }}
                                        </x-primary-button>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div class="card card2">
                            <div class="my-auto mx-md-5 px-md-5 right">
                                <h3 class="text-white mb-4">Password Recovery Assistance.</h3>
                                <small class="text-white">Forgot your password? No need to stress! Simply enter your
                                    email address in the field below, and we'll quickly send you a link to reset your
                                    password. We're here to help you get back into your account in no time!</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility(inputId, button) {
            var input = document.getElementById(inputId);
            var icon = button.querySelector('i');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }
        </script>
</x-guest-layout>

