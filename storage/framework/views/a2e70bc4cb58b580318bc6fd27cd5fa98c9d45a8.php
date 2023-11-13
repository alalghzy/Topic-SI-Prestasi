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
    <title>Login SI Prestasi</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">
        <div class="logo">
            <h1
                style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif">
                SI Prestasi</h1>
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
            <form class="login-form" action="<?php echo e(url('proses_login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h3 class="login-head"><i class="bi bi-person me-2"></i>Login Akun</h3>
                <div class="mb-3">
                    <label class="form-label">NPM</label>
                    <input type="text" name="username" value="<?php echo e(old('username')); ?>"
                        class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        placeholder="Masukkan NPM yang valid" autofocus>
                    <?php $__errorArgs = ['username'];
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
                <div class="mb-3">
                    <label class="form-label">PASSWORD</label>
                    <input type="password" name="password" value="<?php echo e(old('password')); ?>"
                        class="form-control mb <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Masukkan password">
                    <?php $__errorArgs = ['password'];
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
                <div class="mb-3">
                    <div class="utility">
                        <p class="semibold-text mb-2"><a href="#" data-bs-toggle="modal" data-bs-target="#modalRegister">Daftar Akun</a></p>
                        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Lupa Password?</a></p>
                    </div>
                </div>
                <div class="mb-3 btn-container d-grid">
                    <button class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>
                        Login</button>
                </div>
            </form>
            <form class="forget-form" action="<?php echo e(route('send_request_reset')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <h3 class="login-head"><i class="bi bi-person-lock me-2"></i>Lupa Password</h3>
                <div class="mb-3">
                    <label class="form-label">EMAIL</label>
                    <input class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('email')); ?>"
                        type="email" name="email" placeholder="Masukkan email akun">
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
                <div class="mb-3 btn-container d-grid">
                    <button class="btn btn-primary btn-block"><i class="bi bi-unlock me-2 fs-5"></i>Reset</button>
                </div>
                <div class="mb-3 mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i
                                class="bi bi-chevron-left me-1"></i> Kembali ke Login Akun</a></p>
                </div>
            </form>
        </div>
        <?php echo $__env->make('auth.includes.modalRegister', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
</body>

</html>
<?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/auth/login.blade.php ENDPATH**/ ?>