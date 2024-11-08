<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{ asset('frontend/Css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/boxicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/meanmenu.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/magnific-popup.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/odometer.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/style.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/dark.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/Css/responsive.css') }}">

<link rel="icon" type="image/png"
    href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}">

<title>{{ optional($setting)->site_name ?? 'AZ Shipping ' }}</title>
