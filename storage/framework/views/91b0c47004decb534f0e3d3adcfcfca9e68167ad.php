<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="app-menu__icon bi bi-people"></i> Manajemen Mahasiswa</h1>
            <p>Laman untuk manajemen data mahasiswa</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
            <li class="breadcrumb-item"><a href="/mahasiswa">Manajemen Mahasiswa</a></li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="table-responsive p-3">
                        <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal"
                            data-bs-target="#modalTambahMahasiswa">
                            Tambah <i class="bi bi-plus-square"></i>
                        </button>

                        <?php echo $__env->make('admin.includes.mahasiswa.modalTambahMahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <?php if(session('sukses')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session('sukses')); ?>

                            </div>
                        <?php endif; ?>
                        <table class="table table-bordered" id="tabelMahasiswa">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NPM</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($index + 1); ?></th>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->username); ?></td>
                                        <td><?php echo e($item->jurusan); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td><?php echo e($item->gender); ?></td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <div class="btn-group fs-5">
                                                    <button type="button" class="btn btn-sm btn-warning"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalEditMahasiswa-<?php echo e($item->id); ?>">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalHapus-<?php echo e($item->id); ?>">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        <?php echo $__env->make('admin.includes.mahasiswa.modalHapusMahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                        <?php echo $__env->make('admin.includes.mahasiswa.modalEditMahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                            </tbody>
                        </table>
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
            $('#tabelMahasiswa').DataTable({
                "lengthMenu": [5, 10, 20, 30, 50],
                "pageLength": 5
            });
        </script>
        </script>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/admin/mahasiswa.blade.php ENDPATH**/ ?>