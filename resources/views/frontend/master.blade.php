<!DOCTYPE html>
<html lang="en">


<head>

    @include('frontend.partials.head')

    <style>
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
            font-size: 70px;
            font-weight: bold;
            color: transparent;
            background: linear-gradient(90deg, #023154 0%, #5EF9F6 100%);
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
            animation-delay: 0.3s;
        }

        .wave-text span:nth-child(3) {
            animation-delay: 0.5s;
        }

        .wave-text span:nth-child(4) {
            animation-delay: 0.7s;
        }

        .wave-text span:nth-child(5) {
            animation-delay: 0.9s;
        }

        .wave-text span:nth-child(6) {
            animation-delay: 0.11s;
        }

        .wave-text span:nth-child(7) {
            animation-delay: 0.13s;
        }

        .wave-text span:nth-child(8) {
            animation-delay: 0.15s;
        }

        .wave-text span:nth-child(9) {
            animation-delay: 0.17s;
        }

        .wave-text span:nth-child(10) {
            animation-delay: 0.19s;
        }

        /* .wave-text span:nth-child(11) {
            animation-delay: 1s;
        } */

        /* Media query for small screens */
        @media (max-width: 600px) {
            .wave-text span {
                font-size: 40px;
                /* Adjust font size for small screens */
            }
        }
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

    <!-- Main Section Start -->

    <div id="main-content" style="display: none;">

        <!-- Header Section Start  -->
        @include('frontend.partials.header')
        <!-- Header Section Start  -->

        <main>

            @yield('content')

        </main>

        <!-- Footer Section Start -->
        @include('frontend.partials.footer')
        <!-- Footer Section End -->

    </div>

    <!-- Main Section End -->

    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Set a timeout for 2 seconds
            setTimeout(function() {
                // Hide the preloader
                document.getElementById('preloader').style.display = 'none';
                // Show the main content
                document.getElementById('main-content').style.display = 'block';
            }, 4000); // 2000 milliseconds = 2 seconds
        });
    </script>

    @include('frontend.partials.script')




</body>


</html>
