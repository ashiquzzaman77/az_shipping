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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css" />
<link rel="stylesheet" href="{{ asset('frontend/assets/Css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('frontend/assets/Css/main-style.css') }}" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/use-bootstrap-select@2.2.0/dist/use-bootstrap-select.min.css">
