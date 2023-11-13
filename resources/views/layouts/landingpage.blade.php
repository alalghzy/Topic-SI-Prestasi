<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Topic | Sistem Informasi Prestasi</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <link href="{{ asset('landingpage/css/bootstrap.min.css') }}  " rel="stylesheet">

    <link href="{{ asset('landingpage/css/bootstrap-icons.css') }}  " rel="stylesheet">

    <link href="{{ asset('landingpage/css/templatemo-topic-listing.css') }}  " rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        .topic:hover {
            color: rgb(255, 144, 17);
            text-decoration: none;
        }
    </style>

</head>

<body id="top">

    <main>
        @include('landingpage.includes.navbar')

        @include('landingpage.includes.section_1')
        @include('landingpage.includes.section_2')
        @include('landingpage.includes.section_3')
        @include('landingpage.includes.section_4')

        @include('landingpage.includes.footer')

    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('landingpage/js/jquery.min.js') }}  "></script>
    <script src="{{ asset('landingpage/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landingpage/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('landingpage/js/click-scroll.js') }}"></script>
    <script src="{{ asset('landingpage/js/custom.js') }}"></script>

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

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
