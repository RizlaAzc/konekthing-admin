-
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?= base_url('dashboard') ?>"><img style="width: 35px; margin-bottom: 10px;" src="<?= base_url('assets/gambar/logo.png') ?>"><i style="font-size: 18px; margin-left: 5px;">Konekthing Admin</i></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?= $login['nama']; ?><img src="<?= base_url('assets/img/profile/') . $login['image']; ?>" class="img-profile rounded-circle" style="width: 50px; margin-left: 10px;"></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('visitor') ?>"><i class="fa-solid fa-chart-line"></i> Activity Log</a></li>
                    <li><a class="dropdown-item" href="<?= base_url('settings') ?>"><i class="fa-solid fa-gear"></i> Settings</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?= base_url('forms/logout'); ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Profile</div>
                        <a <?= $this->uri->segment(2) == 'my_profile' || $this->uri->segment(2) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('profile/my_profile') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-user-tie"></i></i></div>
                            My Profile
                        </a>
                        <a <?= $this->uri->segment(2) == 'edit_profile' || $this->uri->segment(2) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('profile/edit_profile') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-pen-to-square"></i></i></div>
                            Edit Profile
                        </a>
                        <div class="sb-sidenav-menu-heading">Other</div>
                        <a class="nav-link" href="<?= base_url('dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-backward"></i></div>
                            Return
                        </a>
                    </div>
                </div>
            </nav>
        </div>