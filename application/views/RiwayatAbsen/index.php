<?php $this->load->view('TemplateAdmin/header.php') ?>
<!-- Main Menu area End-->
<!-- Start Status area -->
<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>dist/css/main.css">

<!-- <link rel="stylesheet" type="text/css" href="/DataTables/datatables.css"> -->

<!-- <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script> -->

</head>
<div class="data-table-area">
    <div class="container">
        <!-- set alert -->
        <?php if ($this->session->flashdata('flash')) : ?>
            <?php $this->session->flashdata('flash') == 'Berhasil Dihapus' ? $tipe = "warning" : $tipe = "success"; ?>
            <div class="alert alert-<?= $tipe; ?> alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Data <?= $this->session->flashdata('flash') ?>
            </div>
        <?php endif; ?>
        <!-- end alert -->
        <div class="breadcomb-list" style="padding: 10px 20px; border-bottom: 2px solid #009688; margin-bottom: 10px 0 10px 0;">
            <h4 style="margin-top: 10px; display: inline-block"><i class="fas fa-history"></i> Riwayat Absen</h4>
            <!-- <button type="button" class="btn nk-teal" data-toggle="modal" data-target="#myModaltwo" style="display: inline-block; float: right; color: #fff"><i class="fas fa-file-download fa-2x"></i> As PDF</button> -->
        </div>
        <div class="row">
            <!-- <?= var_dump($absen) ?> -->
            <!-- modal cetak ke pdf -->
            <!-- <div class="modal fade" id="myModaltwo" role="dialog">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div style="border-bottom : 2px solid  #009688">
                            <h4>Download Dalam Format PDF</h4>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Semua Data</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Hari ini</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Kemarin</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Minggu ini</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Bulan ini</button>
                        </div>
                        <div>
                            <h6>Download Sesuai dengan Tanggal</h6>
                            <form method="post" action="">
                                <input type="text" class="form-control border border-info border-top-0 border-left-0 border-right-0 datepicker" placeholder="" name="tgl-lahir" autocomplete="off">
                                <span>to</span>
                                <input type="text" class="form-control border border-info border-top-0 border-left-0 border-right-0 datepicker" placeholder="" name="tgl-lahir" autocomplete="off">
                                <button type="submit" class="btn btn-default">Download</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- end modal -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Sekolah</th>
                                    <th>Kejuruan</th>
                                    <th>Tgl Absen Datang</th>
                                    <th>Waktu ABsen Datang</th>
                                    <th>Tgl Absen Pulang</th>
                                    <th>Waktu Absen Pulang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($absen); $i++) : ?>
                                    <tr>
                                        <td><?= $i + 1 ?></td>
                                        <td><?= $absen[$i]['id-absen'] ?></td>
                                        <td><?= $absen[$i]['nama-siswa'] ?></td>
                                        <td><?= $absen[$i]['nama-sekolah'] ?></td>
                                        <td><?= $absen[$i]['nama-kejuruan'] ?></td>
                                        <td><?= $absen[$i]['abs-datang'] ?></td>
                                        <?php $absen[$i]['waktu-abs-datang'] > "07:00:00"? $warna = "red": $warna = "black"; ?>
                                        <td style="color: <?= $warna; ?>"><?= $absen[$i]['waktu-abs-datang'] ?></td>
                                        <td>
                                            <?php if ($absen[$i]['abs-pulang'] == '0000-00-00') {
                                                echo "belum absen";
                                            } else {
                                                echo $absen[$i]['abs-pulang'];
                                            } ?>
                                        </td>
                                        <td><?php if ($absen[$i]['waktu-abs-pulang'] == '00:00:00') {
                                                echo "belum absen";
                                            } else {
                                                echo $absen[$i]['waktu-abs-pulang'];
                                            } ?>
                                            <a href="<?= base_url('riwayat_absen/delete/'.$absen[$i]['id-absen']) ?>" class="text-danger" data-id="" name=""><i class="fas fa-trash-alt fa-1x hapus" style="float: right"></i></a>
                                        </td>
                                    </tr>
                                <?php endfor; ?>
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