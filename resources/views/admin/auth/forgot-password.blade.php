<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>NgenIt-Training | Forgot Password</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('backend/login/assets/vendors/core/core.css') }}">
    <!-- endinject -->

    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend/login/assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/login/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend/login/assets/css/demo2/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon"
        href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}"
        type="image/x-icon" />
</head>

<body>
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="row">

                                <div class="col-md-4 pe-md-0">
                                    <div class="">
                                        <img alt="Logo" src="{{ asset('backend/login/assets/logo/5500661.jpg') }}"
                                            class="" style="width: 100%; height:100%;" />
                                    </div>
                                </div>

                                <div class="col-md-8 ps-md-0 my-auto">
                                    <div class="auth-form-wrapper px-4 py-5">

                                        <a href=""
                                            class="noble-ui-logo logo-light d-block mb-2 text-center mb-4">

                                            <img alt="Logo"
                                                src="{{ asset('backend/login/assets/logo/Logo_White.png') }}"
                                                class="" style="width: 90px; height: 100%;" />

                                        </a>

                                        <h5 class="text-muted fw-normal mb-4">Recover your password provide your email
                                            address</h5>

                                        <form class="forms-sample" action="{{ route('admin.password.email') }}"
                                            method="POST">

                                            @csrf

                                            <x-auth-session-status class="mb-4 alert alert-success" :status="session('status')" />

                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email Address</label>
                                                <input type="email" autocomplete="off"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" id="email" placeholder="">

                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div>
                                                <button type="submit"
                                                    class="btn btn-primary me-2 px-3 mb-2 mb-md-0 text-white"> Reset
                                                    Password
                                                </button>
                                            </div>


                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('backend/login/assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('backend/login/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/login/assets/js/template.js') }}"></script>
    <!-- endinject -->


</body>

</html>


{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


{{-- <x-admin-guest-layout>
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        style="background-image: url({{ asset('admin/assets/media/illustrations/sketchy-1/14.png') }}">
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <a href="{{ route('homePage') }}" class="mb-12">
                <img alt="Logo"
                    src="{{ !empty($site->site_logo) && file_exists(public_path('storage/settings/' . $site->site_logo)) ? asset('storage/settings/' . $site->site_logo) : asset('images/no-logo(217-55).jpg') }}"
                    class="h-40px" />
            </a>
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="form w-100" action="{{ route('admin.password.email') }}" method="POST">
                    @csrf

                    <div class="text-center mb-10">
                        <h1 class="text-dark mb-3">Forgot Password</h1>
                    </div>
                    <div class="fv-row mb-10">
                        <x-metronic.label
                            class="form-label fs-6 fw-bolder text-dark">{{ __('Email') }}</x-metronic.label>
                        <x-metronic.input type="email" name="email"
                            class="form-control form-control-lg form-control-solid"
                            placeholder="Enter your email address" value="{{ old('email') }}"
                            autocomplete="off"></x-metronic.input>
                    </div>

                    <div class="text-center">
                        <x-metronic.button type="submit" class="primary btn-lg w-100 mb-5">
                            <span class="indicator-label"> {{ __('Email Password Reset Link') }}</span>
                        </x-metronic.button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-admin-guest-layout> --}}
