<!DOCTYPE html>
<html lang="en">


<head>

    @include('frontend.partials.head')

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

        /* Main content visibility after preloader */
        #main-content {
            display: block;
        }

        /* Wave animation */
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

        /* Preloader Style End */
    </style>

</head>

<body>

    <!-- preloader -->
    {{-- <div class="preloader">

        <div class="anim-cont">
            <div class="side-1">
            </div>
            <div class="side-2">
            </div>
            <div class="side-3">
            </div>
            <div class="side-4">
            </div>
            <div class="side-5">
            </div>
            <div class="side-6">
            </div>
        </div>

    </div> --}}

    <div id="preloader" class="flex-column">
        <div class="wave-text">
            <span>AZ</span>
            <span></span>
            <span>Shipping</span>
            <span></span>
            <span>Services</span>
        </div>
    </div>

    <!-- preloader -->

    <div id="main-content" style="display: none;">

        <!-- Header Section Start  -->
        @include('frontend.partials.header')
        <!-- Header Section Start  -->

        <!-- Main Section Start -->
        <main>

            @yield('content')

        </main>
        <!-- Main Section End -->

        <!-- Footer Section Start -->
        @include('frontend.partials.footer')
        <!-- Footer Section End -->

    </div>

    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
    </div>

    @include('frontend.partials.script')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set a timeout for 50 seconds (50000 milliseconds)
            setTimeout(function() {
                // Fade out the preloader with smooth transition
                document.getElementById('preloader').style.opacity = '0';

                // After the fade-out transition is complete, hide the preloader and show the content
                setTimeout(function() {
                    document.getElementById('preloader').style.display = 'none';
                    // Fade in the main content with smooth transition
                    document.getElementById('main-content').style.display = 'block';
                    document.getElementById('main-content').style.opacity = '1';
                }, 1000); // This matches the fade-out duration of 1 second
            }, 50000); // Preloader duration set to 50 seconds (50000 milliseconds)
        });
    </script>

</body>


</html>
