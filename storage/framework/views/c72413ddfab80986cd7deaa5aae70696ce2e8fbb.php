<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('admins/css/main.css')); ?> ">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Reset Password Akun</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h2
                style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                Reset Password
            </h2>
        </div>
        <?php if(session('sukses')): ?>
            <div class="bs-component">
                <div class="alert alert-dismissible alert-success">
                    <button class="btn-close" type="button" data-bs-dismiss="alert"></button><?php echo e(session('sukses')); ?>

                </div>
            </div>
        <?php endif; ?>
        <?php if(session('eror')): ?>
        <div class="bs-component">
            <div class="alert alert-dismissible alert-danger">
                <button class="btn-close" type="button" data-bs-dismiss="alert"></button><?php echo e(session('eror')); ?>

            </div>
        </div>
        <?php endif; ?>
        <div class="login-box">
            <form class="login-form" action="<?php echo e(route('password_reset')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <input type="hidden" name="token" value="<?php echo e($token); ?>">
                    <label class="form-label">Email</label>
                    <div class="wrap-input100 validate-input input-group">
                        <span class="input-group-text bg-white text-muted">
                            <i class="bi bi-envelope"></i>
                        </span>
                        <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            value="<?php echo e($email ?? old('email')); ?>">
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
                <div class="mb-3">
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
unset($__errorArgs, $__bag); ?>" name="password"
                            type="password" placeholder="Masukkan password yang baru" value="<?php echo e(old('password')); ?>">
                        <span class="text-danger">
                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
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
                            name="password_confirmation" type="password" placeholder="Masukkan kembali password"
                            value="<?php echo e(old('password_confirmation')); ?>">
                        <span class="text-danger">
                            <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </span>
                    </div>
                </div>
                <div class="mb-3 btn-container d-grid">
                    <button class="btn btn-primary btn-block">
                        <i class="bi bi-unlock me-2 fs-5"></i>Reset
                    </button>
                </div>
            </form>
        </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src=" <?php echo e(asset('admins/js/jquery-3.7.0.min.js')); ?> "></script>
    <script src="<?php echo e(asset('admins/js/bootstrap.min.js')); ?>  "></script>
    <script src="<?php echo e(asset('admins/js/main.js')); ?>  "></script>
    <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>

        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        <?php if(Session::has('eror')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: "<?php echo e(Session::get('eror')); ?>",
                showConfirmButton: true,
            });
        <?php endif; ?>

        <?php if(Session::has('sukses')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: "<?php echo e(Session::get('sukses')); ?>",
                showConfirmButton: false,
                timer: 2000
            });
        <?php endif; ?>
    </script>

</body>

</html>
<?php /**PATH C:\laragon\www\si-tubes-prestasi\resources\views/auth/reset_password.blade.php ENDPATH**/ ?>