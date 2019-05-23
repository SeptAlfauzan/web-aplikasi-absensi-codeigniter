<?php $this->load->view('TemplateAdmin/header.php') ?>
<!-- Main Menu area End-->
<!-- Start Status area -->

</head>
<a href="<?= base_url('siswa_terdaftar/refresh') ?>" id="notification"></a>
<div class="data-table-area">
    <div class="container">
        <!-- <a id="notification" class="d-flex notifikasi" href="<?= base_url() ?>DataSiswa/changeNewStatus" style="position: fixed;z-index: 2; margin:0 auto; cursor: pointer;">
        </a> -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- set alert -->
                <?php if ($this->session->flashdata('flash')) : ?>
                    <?php $this->session->flashdata('flash') == 'Berhasil Dihapus' ? $tipe = "warning" : $tipe = "success"; ?>
                    <div class="alert alert-<?= $tipe; ?> alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Data <?= $this->session->flashdata('flash') ?>
                    </div>
                <?php endif; ?>
                <!-- end alert -->
                <div class="data-table-list">
                    <div class="basic-tb-hd" style="padding: 10px 20px; border-bottom: 2px solid #009688; margin-bottom: 10px 0 10px 0;">
                        <!-- <?= var_dump($dataSiswa) ?> -->
                        <h2><i class="fas fa-users"></i> Daftar siswa</h2>
                    </div>
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($dataSiswa as $siswa) : ?>
                                    <tr>
                                        <td class="">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <label for="nama">Nama: </label>
                                                    <?= $siswa['nama-siswa'] ?><br>
                                                    <label for="jk">Jenis kelamin: </label><?= $siswa['jenis-kelamin'] ?><br>
                                                    <label for="tempat tanggal lahir">Tempat, tanggal lahir: </label><?= $siswa['tempat-lahir'] ?>, <?= $siswa['tanggal-lahir'] ?><br>
                                                    <label for="sekolah">Sekolah: </label>
                                                    <?= $siswa['nama-sekolah'] ?><br>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <label for="id">ID: </label>
                                                    <?= $siswa['id-siswa'] ?><br>
                                                    <label for="password" id="passwordBaru">Password:
                                                        <?= $siswa['password-siswa'] ?></label>
                                                    <br>
                                                    <label for="ip">Kejuruan:</label>
                                                    <?= $siswa['nama-kejuruan'] ?><br>
                                                </div>
                                            </div>
                                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="padding: 0;">
                                                <div style="padding: 0; display: inline-block">
                                                    <a href="<?= base_url('siswa_terdaftar/repassword/' . $siswa['id-siswa']) ?>" class="btn btn-success stretched-link badge-pill" data-id="">reset password</a>
                                                </div>
                                                <?php if ($siswa['status-aktivasi'] == 0) : ?>
                                                    <div style="padding: 0; display: inline-block">
                                                        <a href="<?= base_url('siswa_terdaftar/aktivasi/' . $siswa['id-siswa']) ?>" class="btn btn-warning stretched-link badge-pill" data-id="">aktivasi</a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                                <a href="<?= base_url('siswa_terdaftar/delete/' . $siswa['id-siswa']) ?>" class="text-danger" id="hapusSiswa" data-id="" name=""><i class="fas fa-trash-alt fa-1x hapus" style="float: right"></i></a>
                                            </div>
                                        </td>
                                    <?php endforeach; ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Realtime sts area-->
<!-- Start Footer area-->
<?php $this->load->view('TemplateAdmin/footer.php') ?>