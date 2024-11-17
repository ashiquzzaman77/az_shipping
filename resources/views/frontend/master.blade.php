<!DOCTYPE html>
<html lang="en">

<head>

    @include('frontend.partials.head')

    <!-- Preloader CSS -->
    <style>
        /* Preloader styles */
        #preloader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Wave animation */
        .wave-text img {
            display: block;
            width: 400px;
            height: auto;
            animation: wave 1.5s ease-in-out infinite;
        }

        /* Keyframes for the wave effect */
        @keyframes wave {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Add a delay to the image animation */
        .wave-text img {
            animation-delay: 0s;
            /* You can adjust the delay if you need it */
        }

        /* Style for text with wave animation */
        .wave-text span {
            display: inline-block;
            animation: wave 1.5s ease-in-out infinite;
            font-size: 2ch;
            font-weight: bold;
            color: transparent;
            background: linear-gradient(90deg,
                    #f68e39 0%,
                    #ea6867 29%,
                    #cb4b98 64%,
                    #9256c6 100%);
            background-clip: text;
            -webkit-background-clip: text;
        }

        /* Keyframes for the text wave effect */
        @keyframes wave {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        /* Add a delay to each letter for the wave effect */
        .wave-text span:nth-child(1) {
            animation-delay: 0s;
        }

        .wave-text span:nth-child(2) {
            animation-delay: 0.1s;
        }

        .wave-text span:nth-child(3) {
            animation-delay: 0.2s;
        }

        .wave-text span:nth-child(4) {
            animation-delay: 0.3s;
        }

        .wave-text span:nth-child(5) {
            animation-delay: 0.4s;
        }

        .wave-text span:nth-child(6) {
            animation-delay: 0.5s;
        }

        .wave-text span:nth-child(7) {
            animation-delay: 0.6s;
        }

        .wave-text span:nth-child(8) {
            animation-delay: 0.7s;
        }

        .wave-text span:nth-child(9) {
            animation-delay: 0.8s;
        }

        .wave-text span:nth-child(10) {
            animation-delay: 0.9s;
        }

        .wave-text span:nth-child(11) {
            animation-delay: 1s;
        }
    </style>
</head>

<body>

    <!-- Preloader HTML -->
    <div id="preloader" class="flex-column">
        <div class="wave-text">
            <!-- Add the image you want to animate -->
            <img src="{{ asset('frontend/images/AZ-Shipping-Logo.png') }}" alt="Animated Image">
        </div>
    </div>

    <!-- Header Section Start -->
    @include('frontend.partials.header')
    <!-- Header Section End -->

    <!-- Main Section Start -->
    <main>
        @yield('content')
    </main>
    <!-- Main Section End -->

    <!-- Footer Section Start -->
    @include('frontend.partials.footer')
    <!-- Footer Section End -->

    <!-- Scroll-to-top button -->
    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
    </div>

    <!-- JavaScript -->
    @include('frontend.partials.script')

    <!-- Preloader JS -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set a timeout for 4 seconds (4000 milliseconds)
            setTimeout(function() {
                // Hide the preloader
                document.getElementById('preloader').style.display = 'none';
                // Show the main content
                document.getElementById('main-content').style.display = 'block';
            }, 3000); // Adjust this time if you want it shorter or longer
        });
    </script>
</body>

</html>
