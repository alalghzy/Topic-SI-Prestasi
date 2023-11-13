<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admins/css/main.css') }} ">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Login SI Prestasi</title>

    <style>
        .topic:hover {
            color: rgb(255, 158, 48);
            text-decoration: none;
        }
    </style>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1
                style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                <a href="/" style="color: white; text-decoration: none" ><strong><span class="topic"><i class="bi-back"></i> Topic</span></strong></h1></a>
        </div>
        @if (session('sukses'))
            <div class="bs-component">
                <div class="alert alert-dismissible alert-success">
                    <button class="btn-close" type="button" data-bs-dismiss="alert"></button>{{ session('sukses') }}
                </div>
            </div>
        @endif
        @if (session('eror'))
        <div class="bs-component">
            <div class="alert alert-dismissible alert-danger">
                <button class="btn-close" type="button" data-bs-dismiss="alert"></button>{{ session('eror') }}
            </div>
        </div>
        @endif
        <div class="login-box">
            <form class="login-form" action="{{ url('proses_login') }}" method="POST">
                @csrf
                <h3 class="login-head"><i class="bi bi-person me-2"></i>Login Akun</h3>
                <div class="mb-3">
                    <label class="form-label">NPM</label>
                    <input type="text" name="username" value="{{ old('username') }}"
                        class="form-control @error('username') is-invalid @enderror"
                        placeholder="Masukkan NPM yang valid" autofocus>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">PASSWORD</label>
                    <input type="password" name="password" value="{{ old('password') }}"
                        class="form-control mb @error('password') is-invalid @enderror" placeholder="Masukkan password">
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="utility">
                        <p class="semibold-text mb-2"><a href="#" data-bs-toggle="modal" data-bs-target="#modalRegister">Daftar Akun</a></p>
                        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Lupa Password?</a></p>
                    </div>
                </div>
                <div class="mb-3 btn-container d-grid">
                    <button class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>
                        Login</button>
                </div>
            </form>
            <form class="forget-form" action="{{ route('send_request_reset') }}" method="POST">
                @csrf
                <h3 class="login-head"><i class="bi bi-person-lock me-2"></i>Lupa Password</h3>
                <div class="mb-3">
                    <label class="form-label">EMAIL</label>
                    <input class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                        type="email" name="email" placeholder="Masukkan email akun">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 btn-container d-grid">
                    <button class="btn btn-primary btn-block"><i class="bi bi-unlock me-2 fs-5"></i>Reset</button>
                </div>
                <div class="mb-3 mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i
                                class="bi bi-chevron-left me-1"></i> Kembali ke Login Akun</a></p>
                </div>
            </form>
        </div>
        @include('auth.includes.modalRegister')
    </section>
    <!-- Essential javascripts for application to work-->
    <script src=" {{ asset('admins/js/jquery-3.7.0.min.js') }} "></script>
    <script src="{{ asset('admins/js/bootstrap.min.js') }}  "></script>
    <script src="{{ asset('admins/js/main.js') }}  "></script>
    <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>

        {{-- Sweet Alert 2 --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
</body>

</html>
