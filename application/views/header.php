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
        <a class="navbar-brand ps-3" href="<?= base_url('dashboard') ?>">Konekthing Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Profile</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Main Navigation</div>
                        <a <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('dashboard') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a <?= $this->uri->segment(1) == 'visitor' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('visitor') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-eye"></i></div>
                            Visitor
                        </a>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Master
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('admin/layouts_staticnavigation') ?>">Static Navigation</a>
                                <a class="nav-link" href="<?= base_url('admin/layouts_lightsidenav') ?>">Light Sidenav</a>
                            </nav>
                        </div>
                        <a <?= $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == 'portofolio' || $this->uri->segment(1) == 'produk' || $this->uri->segment(1) == 'blog' || $this->uri->segment(1) == 'kontak' ? 'class="nav-link active"' : '' ?> class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsepages" aria-expanded="false" aria-controls="collapsepages">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            User
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div <?= $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == 'portofolio' || $this->uri->segment(1) == 'produk' || $this->uri->segment(1) == 'blog' || $this->uri->segment(1) == 'kontak' ? 'class="collapse-show"' : '' ?> class="collapse" id="collapsepages" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a <?= $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('beranda') ?>">Beranda</a>
                                <a <?= $this->uri->segment(1) == 'portofolio' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('portofolio') ?>">Portofolio</a>
                                <a <?= $this->uri->segment(1) == 'produk' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('produk') ?>">Produk</a>
                                <a <?= $this->uri->segment(1) == 'blog' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('blog') ?>">Blog</a>
                                <a <?= $this->uri->segment(1) == 'kontak' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('kontak') ?>">Kontak</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Other</div>
                        <a <?= $this->uri->segment(1) == 'settings' || $this->uri->segment(1) == '' ? 'class="nav-link active"' : '' ?> class="nav-link" href="<?= base_url('settings') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-gear"></i></div>
                            Settings
                        </a>
                    </div>
                </div>
            </nav>
        </div>