<!DOCTYPE html>
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

</html>
