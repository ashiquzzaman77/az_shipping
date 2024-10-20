{{-- <!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.partials.head')
</head>

<body>
    <div class="loader"></div>
    @include('frontend.partials.header')
    <main>
        @yield('content')
    </main>

    <footer>
        @include('frontend.partials.footer')
    </footer>

    @include('frontend.partials.offcanvas')

    @include('frontend.partials.script')
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">


<head>

    @include('frontend.partials.head')

</head>

<body>

    <!-- preloader -->
    <div class="preloader">

        <!-- <div class="d-table">
            <div class="d-table-cell">
                <div class="lds-ring">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div> -->

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

    <!-- search-overlay  -->
    <div class="search-overlay">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-layer"></div>
                <div class="search-overlay-close">
                    <span class="search-overlay-close-line"></span>
                    <span class="search-overlay-close-line"></span>
                </div>
                <div class="search-overlay-form">
                    <form>
                        <input type="text" class="input-search" placeholder="Search here...">
                        <button type="submit"><i class="bx bx-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- search-overlay -->

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
