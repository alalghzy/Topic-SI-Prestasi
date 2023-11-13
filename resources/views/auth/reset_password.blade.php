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
    <title>Reset Password Akun</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h2
                style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                Reset Password
            </h2>
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
            <form class="login-form" action="{{ route('password_reset') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <label class="form-label">Email</label>
                    <div class="wrap-input100 validate-input input-group">
                        <span class="input-group-text bg-white text-muted">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            value="{{ $email ?? old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="wrap-input100 validate-input input-group">
                        <span class="input-group-text bg-white text-muted">
                            <i class="bi bi-key"></i>
                        </span>
                        <input class="input100 form-control @error('password') is-invalid @enderror" name="password"
                            type="password" placeholder="Masukkan password yang baru" value="{{ old('password') }}">
                        <span class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <div class="wrap-input100 validate-input input-group">
                        <span class="input-group-text bg-white text-muted">
                            <i class="bi bi-key"></i>
                        </span>
                        <input class="input100 form-control @error('password') is-invalid @enderror"
                            name="password_confirmation" type="password" placeholder="Masukkan kembali password"
                            value="{{ old('password_confirmation') }}">
                        <span class="text-danger">
                            @error('password_confirmation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="mb-3 btn-container d-grid">
                    <button class="btn btn-primary btn-block">
                        <i class="bi bi-unlock me-2 fs-5"></i>Reset
                    </button>
                </div>
            </form>
        </div>
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
        @if (Session::has('eror'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "{{ Session::get('eror') }}",
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
