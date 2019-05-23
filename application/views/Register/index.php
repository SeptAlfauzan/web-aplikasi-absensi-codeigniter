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
    <div class="col-lg-6 col-md-6 p-3 m-auto text-center">
        <h3>Registrasi Akun Baru</h3>
        <div class="col-lg-8 m-auto  p-5 rounded shadow-lg">
            <!-- set alert -->
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Registrasi anda <b><?= $this->session->flashdata('flash') ?></b>
                </div>
            <?php endif; ?>
            <!-- end alert -->
            <span>Masukkan Data Diri Anda</span>
            <form method="POST" action="<?= base_url() ?>register/registerSiswa">
                <div class="form-group">
                    <input type="text" autocomplete="off" class="form-control border border-info border-top-0 border-left-0 border-right-0" placeholder=" Nama" name="nama-siswa" required>
                    <select class="form-control border border-info border-top-0 border-left-0 border-right-0" name="jenis-kelamin" required>
                        <option value="">Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>

                    <select class="form-control border border-info border-top-0 border-left-0 border-right-0" name="kelas" required>
                        <option value="">Kelas</option>
                        <option value="10">X</option>
                        <option value="11">XI</option>
                        <option value="12">XII</option>
                    </select>
                    <select class="form-control border border-info border-top-0 border-left-0 border-right-0" name="id-sekolah" required>
                        <option value="">Sekolah</option>
                        <?php foreach ($sekolah as $dataSekolah) { ?>
                            <option type=value="<?= $dataSekolah['id-sekolah'] ?>"><?= $dataSekolah['nama-sekolah'] ?></option>
                        <?php } ?>
                    </select>
                    <select class="form-control border border-info border-top-0 border-left-0 border-right-0" name="id-kejuruan" required>
                        <option value="">Kejuruan</option>
                        <?php foreach ($kejuruan as $dataKejuruan) { ?>
                            <option type=value="<?= $dataKejuruan['id-kejuruan'] ?>"><?= $dataKejuruan['nama-kejuruan'] ?></option>
                        <?php } ?>
                    </select>
                    <input type="text" autocomplete="off" class="form-control border border-info border-top-0 border-left-0 border-right-0" placeholder=" Tempat lahir" name="tmp-lahir">
                    <input type="text" autocomplete="off" id="datepicker" class="form-control border border-info border-top-0 border-left-0 border-right-0" placeholder=" Tanggal lahir" name="tgl-lahir">
                </div>
                <button type="submit" class="btn btn-info badge-pill col-lg-4 pl-3 pr-3 text-center text-uppercase font-weight-bold">daftar</button>
            </form>
            <a href="<?= base_url() ?>" class="text-info text-right float-right mt-3">Kembali ke Form Absen</a>
        </div>
</body>
<script src="<?= base_url('dist/js/jquery-3.3.1.slim.min.js') ?>"></script>
<script src="<?= base_url('dist/plugin/bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('dist/plugin/datepicker/bootstrap-datepicker.js') ?>"></script>
<script src="<?= base_url('dist/js/popper.min.js') ?>"></script>
<script>
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
    })
</script>

</html>