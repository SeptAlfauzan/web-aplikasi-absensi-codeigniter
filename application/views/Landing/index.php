<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>dist/plugin/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="col-lg-6 col-md-6 p-3 m-auto text-center" style="padding-top: 100px !important">
        <h3>Web Aplikasi Absensi</h3>
        <div class="col-lg-8 m-auto p-5 rounded shadow-lg">
            <?php if ($this->session->flashdata('flash')) : ?>
                <?php if ($this->session->flashdata('flash') == 'Gagal' || $this->session->flashdata('flash') == 'Telat') : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Absen anda <b><?= $this->session->flashdata('flash') ?></b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button>
                    </div>
                <?php elseif ($this->session->flashdata('flash') == 'Berhasil') : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Absen anda <b>berhasil</b>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php else : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Absen anda gagal karena akun anda <b>belum diaktivasi</b> oleh admin
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <span>Masukkan Data Diri Anda</span>
            <form class="form-absen" method="post" action="<?= base_url('landing/getLogin') ?>">
                <div class="form-group">
                    <input type="text" class="form-control border border-info border-top-0 border-left-0 border-right-0" placeholder="Username" name="username" autocomplete="off">
                    <input type="password" class="form-control border border-info border-top-0 border-left-0 border-right-0" placeholder="Password" name="password" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-info badge-pill col-lg-4 pl-3 pr-3 text-center text-uppercase font-weight-bold button-absen">absen</button>
            </form>
            <a href="<?= base_url() ?>register" class="text-info text-right float-right mt-3">Belum punya akun?</a>
            <!-- <a href="<?= base_url() ?>login_admin" class="text-info text-right float-right mt-3">Anda admin?</a> -->
        </div>
</body>
<!-- <script src="<?= base_url('dist/plugin/bootstrap/js/bootstrap.min.js') ?>"></script> -->
<script src="<?= base_url('dist/js/jquery-3.3.1.slim.min.js') ?>"></script>
<script src="<?= base_url('dist/js/popper.min.js') ?>"></script>

</html>