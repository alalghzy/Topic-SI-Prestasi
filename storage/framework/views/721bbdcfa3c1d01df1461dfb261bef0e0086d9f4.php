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

    <link href="<?php echo e(asset('landingpage/css/bootstrap.min.css')); ?>  " rel="stylesheet">

    <link href="<?php echo e(asset('landingpage/css/bootstrap-icons.css')); ?>  " rel="stylesheet">

    <link href="<?php echo e(asset('landingpage/css/templatemo-topic-listing.css')); ?>  " rel="stylesheet">

    <style>
        .topic:hover {
            color: rgb(255, 144, 17);
            text-decoration: none;
        }
    </style>

</head>

<body id="top">

    <main>
        <?php echo $__env->make('landingpage.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('landingpage.includes.section_1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('landingpage.includes.section_2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('landingpage.includes.section_3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('landingpage.includes.section_4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('landingpage.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="<?php echo e(asset('landingpage/js/jquery.min.js')); ?>  "></script>
    <script src="<?php echo e(asset('landingpage/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpage/js/jquery.sticky.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpage/js/click-scroll.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpage/js/custom.js')); ?>"></script>

    
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
                        window.location.href = "<?php echo e(route('logout')); ?>";
                    }
                });
            });
        });
    </script>

    <script>
        <?php if(Session::has('failed')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "<?php echo e(Session::get('failed')); ?>",
                showConfirmButton: true,
            });
        <?php endif; ?>

        <?php if(Session::has('sukses')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: "<?php echo e(Session::get('sukses')); ?>",
                showConfirmButton: false,
                timer: 2000
            });
        <?php endif; ?>
    </script>

</body>

</html>
<?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/layouts/landingpage.blade.php ENDPATH**/ ?>