<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="icon bi bi-trophy"></i> Perolehan Prestasi</h1>
            <p>Laman data perolehan prestasi</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/user"><i class="bi bi-house-door fs-6"></i></a></li>
            <li class="breadcrumb-item"><a href="/user_prestasi">Perolehan Prestasi</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <?php if($kejuaraan->count()): ?>
                            <a href="<?php echo e(route('user_download')); ?>" id="pdf" type="button" onclick="myFunction()"
                                type="button" class="btn btn-outline-success mb-3" target="blank">Download
                                <i class="bi bi-download"></i>
                            </a>
                        <?php else: ?>
                        <?php endif; ?>
                        <!-- Tabel Prestasi -->
                        <div class="table-responsive">
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
                                            <td><?php echo e(\Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y')); ?></td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    
    <script type="text/javascript" src=" <?php echo e(asset('admins/js/plugins/jquery.dataTables.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('admin/js/plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">
        $('#tabelPrestasi').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>

    <script>
        function myFunction() {
            document.getElementById("pdf").onclick = open('download').print();
            location.reload();
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/mahasiswa/prestasi.blade.php ENDPATH**/ ?>