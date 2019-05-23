<?php if (!$_SESSION['admin']) {
    redirect(base_url('login_admin/pageNotFound'));
} ?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Septa Alfauzan Absensi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/img/favicon.ico">
    <!-- Google Fonts
============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/bootstrap.min.css">
    <!-- Bootstrap CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/font-awesome.min.css">
    <!-- owl.carousel CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/owl.transitions.css">
    <!-- meanmenu CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/animate.css">
    <!-- normalize CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/normalize.css">
    <!-- mCustomScrollbar CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/notika-custom-icon.css">
    <!-- wave CSS
choose box
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/chosen/chosen.css">

    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/wave/waves.min.css">
    <!-- datapicker CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/datapicker/datepicker3.css">
    <!-- main CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>dist/css/main.css">
    <!-- style CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/style.css">
    <!-- responsive CSS
============================================ -->
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/responsive.css">
    <link rel="stylesheet" href="<?= base_url() ?>dist/plugin/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>template/notika-master/notika/green-horizontal/css/jquery.dataTables.min.css"> <!-- modernizr JS============================================-->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-10 col-xs-10">
                    <div class="logo-area">
                        <h4 style="color: white; margin-top: 10px">Dashboard Admin Aplikasi Absensi</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-2 col-xs-2">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><div style="border: 2px solid white; border-radius: 100%; padding: 5px; margin: auto;"><i class="fas fa-user"></i></div></a>
                                <div role="menu" class="dropdown-menu message-dd chat-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2><i class="fas fa-user"></i> <?= $_SESSION['namaAdmin'] ?></h2>
                                    </div>
                                    <div class="hd-message-info">
                                        <a href="#">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <!-- <h3>Dark Mode</h3> -->
                                                </div>
                                            </div>
                                        </a>
                                        <a href="<?= base_url('login_admin/logout') ?>">
                                            <div class="hd-message-sn">
                                                <div class="hd-mg-ctn">
                                                    <h3>Logout</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Main Menu area start-->
    <div class="mobile-menu-area" style="background-color: #00C292">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li>
                                    <a href="<?= base_url('dashboard') ?>"><i class="notika-icon notika-house"></i> Home</a>

                                </li>
                                <li>
                                    <a href="<?= base_url('siswa_terdaftar') ?>"><i class="fas fa-users"></i></i> Data Siswa</a>
                                </li>
                                <li>
                                    <div style="position: relative">
                                        <div class="countData"></div>
                                    </div>
                                    <a href="<?= base_url('riwayat_absen') ?>"><i class="fas fa-history"></i> Riwayat Absen</a>
                                </li>
                                <li>
                                    <!-- <div style="float: right">
<div class="spinner4 spinner-4"></div>
<div class="ntd-ctn"><span style="color: #fff">2</span></div>
</div> -->
                                    <a href="<?= base_url('sekolah_terdaftar') ?>"><i class="fas fa-school"></i> Sekolah Terdaftar</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('kejuruan') ?>"><i class="fas fa-graduation-cap"></i> Kejuruan</a>
                                </li>
                                <?php if ($_SESSION['operator']) : ?>
                                    <li>
                                        <a href="<?= base_url('admin') ?>"><i class="fas fa-user-secret"></i> Admin</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li>
                            <a href="<?= base_url('dashboard') ?>"><i class="notika-icon notika-house"></i> Home</a>

                        </li>
                        <li>
                            <a href="<?= base_url('siswa_terdaftar') ?>"><i class="fas fa-users"></i></i> Data Siswa</a>
                        </li>
                        <li>
                            <div style="position: relative">
                                <div class="countData"></div>
                            </div>
                            <a href="<?= base_url('riwayat_absen') ?>"><i class="fas fa-history"></i> Riwayat Absen</a>
                        </li>
                        <li>
                            <!-- <div style="float: right">
<div class="spinner4 spinner-4"></div>
<div class="ntd-ctn"><span style="color: #fff">2</span></div>
</div> -->
                            <a href="<?= base_url('sekolah_terdaftar') ?>"><i class="fas fa-school"></i> Sekolah Terdaftar</a>
                        </li>
                        <li>
                            <a href="<?= base_url('kejuruan') ?>"><i class="fas fa-graduation-cap"></i> Kejuruan</a>
                        </li>
                        <?php if ($_SESSION['operator']) : ?>
                            <li>
                                <a href="<?= base_url('admin') ?>"><i class="fas fa-user-secret"></i> Admin</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>