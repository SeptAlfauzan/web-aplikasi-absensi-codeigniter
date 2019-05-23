<?php $this->load->view('TemplateAdmin/header.php') ?>
<!-- Main Menu area End-->
<!-- Start Status area -->
<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shadow">
        <!-- set alert -->
        <?php if ($this->session->flashdata('flash')) : ?>
            <?php $this->session->flashdata('flash') == 'Berhasil Dihapus' ? $tipe = "warning" : $tipe = "success"; ?>
            <div class="alert alert-<?= $tipe; ?> alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Data <?= $this->session->flashdata('flash') ?>
            </div>
        <?php endif; ?>
        <!-- end alert -->
        <div class="breadcomb-list" style="padding: 20px;">
            <h4 style="margin-top: 10px;"><i class="fas fa-graduation-cap"></i> Daftar Kejuruan</h4>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcomb-list" style="border-bottom: 2px solid #009688; margin-bottom: 10px 0 10px 0;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcomb-list">
            <form method="POST" action="<?= base_url('kejuruan/insert') ?>">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 btn btn-default  waves-effect" style="">id otomatis</div>
                <div class="form-group col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="nk-int-st">
                        <input name="nama-kejuruan" type="text" class="form-control" placeholder="Masukkan Nama Kejuruan" required>
                    </div>
                </div>
                <button type="submit" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 btn btn-default  waves-effect" style="background: #009688; color: #fff;">ADD</button>
            </form>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcomb-list">
            <?php foreach ($dataKejuruan as $data) : ?>
                <div class="row" style="margin: auto">
                    <form method="post" action="<?= base_url('kejuruan/update/' . $data['id-kejuruan']) ?>">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 btn btn-default  waves-effect" style="background: #009688; color: #fff;"><?= $data['id-kejuruan'] ?></div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-10 form-group">
                            <div class="nk-int-st">
                                <input name="update-data" type="text" class="form-control" placeholder="Input Default" value="<?= $data['nama-kejuruan'] ?>">
                            </div>
                        </div>
                    </form>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-1" style="text-align: center">
                        <a class="hapus text-danger" href="<?= base_url() ?>kejuruan/delete/<?= $data['id-kejuruan'] ?>" data-id="" name=""><i class="fas fa-trash-alt fa-1x hapus"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php $this->load->view('TemplateAdmin/footer.php') ?>