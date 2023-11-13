<?php $__env->startSection('content'); ?>
    <div class="app-title">
        <div>
            <h1><i class="bi bi-person-lines-fill"></i> Profil Mahasiswa</h1>
            <p>Laman untuk mengatur profil mahasiswa</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><a href="/admin"><i class="bi bi-house-door fs-6"></i></a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('admin_profil', Auth::user()->id)); ?>">Profil</a></li>
        </ul>
    </div>

    <div class="row">
        <div class="col-xl-4 mb-3 mt-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Gambar Profil</h3>
                </div>
                <form action="<?php echo e(route('mahasiswa_update_profil', ['id' => $data->id])); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="text-center chat-image mb-3">
                            <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                <?php if(Auth::user()->profil != 0): ?>
                                    <img class=""
                                        style="width: 300px;  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3); border-radius: 10px; background-size: cover;"
                                        src="<?php echo e(asset(Auth::user()->profil)); ?>">
                                <?php else: ?>
                                    <img class="" style="border: 1px solid #ffffff;"
                                        src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
                                <?php endif; ?>
                            </div>
                            <hr>
                            <div class="main-chat-msg-name me-4">
                                <h5 class="mb-1 text-dark fw-semibold"><?php echo e(Auth::user()->name); ?></h5>
                                <p class="text-muted mt-0 mb-0 pt-0 fs-13"><?php echo e(Auth::user()->level); ?></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input class="form-control" id="formFile" name="profil" type="file">
                            <small style="color: gray">Disarankan untuk gambar ukuran 3:4 | Maks. 2Mb | png, jpg, jpeg</small>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xl-8 mt-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profil</h3>
                </div>
                <form action="<?php echo e(route('mahasiswa_update_profil', ['id' => $data->id])); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label class="form-label">Nama</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-badge"></i>
                                </span>
                                <input type="text" name="name" class="form-control" value="<?php echo e($data->name); ?>">
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
unset($__errorArgs, $__bag); ?>" value="<?php echo e($data->email); ?>">
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
                            <label class="form-label">Jenis Kelamin</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="gender" class="form-control">
                                    <option><?php echo e($data->gender); ?></option>
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
                            <label class="form-label">Jurusan</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-chevron-double-right"></i>
                                </span>
                                <select name="jurusan" class="form-control <?php $__errorArgs = ['jurusan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                    <option><?php echo e($data->jurusan); ?></option>
                                    <option value="Informatika" <?php if(old('jurusan') == 'Informatika'): ?> selected <?php endif; ?>>
                                        Informatika
                                    </option>
                                    <option value="Teknik Sipil" <?php if(old('jurusan') == 'Teknik Sipil'): ?> selected <?php endif; ?>>Teknik
                                        Sipil
                                    </option>
                                    <option value="Teknik Elektro" <?php if(old('jurusan') == 'Teknik Elektro'): ?> selected <?php endif; ?>>Teknik
                                        Elektro
                                    </option>
                                    <option value="Teknik Mesin" <?php if(old('jurusan') == 'Teknik Mesin'): ?> selected <?php endif; ?>>Teknik
                                        Mesin
                                    </option>
                                    <option value="Arsiterktur" <?php if(old('jurusan') == 'Arsitektur'): ?> selected <?php endif; ?>>Arsitektur
                                    </option>
                                    <option value="Sistem Informasi" <?php if(old('jurusan') == 'Sistem Informasi'): ?> selected <?php endif; ?>>
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
                            <label class="form-label">NPM</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-person-lock"></i>
                                </span>
                                <input type="text" name="username" readonly
                                    class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="<?php echo e($data->username); ?>">
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
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <div class="wrap-input100 validate-input input-group">
                                <span class="input-group-text bg-white text-muted">
                                    <i class="bi bi-key"></i>
                                </span>
                                <input class="input100 form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                    value="" name="password" type="password">
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

                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/mahasiswa/profil.blade.php ENDPATH**/ ?>