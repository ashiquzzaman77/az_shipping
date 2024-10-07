<nav class="navbar navbar-expand-lg navbar-dark fixed-top container px-0 custom-menu" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('homepage') }}">
            <img class="img-fluid" style="width: 95px" src="{{ asset('frontend/event/img/logo-white.png') }}" alt="" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="fa-solid fa-bars fa-fw"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 for-mobile">
                <li class="nav-item me-3">
                    <a href="{{ route('event') }}" class="nav-link menu-items fs-6">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a href="{{ route('event.registration') }}" class="nav-link menu-items fs-6">Event Registration</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link menu-items fs-6">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
