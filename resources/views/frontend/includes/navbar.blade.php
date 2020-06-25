<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="index.html">
            <img src="{{ url('/') }}/frontend/assets/images/logo-light.png" alt="" class="logo-light" height="21" />
            <img src="{{ url('/') }}/frontend/assets/images/logo-dark.png" alt="" class="logo-dark" height="21" />
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#features" class="nav-link">Features</a>
                </li>

                <li class="nav-item">
                    <a href="#pricing" class="nav-link">Pricing</a>
                </li>
            </ul>
            <a href="{{ route('pages.contact-us') }}">
                <button class="btn btn-info navbar-btn"><i class="mdi mdi-phone mr-2"></i>Hubungi</button>
            </a>
        </div>
    </div>
</nav>
