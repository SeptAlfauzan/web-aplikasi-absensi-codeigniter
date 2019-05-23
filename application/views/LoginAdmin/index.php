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
    <div class="col-lg-6 p-3 m-auto text-center" style="padding-top: 100px !important">
            <h3>Login Admin Web Aplikasi Absensi</h3>
            <div class="col-lg-8 m-auto p-5 rounded shadow-lg">
                    <?php if ($this->session->flashdata('flash')) : ?>
                        <?php $this->session->flashdata('flash') == 'Gagal' ? $tipe = "danger" : $tipe = "warning"; ?>
                        <div class="alert alert-<?= $tipe; ?> alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Login <b><?= $this->session->flashdata('flash') ?></b>! silahkan cek kembali data anda.
                        </div>
                    <?php endif; ?>
            <span>Masukkan Data Diri Anda</span>
            <form method="post" action="<?= base_url('login_admin/getLogin') ?>">
                <div class="form-group">
                    <input type="text" class="form-control border border-info border-top-0 border-left-0 border-right-0" placeholder="Username" name="username" autocomplete="off">
                    <input type="password" class="form-control border border-info border-top-0 border-left-0 border-right-0" placeholder="Password" name="password" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-info badge-pill col-lg-4 pl-3 pr-3 text-center text-uppercase font-weight-bold">login</button>
            </form>
        </div>
</body>
<!-- <script src="<?= base_url('dist/plugin/bootstrap/js/bootstrap.min.js') ?>"></script> -->
<script src="<?= base_url('dist/js/jquery-3.3.1.slim.min.js') ?>"></script>
<script src="<?= base_url('dist/js/popper.min.js') ?>"></script>

</html>