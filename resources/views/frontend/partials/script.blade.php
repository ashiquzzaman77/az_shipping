{{-- {!! app('captcha')->script() !!} --}}

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

{{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}

<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/meanmenu.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/odometer.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.appear.js') }}"></script>
<script src="{{ asset('frontend/js/form-validator.min.js') }}"></script>
<script src="{{ asset('frontend/js/contact-form-script.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Set a timeout for 4 seconds (4000 milliseconds)
        setTimeout(function() {
            // Hide the preloader
            document.getElementById('preloader').style.display = 'none';
            // Show the main content
            document.getElementById('main-content').style.display = 'block';
        }, 4000); // 4000 milliseconds = 4 seconds
    });
</script>

@stack('scripts')
