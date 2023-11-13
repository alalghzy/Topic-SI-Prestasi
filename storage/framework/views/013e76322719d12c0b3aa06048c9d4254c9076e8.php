<!-- Modal Lihat Lomba-->
<div class="modal fade" id="modalLihatLomba-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Sertifikat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card border-danger">
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Tambahkan atribut "id" pada elemen gambar -->
                                    <img src="<?php echo e($item->sertifikat); ?>" class="img-fluid rounded" id="sertifikatImage" data-bs-toggle="modal" data-bs-target="#gambarmodal-<?php echo e($item->id); ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Fullscreen-->
<div class="modal fade" id="gambarmodal-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lihat Sertifikat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="d-flex justify-content-center">
                    <img src="<?php echo e($item->sertifikat); ?>" class="img-fluid">
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-dark" data-bs-target="#modalLihatLomba-<?php echo e($item->id); ?>" data-bs-toggle="modal"><i class="bi bi-chevron-left"></i></button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/mahasiswa/includes/lomba/modalLihatLomba.blade.php ENDPATH**/ ?>