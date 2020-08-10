<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="{{ url('/') }}">
            <img src="{{ url('/') }}/frontend/assets/images/logo-fix.png" alt="" class="logo-light" height="60" />
            <img src="{{ url('/') }}/frontend/assets/images/logo-fix.png" alt="" class="logo-dark" height="60" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto" id="mySidenav">
                <li class="nav-item active">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pages.about-us') }}" class="nav-link">About Us</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pages.loker') }}" class="nav-link">Lowongan Pekerjaan</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('pages.contact-us') }}" class="nav-link">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
