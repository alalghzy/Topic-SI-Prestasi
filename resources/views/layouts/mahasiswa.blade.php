<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Informasi Prestasi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href=" {{ asset('admins/css/main.css') }} ">

    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        .sidebar-mini.sidenav-toggled .app-sidebar__user-avatar {
            width: 32px;
            height: 32px;
        }

        .app-sidebar__user-avatar {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            margin-right: 15px;
            width: 45px;
            height: 45px;
            background-size: cover;
            background-position: center;
        }

        .rounded-circle,.app-sidebar__user-avatar {
            border-radius: 100% !important;
        }

        .topic:hover {
            color: rgb(255, 158, 48);
            text-decoration: none;
        }
    </style>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo topic" href="/"
            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
            <strong><span class="topic"><i class="bi-back"></i> Topic</span></strong>
        </a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown"
                    aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="{{ route('mahasiswa_profil', Auth::user()->id) }}"><i
                                class="bi bi-person me-2 fs-5"></i>
                            Profil</a></li>
                    <li><a id="logout-link" class="dropdown-item" href="#"><i
                                class="bi bi-box-arrow-right me-2 fs-5"></i>
                            Keluar</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            @if (Auth::user()->profil != 0)
                <img class="app-sidebar__user-avatar" style="border: 1px solid #ffffff; background-size: cover"
                    src="{{ asset(Auth::user()->profil) }}">
            @else
                <img class="app-sidebar__user-avatar " style="border: 1px solid #ffffff;"
                    src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
            @endif

            <div>
                <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
                <p class="app-sidebar__user-designation"><span
                        class="badge text-bg-warning">{{ Auth::user()->level }}</span></p>
            </div>
        </div>
        <ul class="app-menu">
            <li>
                {{-- {{ Route::is('admin') ? 'active' : '' }} --}}
                <a class="app-menu__item {{ Route::is('user') ? 'active' : '' }}" href="{{ route('user') }}">
                    <i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span>
                </a>
            </li>
            <br>
            <li>
                <a class="app-menu__item {{ Route::is('user_lomba') ? 'active' : '' }}" href="{{ route('user_lomba') }}">
                    <i class="app-menu__icon bi bi-award"></i><span class="app-menu__label">Manajemen Lomba</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item {{ Route::is('user_prestasi') ? 'active' : '' }}" href="{{ route('user_prestasi') }}">
                    <i class="app-menu__icon bi bi-trophy"></i><span class="app-menu__label">Perolehan Prestasi</span>
                </a>
            </li>
        </ul>
    </aside>
    <main class="app-content">

        @yield('content')

    </main>
    <!-- Essential javascripts for application to work-->
    <script src="{{ asset('admins/js/jquery-3.7.0.min.js') }}"></script>
    <script src="{{ asset('admins/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admins/js/main.js') }}"></script>


    <!-- Page specific javascripts-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/f28fac3438.js" crossorigin="anonymous"></script>

    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Tangkap elemen tautan "Logout"
            const logoutLink = document.getElementById("logout-link");

            // Tambahkan event listener untuk mengkonfirmasi logout saat tautan diklik
            logoutLink.addEventListener("click", function(e) {
                e.preventDefault();

                Swal.fire({
                    title: "Konfirmasi Logout",
                    text: "Apakah Anda yakin ingin logout?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: "Logout",
                    cancelButtonText: "Batal",
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    customClass: {
                        confirmButton: "btn btn-success",
                        cancelButton: "btn btn-danger",
                    },
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('logout') }}";
                    }
                });
            });
        });
    </script>

    <script>
        @if (Session::has('failed'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ Session::get('failed') }}",
                showConfirmButton: true,
            });
        @endif

        @if (Session::has('sukses'))
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: "{{ Session::get('sukses') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>

    @stack('script')
</body>

</html>
