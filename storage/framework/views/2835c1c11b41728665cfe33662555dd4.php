<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('admin.dashboard.index')); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('users.index')); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data Admin</span></a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('admin.cars.index')); ?>">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Daftar Mobil</span></a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('admin.messages.index')); ?>">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span>Daftar Pesan</span></a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('pelanggan.index')); ?>">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span>Data Pelanggan</span></a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo e(route('transaksi.index')); ?>">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span>Data Transaksi</span></a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" onclick="document.getElementById('logout-form').submit()" href="#">
                    <i class="fas fa-key fa-fw"></i>
                    <span>Logout</span></a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                    </form>
            </li>
            <hr class="sidebar-divider">
            
</ul><?php /**PATH C:\xampp\htdocs\KUIS\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>