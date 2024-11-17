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
        // Initially show the main content, and after 4 seconds, show the preloader.
        setTimeout(function() {
            // Hide the main content after the delay
            document.getElementById('main-content').style.display = 'none';
            
            // Show the preloader (hero section)
            document.getElementById('preloader').style.display = 'flex';

            // After 2 seconds of preloader, reveal the main content again
            setTimeout(function() {
                // Hide the preloader
                document.getElementById('preloader').style.display = 'none';

                // Show the main content again
                document.getElementById('main-content').style.display = 'block';
            }, 4000); // 4000ms = 4 seconds
        }, 1000); // 1000ms = 1 second delay before switching
    });
</script>

@stack('scripts')
