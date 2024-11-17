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

<style>
    /* Preloader (Hero Section) Styles */
    #preloader {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background-color: #fff;
        display: none; /* Hidden initially */
        justify-content: center;
        align-items: center;
        flex-direction: column; /* Stack the text and image vertically */
    }

    /* Main Content Visibility */
    #main-content {
        display: block; /* Visible initially */
        text-align: center;
    }

    /* Wave Animation Styles */
    .wave-text span {
        display: inline-block;
        animation: wave 1.5s ease-in-out infinite;
        font-size: 3rem; /* Increased font size for better visibility */
        font-weight: bold;
        color: transparent;
        background: linear-gradient(90deg, #f68e39 0%, #ea6867 29%, #cb4b98 64%, #9256c6 100%);
        background-clip: text;
        -webkit-background-clip: text;
    }

    /* Keyframes for Wave Animation */
    @keyframes wave {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    /* Add delay for each letter */
    .wave-text span:nth-child(1) { animation-delay: 0s; }
    .wave-text span:nth-child(2) { animation-delay: 0.1s; }
    .wave-text span:nth-child(3) { animation-delay: 0.2s; }
    .wave-text span:nth-child(4) { animation-delay: 0.3s; }

    /* Animated Image Preloader Styling */
    #preloader img {
        width: 100px; /* Adjust size as needed */
        height: auto;
        margin-top: 20px;
        animation: rotateImage 2s linear infinite; /* Rotate animation */
    }

    /* Rotate Image Animation */
    @keyframes rotateImage {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    /* Responsive Design */
    @media (max-width: 600px) {
        .wave-text span {
            font-size: 2rem; /* Smaller size for small screens */
        }
        #preloader img {
            width: 70px; /* Smaller image size for small screens */
        }
    }
</style>
