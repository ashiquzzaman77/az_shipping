<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        {{ optional($setting)->site_name ?? 'NGenIT Training' }}
    </title>
    <meta name="description" content="{{ optional($setting)->site_slogan }}" />
    <meta name="keywords"
        content="ngenit, training, course, web development, project, course curriculum, professional training, corporate training, web design, graphics design, IOT, machine learning" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ optional($setting)->site_name }}" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="{{ optional($setting)->site_name }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon"
        href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}"
        type="image/x-icon" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('frontend/event/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css"> -->
    <style>
        .flip-countdown {
            display: none !important;
        }

        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 11111;
            background: #050117 url("../img/loader.gif") no-repeat 50% 50%;
            background-size: 570px 420px;
            /* Adjust width and height as needed */
        }

        .text-container h1 {
            font-size: 3.5rem;
            font-weight: bold;
            margin: 0;
            width: 80%;
        }
    </style>

</head>

<body>
    <div class="loader"></div>
    <header>
        @include('frontend.pages.event.partials.event_header')
    </header>
    <main>
        @yield('event-content')
    </main>
    <footer>
        @include('frontend.pages.event.partials.event_footer')
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/assets/Js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/Js/bootstrap.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="{{ asset('frontend/event/scripts/scripts.js') }}"></script>
    <script>
        $(window).load(function() {
            $(".loader").fadeOut(100);
        });
    </script>
</body>

</html>
