<!DOCTYPE html>
<html lang="en">


<head>

    @include('frontend.partials.head')

</head>

<body>

    <!-- preloader -->
    <div class="preloader">

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

    </div>

    <!-- preloader -->

    <!-- Header Section Start  -->
    @include('frontend.partials.header')

    <!-- Header Section Start  -->

    <!-- Main Section Start -->

    <main>

        @yield('content')

    </main>

    <!-- Footer Section Start -->
    @include('frontend.partials.footer')
    <!-- Footer Section End -->

    <!-- Main Section End -->

    <div class="go-top">
        <i class="bx bx-chevrons-up"></i>
    </div>

    @include('frontend.partials.script')




</body>


</html>
