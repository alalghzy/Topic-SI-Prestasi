<!-- Modal Lihat Lomba-->
<div class="modal fade" id="modalSetujuLomba-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Perolehan Prestasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if($item->status == 'Disetujui'): ?>
<button class="btn btn-warning">
    Data sudah dikonfirmasi!
</button>
                <?php else: ?>
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="row g-3"
                                            action="<?php echo e(route('konfirmasi_lomba', ['id' => $item->id])); ?>" method="POST"
                                            enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group mb-3">
                                                <label class="form-label" for="namelomba">Perolehan Prestasi</label>
                                                <div class="wrap-input100 validate-input input-group">
                                                    <span class="input-group-text bg-white text-muted">
                                                        <i class="icon bi bi-trophy"></i>
                                                    </span>
                                                    <input type="text" name="juara"
                                                        class="form-control <?php $__errorArgs = ['juara'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        value="<?php echo e(old('juara')); ?>"
                                                        placeholder="Masukkan Perolehan Prestasi" required>
                                                    <?php $__errorArgs = ['juara'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback">
                                                            <?php echo e($message); ?>

                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label class="form-label">Status</label>
                                                <div class="wrap-input100 validate-input input-group">
                                                    <span class="input-group-text bg-white text-muted">
                                                        <i class="bi bi-chevron-double-right"></i>
                                                    </span>
                                                    <select name="status" class="form-control" required>
                                                        
                                                        <option value="Disetujui"
                                                            <?php if(old('status') == 'Disetujui'): ?> selected <?php endif; ?>>
                                                            Disetujui</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer mt-3">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                        class="bi bi-chevron-left"></i> Kembali</button>
                <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i> Simpan</button>
            </div>
            </form>
            <?php endif; ?>


        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/admin/includes/lomba/modalSetujuLomba.blade.php ENDPATH**/ ?>