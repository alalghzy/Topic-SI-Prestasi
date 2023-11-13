<!-- Modal Edit Prestasi -->
<div class="modal fade" id="modalEditPrestasi-<?php echo e($item->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Prestasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <form class="row g-3" action="/update_prestasi/<?php echo e($item->id); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="col-md-6 mb-1">
                            <label class="form-label">Nama</label>
                            <input type="text" name="name"
                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name', $item->name)); ?>">
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

                        <div class="col-md-6 mb-1">
                            <label class="form-label">NPM</label>
                            <input type="text" name="npm" class="form-control <?php $__errorArgs = ['npm'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            value="<?php echo e(old('npm', $item->npm)); ?>">
                            <?php $__errorArgs = ['npm'];
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
                        <div class="input-group col-12 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Jurusan</label>
                            </div>
                            <select name="jurusan" class="form-control <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <option value="<?php echo e(old('jurusan', $item->jurusan)); ?>"> <?php echo e(old('jurusan', $item->jurusan)); ?></option>
                                <option value="Informatika" <?php if(old('jurusan') == 'Informatika'): ?> selected <?php endif; ?>>
                                    Informatika</option>
                                <option value="Teknik Sipil" <?php if(old('jurusan') == 'Teknik Sipil'): ?> selected <?php endif; ?>>
                                    Teknik Sipil</option>
                                <option value="Teknik Elektro" <?php if(old('jurusan') == 'Teknik Elektro'): ?> selected <?php endif; ?>>
                                    Teknik Elektro</option>
                                <option value="Teknik Mesin" <?php if(old('jurusan') == 'Teknik Mesin'): ?> selected <?php endif; ?>>
                                    Teknik Mesin</option>
                                <option value="Arsiterktur" <?php if(old('jurusan') == 'Arsitektur'): ?> selected <?php endif; ?>>
                                    Arsitektur</option>
                                <option value="Sistem Informasi" <?php if(old('jurusan') == 'Sistem Informasi'): ?> selected <?php endif; ?>>
                                    Sistem Informasi</option>
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

                        <div class="col-12 mb-1">
                            <label class="form-label">Nama Lomba</label>
                            <input type="text" name="lomba"
                                class="form-control  <?php $__errorArgs = ['lomba'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('lomba', $item->lomba)); ?>">
                            <?php $__errorArgs = ['lomba'];
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

                        <div class="col-12 mb-1">
                            <label class="form-label">Perolehan Prestasi</label>
                            <input type="text" name="juara"
                                class="form-control  <?php $__errorArgs = ['juara'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('juara', $item->juara)); ?>">
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

                        <div class="input-group col-8 mb-1">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Tingkatan</label>
                            </div>
                            <select class="form-control <?php $__errorArgs = ['tingkat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tingkat">
                                <option value="<?php echo e(old('tingkat', $item->tingkat)); ?>"><?php echo e(old('tingkat', $item->tingkat)); ?></option>
                                <option value="Desa/Lurah" <?php if(old('tingkat') == 'Desa/Lurah'): ?> selected <?php endif; ?>>
                                    Desa/Lurah</option>
                                <option value="Kecamatan" <?php if(old('tingkat') == 'Kecamatan'): ?> selected <?php endif; ?>>
                                    Kecamatan</option>
                                <option value="Kota/Kabupaten" <?php if(old('tingkat') == 'Kota/Kabupaten'): ?> selected <?php endif; ?>>
                                    Kota/Kabupaten</option>
                                <option value="Provinsi" <?php if(old('tingkat') == 'Provinsi'): ?> selected <?php endif; ?>>Provinsi
                                </option>
                                <option value="Nasional" <?php if(old('tingkat') == 'Nasional'): ?> selected <?php endif; ?>>
                                    Nasional</option>
                                <option value="Internasional" <?php if(old('tingkat') == 'Internasional'): ?> selected <?php endif; ?>>
                                    Internasional</option>
                            </select>
                            <?php $__errorArgs = ['tingkat'];
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

                        <div class="col-8">
                            <label class="form-label">Penyelenggara</label>
                            <input type="text" name="penyelenggara"
                                class="form-control <?php $__errorArgs = ['penyelenggara'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                value="<?php echo e(old('penyelenggara', $item->penyelenggara)); ?>">
                            <?php $__errorArgs = ['penyelenggara'];
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

                        <div class="col-4">
                            <label for="date" class="form-label">Tanggal</label>
                            <input class="form-control <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" type="date"
                                name="date" value="<?php echo e($item->tanggal); ?>" id="date">
                            <?php $__errorArgs = ['tanggal'];
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
                        <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                                    class="bi bi-chevron-left"></i> Kembali</button>
                            <button type="submit" class="btn btn-success"><i class="bi bi-check2"></i> Simpan</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/admin/includes/prestasi/modalEditPrestasi.blade.php ENDPATH**/ ?>