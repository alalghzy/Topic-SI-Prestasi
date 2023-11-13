<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/#section_1" style="color: rgb(6, 80, 177) text-decoration: none;">
            <i class="bi-back"></i>
            <span>Topic</span>
        </a>

        <div class="d-lg-none ms-auto me-4">
            <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-lg-5 me-lg-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/#section_1">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/#section_2">Bagaimana caranya?</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/#section_3">FAQs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/#section_4">Kontak</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Laman</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="/data_prestasi">Perolehan Prestasi</a></li>
                    </ul>
                </li>

            </ul>

            @guest
                <div class="d-none d-lg-block">
                    <a href="{{ url('keluar') }}" class="navbar-icon rounded bi bi-box-arrow-in-right smoothscroll">
                        Login</a>
                </div>
            @else
                <div class="d-none d-lg-block">
                    <a href="#" id="logout-link" class="navbar-icon rounded bi bi-box-arrow-in-left smoothscroll">
                        Logout</a>
                </div>
                @if (auth()->check() && auth()->user()->level == 'admin')
                    <div class="d-none d-lg-block ms-2">
                        <a href="/admin" class="navbar-icon rounded bi bi-house-gear smoothscroll"></a>
                    </div>
                @endif
                @if (auth()->check() && auth()->user()->level == 'mahasiswa')
                    <div class="d-none d-lg-block ms-2">
                        <a href="/user" class="navbar-icon rounded bi bi-house-gear smoothscroll"></a>
                    </div>
                @endif
            @endguest

        </div>
    </div>
</nav>
