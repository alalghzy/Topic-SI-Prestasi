<!-- Modal Hapus -->
<div class="modal fade" id="modalHapus-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah Anda
                    ingin menghapus data <br><span
                        style="background-color: rgb(124, 3, 3); color: white; padding-left: 5px; padding-right: 5px"><?php echo e($item->name); ?></span>
                    ? </h1>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('admin.delete', $item->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-chevron-left"></i> Kembali</button>
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/admin/includes/mahasiswa/modalHapusMahasiswa.blade.php ENDPATH**/ ?>