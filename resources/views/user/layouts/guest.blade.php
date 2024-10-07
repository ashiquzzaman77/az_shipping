<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NgenIt Training') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="shortcut icon"
        href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}"
        type="image/x-icon" />
    <style>
        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body class="font-sans text-gray-900 antialiased">
    {{-- <div class="container">
            <div class="d-flex justify-content-center align-items-center pt-6 pt-sm-0">
                <div class="card">
                    <div class="card-header">
                        <a href="/">
                            <x-application-logo class="w-25 h-25 fill-current text-gray-500" />
                        </a>
                    </div>
                    <div class="card-body">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
        <div class="min-h-screen d-flex flex-column justify-content-center align-items-center pt-6 pt-sm-0 bg-gray-100">
            <div>
                <a href="/">
                    <x-application-logo class="w-25 h-25 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-100 mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div> --}}

    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <!-- Jumbotron -->
        <div class="container py-4">
            {{ $slot }}
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
