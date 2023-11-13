<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Informasi Prestasi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href=" <?php echo e(asset('admins/css/main.css')); ?> ">

    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">

    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        .sidebar-mini.sidenav-toggled .app-sidebar__user-avatar {
            width: 32px;
            height: 32px;
        }

        .app-sidebar__user-avatar {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            margin-right: 15px;
            width: 45px;
            height: 45px;
            background-size: cover;
            background-position: center;
        }

        .rounded-circle,.app-sidebar__user-avatar {
            border-radius: 100% !important;
        }
    </style>
</head>

<body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header">
        <a class="app-header__logo" href="/"
            style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">SI Prestasi</a>
        <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
            aria-label="Hide Sidebar"></a>
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <!-- User Menu-->
            <li class="dropdown"><a class="app-nav__item" href="#" data-bs-toggle="dropdown"
                    aria-label="Open Profile Menu"><i class="bi bi-person fs-4"></i></a>
                <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li><a class="dropdown-item" href="<?php echo e(route('mahasiswa_profil', Auth::user()->id)); ?>"><i
                                class="bi bi-person me-2 fs-5"></i>
                            Profil</a></li>
                    <li><a class="dropdown-item" href="<?php echo e(url('keluar')); ?>"><i
                                class="bi bi-box-arrow-right me-2 fs-5"></i>
                            Keluar</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user">
            <?php if(Auth::user()->profil != 0): ?>
                <img class="app-sidebar__user-avatar" style="border: 1px solid #ffffff; background-size: cover"
                    src="<?php echo e(asset(Auth::user()->profil)); ?>">
            <?php else: ?>
                <img class="app-sidebar__user-avatar " style="border: 1px solid #ffffff;"
                    src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
            <?php endif; ?>

            <div>
                <p class="app-sidebar__user-name"><?php echo e(Auth::user()->name); ?></p>
                <p class="app-sidebar__user-designation"><span
                        class="badge text-bg-warning"><?php echo e(Auth::user()->level); ?></span></p>
            </div>
        </div>
        <ul class="app-menu">
            <li>
                
                <a class="app-menu__item <?php echo e(Route::is('user') ? 'active' : ''); ?>" href="<?php echo e(route('user')); ?>">
                    <i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span>
                </a>
            </li>
            <br>
            <li>
                <a class="app-menu__item <?php echo e(Route::is('user_lomba') ? 'active' : ''); ?>" href="<?php echo e(route('user_lomba')); ?>">
                    <i class="app-menu__icon bi bi-award"></i><span class="app-menu__label">Manajemen Lomba</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item <?php echo e(Route::is('user_prestasi') ? 'active' : ''); ?>" href="<?php echo e(route('user_prestasi')); ?>">
                    <i class="app-menu__icon bi bi-trophy"></i><span class="app-menu__label">Perolehan Prestasi</span>
                </a>
            </li>
        </ul>
    </aside>
    <main class="app-content">

        <?php echo $__env->yieldContent('content'); ?>

    </main>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo e(asset('admins/js/jquery-3.7.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admins/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admins/js/main.js')); ?>"></script>


    <!-- Page specific javascripts-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    
    <script src="https://kit.fontawesome.com/f28fac3438.js" crossorigin="anonymous"></script>
    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\tubes-prestasi\resources\views/layouts/mahasiswa.blade.php ENDPATH**/ ?>