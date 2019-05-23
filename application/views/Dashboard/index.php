<?php $this->load->view('TemplateAdmin/header.php') ?>

</head>
<div class="container" style="text-align: center">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display: inline-block; padding:10px">
    <a href="<?= base_url('siswa_terdaftar')?>" style="color: white">
        <div class="nk-teal pageThumbnail" style="border-radius: 20px; height: 200px; line-height: 200px">
                <i class="fas fa-users fa-4x"></i>
                <h4 style="margin-top:-50px">Data Siswa</h4>
            </div>
        </div>
    </a>    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display: inline-block; padding:10px">
    <a href="<?= base_url('riwayat_absen')?>" style="color: white">     
        <div class="nk-teal pageThumbnail" style="border-radius: 20px; height: 200px; line-height: 200px">
                <i class="fas fa-history fa-4x"></i>
                <h4 style="margin-top:-50px">Riwayat Absen</h4>
            </div>
        </div>
    </a>    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display: inline-block; padding:10px">
    <a href="<?= base_url('sekolah_terdaftar')?>" style="color: white">   
        <div class="nk-teal pageThumbnail" style="border-radius: 20px; height: 200px; line-height: 200px">
                <i class="fas fa-school fa-4x"></i>
                <h4 style="margin-top:-50px">Sekolah Terdaftar</h4>
            </div>
        </div>
    </a>    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display: inline-block; padding:10px">
    <a href="<?= base_url('kejuruan')?>" style="color: white">
        <div class="nk-teal pageThumbnail" style="border-radius: 20px; height: 200px; line-height: 200px">
                <i class="fas fa-graduation-cap fa-4x"></i>
                <h4 style="margin-top:-50px">Kejuruan</h4>
            </div>
        </div>
    </a>    
</div>
<?php $this->load->view('TemplateAdmin/footer.php') ?>