
<?php $__env->startSection('title', 'Berita'); ?>


<?php $__env->startSection('content'); ?>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Berita Prestasi</h1>
                    <a href="" class="h5 text-white">Fakultas Teknik</a>
                    <a href="" class="h5 text-white">Universitas Bengkulu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->



    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 col-md-6-center">

            <?php if($posts->count()): ?>
                <div class="mb-3 text-center">
                    <img src="<?php echo e(asset ($posts[0]->photo)); ?>" class="card-img-top" style="width: 50%" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($posts[0]->title); ?></h5>
                        <p class="card-text"><?php echo e($posts[0]->body); ?></p>
                        <p class="card-text"><small class="text-muted"><?php echo e($posts[0]->created_at->diffForHumans()); ?></small></p>
                        <a href="postingan/<?php echo e($posts[0]->id); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            <?php else: ?>
            <div class="text-center">
                <p>Tidak Ada Berita Ditemukan</p>
            </div>
            <?php endif; ?>


                <div class="container">
                    <div class="row">
                    <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 text-center">
                            <div class="card">   
                                <img src="<?php echo e(asset ($post->photo)); ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo e($post->title); ?></h5>
                                        <p class="card-text"><?php echo e($post->body); ?></p>
                                        <p class="card-text text-end"><small class="text-muted"><?php echo e($post->created_at->diffForHumans()); ?></small></p>
                                    <a href="postingan/<?php echo e($post->id); ?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>  
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                
                    </div>                   
                </div>
                <?php echo e($posts->links()); ?>

            </div>
        </div>
    </div>  
    
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts_landingpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/landingpage/postingan.blade.php ENDPATH**/ ?>