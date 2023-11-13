<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="icon bi bi-award"></i> Manajemen Lomba</h1>
            <p>Laman untuk manajemen data lomba</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
            <li class="breadcrumb-item"><a href="/lomba">Manajemen Lomba</a></li>
        </ul>
    </div>

    <!-- Card Manajemen Lomba -->
    <div class="container-fluid">
        <!-- Tabel Lomba -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                            data-bs-target="#modalTambahLomba">
                            Tambah <i class="bi bi-plus-square"></i>
                        </button>
                        <?php if(session('sukses')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('sukses')); ?>

                            </div>
                        <?php endif; ?>
                        <table class="table table-bordered" id="tabelLomba">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Nama Lomba</th>
                                    <th scope="col">Penyelenggara</th>
                                    <th scope="col">Tingkat</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $lomba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->index + 1); ?></th>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->npm); ?></td>
                                        <td><?php echo e($item->jurusan); ?></td>
                                        <td><?php echo e($item->lomba); ?></td>
                                        <td><?php echo e($item->penyelenggara); ?></td>
                                        <td><?php echo e($item->tingkat); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($item->tanggal)->translatedFormat('d F Y')); ?></td>

                                            <?php if($item->status == 'Tidak Disetujui'): ?>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button class="btn btn-warning" type="button" data-bs-toggle="modal" data-bs-target="#modalSetujuLomba-<?php echo e($item->id); ?>">
                                                        <i class="bi bi-exclamation-triangle"></i>
                                                    </button>
                                                </div>
                                            </td>
                                            <?php else: ?>
                                            <td class="text-center">
                                                <button <?php if(true): echo 'readonly'; endif; ?> class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#modalSetujuLomba-<?php echo e($item->id); ?>">
                                                    <i class="bi bi-check2-all"></i>
                                                </button>
                                            </td>
                                            <?php endif; ?>

                                        <td class="text-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#modalLihatLomba-<?php echo e($item->id); ?>">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                data-bs-target="#modalEditLomba-<?php echo e($item->id); ?>">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#modalHapusLomba-<?php echo e($item->id); ?>">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                        <?php echo $__env->make('admin.includes.lomba.modalHapusLomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('admin.includes.lomba.modalEditLomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('admin.includes.lomba.modalLihatLomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('admin.includes.lomba.modalSetujuLomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Tabel Lomba -->
    </div>
    <?php echo $__env->make('admin.includes.lomba.modalTambahLomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End Card Manajemen Lomba -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    
    <script type="text/javascript" src=" <?php echo e(asset('admins/js/plugins/jquery.dataTables.min.js')); ?> "></script>
    <script type="text/javascript" src="<?php echo e(asset('admin/js/plugins/dataTables.bootstrap.min.js')); ?>"></script>
    <script type="text/javascript">
        $('#tabelLomba').DataTable({
            "lengthMenu": [5, 10, 20, 30, 50],
            "pageLength": 5
        });
    </script>
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/admin/lomba.blade.php ENDPATH**/ ?>