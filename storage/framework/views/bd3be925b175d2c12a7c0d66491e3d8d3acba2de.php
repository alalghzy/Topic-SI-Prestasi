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
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">

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

        <header class="site-header d-flex flex-column justify-content-center align-items-center">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Homepage</a></li>

                                <li class="breadcrumb-item active" aria-current="page">Perolehan Prestasi</li>
                            </ol>
                        </nav>

                        <h2 class="text-white">Perolehan Prestasi</h2>
                    </div>

                </div>
            </div>
        </header>

        <section class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 text-center">
                        <h3 class="mb-4">Data Perolehan Prestasi</h3>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="table-responsive p-3">
                                    <?php if($kejuaraan->count()): ?>
                                        <a href="<?php echo e(route('download')); ?>" id="pdf" type="button"
                                            onclick="myFunction()" class="btn btn-outline-success mb-3"
                                            target="blank">Download
                                            <i class="bi bi-download"></i>
                                        </a>
                                    <?php else: ?>
                                    <?php endif; ?>
                                    <table class="table table-bordered" id="tabelPrestasi">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">NPM</th>
                                                <th scope="col">Jurusan</th>
                                                <th scope="col">Prestasi</th>
                                                <th scope="col">Nama Lomba</th>
                                                <th scope="col">Penyelenggara</th>
                                                <th scope="col">Tingkat</th>
                                                <th scope="col">Tanggal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $kejuaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <th scope="row"><?php echo e($loop->index + 1); ?></th>
                                                    <td><?php echo e($item->name); ?></td>
                                                    <td><?php echo e($item->npm); ?></td>
                                                    <td><?php echo e($item->jurusan); ?></td>
                                                    <td><?php echo e($item->juara); ?></td>
                                                    <td><?php echo e($item->lomba); ?></td>
                                                    <td><?php echo e($item->penyelenggara); ?></td>
                                                    <td><?php echo e($item->tingkat); ?></td>
                                                    <td><?php echo e(\Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y')); ?>

                                                    </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                </form>
            </div>
            </div>

            </div>
            </div>
        </section>

        <?php echo $__env->make('landingpage.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="<?php echo e(asset('landingpage/js/jquery.min.js')); ?>  "></script>
    <script src="<?php echo e(asset('landingpage/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpage/js/jquery.sticky.js')); ?>"></script>
    <script src="<?php echo e(asset('landingpage/js/custom.js')); ?>"></script>

    <script>
        function myFunction() {
            // onlick agar button tidak menjadi undefined ketika di tekan
            // open().print() membuka view kemudian print
            document.getElementById("pdf").onclick = open('download').print();
        }
    </script>

        
        <script type="text/javascript" src=" <?php echo e(asset('admins/js/plugins/jquery.dataTables.min.js')); ?> "></script>
        <script type="text/javascript">
            $('#tabelPrestasi').DataTable({
                "lengthMenu": [5, 10, 20, 30, 50],
                "pageLength": 5
            });
        </script>
        </script>

</body>

</html>
<?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/landingpage/data_prestasi.blade.php ENDPATH**/ ?>