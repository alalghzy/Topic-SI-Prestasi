<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="icon bi bi-award"></i> Manajemen Lomba</h1>
            <p>Laman untuk manajemen data lomba</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/user"><i class="bi bi-house-door fs-6"></i></a></li>
            <li class="breadcrumb-item"><a href="/user_lomba">Manajemen Lomba</a></li>
        </ul>
    </div>
    <div class="container-fluid">

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

                        <!-- Tabel Lomba -->
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
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-warning rounded text-center"
                                                        data-bs-toggle="dropdown" aria-expanded="true">
                                                        <i class="bi bi-exclamation-triangle"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><span class="dropdown-item"> Belum Disetujui </span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        <?php else: ?>
                                            <td class="text-center">
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-success rounded text-center"
                                                        data-bs-toggle="dropdown" aria-expanded="true">
                                                        <i class="bi bi-check2-all"></i>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><span class="dropdown-item"> Disetujui </span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        <?php endif; ?>

                                        <?php if($item->status == 'Tidak Disetujui'): ?>
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
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalHapusLomba-<?php echo e($item->id); ?>">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        <?php else: ?>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                                        data-bs-target="#modalLihatLomba-<?php echo e($item->id); ?>">
                                                        <i class="bi bi-eye"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        <?php endif; ?>


                                        <?php echo $__env->make('mahasiswa.includes.lomba.modalHapusLomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('mahasiswa.includes.lomba.modalEditLomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('mahasiswa.includes.lomba.modalLihatLomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <!-- End Tabel Lomba -->
                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('mahasiswa.includes.lomba.modalTambahLomba', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layouts.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/mahasiswa/lomba.blade.php ENDPATH**/ ?>