<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-speedometer"></i> Dashboard </h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
        </ul>
    </div>

    <div class="row">

        <div class="">
            <div class="widget-small warning coloured-icon"><i style="color: black" class="icon bi bi-chat-right-quote fs-1"></i>
                <div class="info">
                    <h1>Selamat Datang, <?php echo e(Auth::user()->name); ?>! 👋🤙</h1>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-3">
            <div class="widget-small success coloured-icon"><i class="icon bi bi-award fs-1"></i>
                <div class="info">
                    <a href="<?php echo e(route('user_lomba')); ?>">
                        <p class="btn btn-light mt-2">Manajemen Lomba</p>
                    </a></br>

                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon bi bi-trophy fs-1"></i>
                <div class="info">
                    <a href="<?php echo e(route('user_prestasi')); ?>">
                        <p class="btn btn-light mt-2">Perolehan Prestasi</p>
                    </a></br>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/mahasiswa/dashboard.blade.php ENDPATH**/ ?>