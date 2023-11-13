<!-- Modal Edit Mahasiswa -->
<div class="modal fade" id="modalEditMahasiswa-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Edit Data Mahasiswa
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="<?php echo e(route('update_mahasiswa', ['id' => $item->id])); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group mb-3">
                            <label class="form-label">Nama</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-badge"></i>
                                </span>
                                <input type="text" name="name"
                                    class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($item->name); ?>"
                                    placeholder="Isi dengan nama lengkap" required>
                                <?php $__errorArgs = ['name'];
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
                            <label class="form-label">Jurusan</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="jurusan"
                                    class="form-control <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option selected><?php echo e($item->jurusan); ?></option>
                                    <option value="Informatika"
                                        <?php if(old('jurusan') == 'Informatika'): ?> selected <?php endif; ?>>
                                        Informatika
                                    </option>
                                    <option value="Teknik Sipil"
                                        <?php if(old('jurusan') == 'Teknik Sipil'): ?> selected <?php endif; ?>>Teknik
                                        Sipil
                                    </option>
                                    <option value="Teknik Elektro"
                                        <?php if(old('jurusan') == 'Teknik Elektro'): ?> selected <?php endif; ?>>Teknik
                                        Elektro
                                    </option>
                                    <option value="Teknik Mesin"
                                        <?php if(old('jurusan') == 'Teknik Mesin'): ?> selected <?php endif; ?>>Teknik
                                        Mesin
                                    </option>
                                    <option value="Arsiterktur"
                                        <?php if(old('jurusan') == 'Arsitektur'): ?> selected <?php endif; ?>>Arsitektur
                                    </option>
                                    <option value="Sistem Informasi"
                                        <?php if(old('jurusan') == 'Sistem Informasi'): ?> selected <?php endif; ?>>
                                        Sistem
                                        Informasi
                                    </option>
                                </select>
                                <?php $__errorArgs = ['jurusan'];
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
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="gender" class="form-control" required>
                                    <option selected><?php echo e($item->gender); ?></option>
                                    <option value="Laki-Laki" <?php if(old('gender') == 'Laki-Laki'): ?> selected <?php endif; ?>>
                                        Laki-Laki</option>
                                    <option value="Perempuan" <?php if(old('gender') == 'Perempuan'): ?> selected <?php endif; ?>>
                                        Perempuan</option>
                                </select>
                                <?php $__errorArgs = ['gender'];
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
                            <label class="form-label">Email</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="email" name="email"
                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e($item->email); ?>" placeholder="Isi dengan email yang valid" required>
                                <?php $__errorArgs = ['email'];
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
                            <label class="form-label">NPM</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-lock"></i>
                                </span>
                                <input type="text" name="username"
                                    class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e($item->username); ?>" placeholder="Isi dengan NPM/NIM yang valid" required>
                                <?php $__errorArgs = ['email'];
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
                        <div class="modal-footer mt-3">
                            <button type="reset" class="btn btn-secondary"
                                data-bs-dismiss="modal"><i class="bi bi-chevron-left"></i> Kembali</button>
                            <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i>  Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/admin/includes/mahasiswa/modalEditMahasiswa.blade.php ENDPATH**/ ?>