<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand text-decoration-none" href="index.html">
                <span class="align-middle">Mahesa Rental's</span>
            </a>

            <?php if ($user == 'admin') { ?>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Halaman Admin
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>/admin/index">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>/admin/profile">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Data
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>mobil">
                            <i class="align-middle" data-feather="menu"></i> <span class="align-middle">Kendaraan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>/kategori">
                            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Kategori</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>/home/">
                            <i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Pemesanan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>/home/">
                            <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Transaksi</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>pelanggan/index">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Akun</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>pelanggan/index">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Pelanggan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>/home">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Driver</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Pengaturan
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="<?= base_url(); ?>/home/">
                            <i class="align-middle" data-feather="lock"></i> <span class="align-middle">Ubah Password</span>
                        </a>
                    </li>

                    <li class="sidebar-item mb-5">
                        <a class="sidebar-link" href="<?= base_url(); ?>home/logout">
                            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Keluar</span>
                        </a>
                    </li>
                </ul>
            <?php } ?>

            <?php if ($user == 'wisnu') { ?>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Halaman Pelanggan
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Menu
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Pemesanan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Transaksi</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Pengaturan
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="lock"></i> <span class="align-middle">Ubah Password</span>
                        </a>
                    </li>

                    <li class="sidebar-item mb-5">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Keluar</span>
                        </a>
                    </li>
                </ul>
            <?php } ?>

            <?php if ($user == 'kevin') { ?>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Halaman Driver
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Menu
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Pemesanan</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Pengaturan
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="lock"></i> <span class="align-middle">Ubah Password</span>
                        </a>
                    </li>

                    <li class="sidebar-item mb-5">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Keluar</span>
                        </a>
                    </li>
                </ul>
            <?php } ?>

            <?php if ($user == 'owner') { ?>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Halaman Owner
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Data
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Pelanggan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Driver</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="menu"></i> <span class="align-middle">Mobil</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="menu"></i> <span class="align-middle">Motor</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">Kategori</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Pemesanan</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="dollar-sign"></i> <span class="align-middle">Transaksi</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Pengaturan
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="lock"></i> <span class="align-middle">Ubah Password</span>
                        </a>
                    </li>

                    <li class="sidebar-item mb-5">
                        <a class="sidebar-link" href="../dashboard/index.php">
                            <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Keluar</span>
                        </a>
                    </li>
                </ul>
            <?php } ?>
        </div>
    </nav>