<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/ferry/default/error-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2024 07:03:25 GMT -->
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/bootstrap.min.css') }}">
        <!-- Icofont CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/boxicons.min.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/meanmenu.min.css') }}">
        <!-- Magnific CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/magnific-popup.min.css') }}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/Css/owl.theme.default.min.css') }}">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/odometer.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/animate.min.css') }}">
        <!-- Stylesheet CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/style.css') }}">
        <!-- Stylesheet Dark CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/dark.css') }}">
        <!-- Stylesheet Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/Css/responsive.css') }}">
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ !empty(optional($setting)->site_favicon) && file_exists(public_path('storage/' . optional($setting)->site_favicon)) ? asset('storage/' . optional($setting)->site_favicon) : asset('frontend/images/no-logo(217-55).jpg') }}">
        <!-- Title -->
        <title>AZ Shipping Services</title>
    </head>
    <body>
        
        <!-- Preloder -->
        
        <!-- End Preloder -->
        
        <!-- 404 Error Area -->
        <div class="error-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="error">
                            <img class="error-image" src="{{ asset('frontend/img/error.png') }}" alt="image">
                            <h2>Page Not Found</h2>
                            <div class="error-btn">
                                <a href="{{ route('homepage') }}">Back To Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End 404 Error Area -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        {{-- <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.min.js"></script>
        <!-- Owl carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Odometer JS -->
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <!-- Form Validator JS -->
		<script src="assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp JS -->
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!--Animate JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Custom JS --> --}}
        <script src="assets/js/custom.js"></script>
    </body>

<!-- Mirrored from templates.hibootstrap.com/ferry/default/error-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Oct 2024 07:03:25 GMT -->
</html>