<?php $__env->startSection('title', 'Beranda'); ?>


<?php $__env->startSection('content'); ?>

        <div >
            <div>
                <div>
                    
                    <?php if($posts->count()): ?>
                    <img class="w-100" src="img/ft-unib.jpg" alt="Image" style="height: 100vh;">
                    
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white text-uppercase mb-3 animated slideInDown"><?php echo e($posts[0]->title); ?></h3>
                            <h4 class=" text-white mb-md-4 animated zoomIn"><?php echo e($posts[0]->body); ?></h4>
                            <a href="postingan/<?php echo e($posts[0]->id); ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Baca Selanjutnya</a>
                        </div>
                    </div>
                    <?php else: ?>
                    <img class="w-100" src="img/ft-unib.jpg" alt="Image" style="height: 100vh;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Tidak Ada Berita Ditemukan</h5>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts_landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/landingpage/home.blade.php ENDPATH**/ ?>