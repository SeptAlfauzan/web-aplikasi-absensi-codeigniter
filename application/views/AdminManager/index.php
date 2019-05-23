<?php $this->load->view('TemplateAdmin/header.php') ?>
<!-- Main Menu area End-->
<!-- Start Status area -->
<?php if (!$_SESSION['operator']) {
    redirect(base_url('login_admin/pageNotFound'));
} ?>
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
            <h4 style="margin-top: 10px;"><i class="fas fa-graduation-cap"></i> Admin Manager</h4>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcomb-list" style="border-bottom: 2px solid #009688; margin-bottom: 10px 0 10px 0;">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcomb-list">
            <form method="POST" action="<?= base_url('admin/insert') ?>">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 btn btn-default  waves-effect" style="">id otomatis</div>
                <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="nk-int-st">
                        <input name="nama-admin" type="text" class="form-control" placeholder="Masukkan Nama Admin" required>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12" style="color: grey">password otomatis</div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="toggle-select-act">
                        <div class="nk-toggle-switch" data-ts-color="cyan">
                            <label for="ts5" class="ts-label">Operator</label>
                            <input id="ts5" type="checkbox" hidden="hidden" name="status">
                            <label for="ts5" class="ts-helper"></label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="col-lg-2 col-md-2 col-sm-2 col-xs-12 btn btn-default  waves-effect" style="background: #009688; color: #fff;">ADD</button>
            </form>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 breadcomb-list">
            <?php foreach ($dataAdmin as $admin) : ?>
                <div class="row" style="margin: auto">
                    <form method="POST" action="<?= base_url('admin/update/' . $admin['id-admin']) ?>">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 btn btn-default  waves-effect" style="background: #009688; color: #fff;"><?= $admin['id-admin'] ?></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
                            <div class="nk-int-st">
                                <input name="nama-admin" type="text" class="form-control" placeholder="Input Default" value="<?= $admin['nama-admin'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12" style="color: grey">password <?= $admin['password-admin'] ?></div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-10">
                            <div class="toggle-select-act">
                                <div class="nk-toggle-switch" data-ts-color="cyan">
                                    <label for="t<?= $admin['id-admin'] ?>" class="ts-label">Operator</label>
                                    <input name="status" id="t<?= $admin['id-admin'] ?>" <?php if ($admin['status-admin'] == "operator") {
                                                                                                echo "checked";
                                                                                            } ?> type="checkbox" hidden="hidden">
                                    <label for="t<?= $admin['id-admin'] ?>" class="ts-helper"></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-1" style="text-align: center">
                            <a class="hapus text-danger" href="<?= base_url() ?>admin/delete/<?= $admin['id-admin'] ?>" data-id="" name=""><i class="fas fa-trash-alt fa-1x hapus"></i></a> </div>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>
<?php $this->load->view('TemplateAdmin/footer.php') ?>