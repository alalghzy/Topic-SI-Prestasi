<!DOCTYPE html>
<html lang="en">
<title>Download PDF</title>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo e(asset('admins/css/main.css')); ?> " rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container text-center">
        <div class="mt-4">
            <image class="me-3 mb-3" src="<?php echo e(asset('img/logo.png')); ?>" style="height: 80px; width: 80px;"></image>
            <image class="me-3 mb-3" src="<?php echo e(asset('img/Logo-Unib.png')); ?>" style="height: 80px; width: 80px;"></image>
            <image class="mb-3" src="<?php echo e(asset('img/logo-ft.png')); ?>" style="height: 80px; width: 80px;"></image>
        </div>
        <div class="row justify-content-center">
            <div class="card">
                <p><b>Laporan Prestasi</b></p>
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NPM</th>
                        <th>Jurusan</th>
                        <th>Prestasi</th>
                        <th>Nama Lomba</th>
                        <th>Penyelenggara</th>
                        <th>Tingkat</th>
                        <th>Tanggal</th>
                    </tr>
                    <tbody>
                        <?php $__currentLoopData = $kejuaraan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->index + 1); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->npm); ?></td>
                                <td><?php echo e($item->jurusan); ?></td>
                                <td><?php echo e($item->juara); ?></td>
                                <td><?php echo e($item->lomba); ?></td>
                                <td><?php echo e($item->penyelenggara); ?></td>
                                <td><?php echo e($item->tingkat); ?></td>
                                <td><?php echo e(\Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y')); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/data_prestasi_pdf.blade.php ENDPATH**/ ?>