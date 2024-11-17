<!DOCTYPE html>
<html lang="en">


<head>

    @include('frontend.partials.head')

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
            <span>অ</span>
            <span>র্ধা</span>
            <span>ঙ্গি</span>
            <span>নী</span>
        </div>
        
        <img src="{{ asset('frontend/images/no-logo(217-55).jpg') }}" alt="Loading..." />
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


</body>


</html>
