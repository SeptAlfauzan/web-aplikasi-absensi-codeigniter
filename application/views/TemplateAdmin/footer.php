    <!-- End Footer area-->
    <!-- jquery
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/bootstrap.min.js"></script>
    <!-- wow JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/wow.min.js"></script>
    <!-- price-slider JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/flot/curvedLines.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/flot/flot-active.js"></script>
    <!-- knob JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/knob/jquery.knob.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/knob/jquery.appear.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/knob/knob-active.js"></script>
    <!--  wave JS
            ============================================ -->

    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/chosen/chosen.jquery.js"></script>

    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/wave/waves.min.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/wave/wave-active.js"></script>
    <!--  todo JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/plugins.js"></script>
    <!--  Chat JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/chat/moment.min.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/chat/jquery.chat.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/data-table/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/data-table/data-table-act.js"></script>
    <!-- main JS
            ============================================ -->
    <script src="<?= base_url() ?>template/notika-master/notika/green-horizontal/js/main.js"></script>
    <script src="<?= base_url() ?>dist/plugin/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="<?= base_url() ?>dist/js/sweetalert2Config.js"></script>
    <script src="<?= base_url('dist/plugin/datepicker/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= base_url('dist/js/popper.min.js') ?>"></script>
    <script>
            //Date picker
            $('.datepicker').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd'
            })
    </script>
    <!-- notif -->
    <script>
            $(document).ready(function() {
                    var url = '<?php echo base_url("siswa_terdaftar/count"); ?>';
                    setInterval(function() {
                            $('.countData').load('<?= base_url("siswa_terdaftar/count"); ?>').fadeIn("slow");
                    }, 1000);
            });
    </script>
    <script type="text/javascript">
            $(document).ready(function() {
                    var url = '<?= base_url("siswa_terdaftar/notif"); ?>';
                    setInterval(function() {
                            $('#notification').load('<?= base_url("siswa_terdaftar/notif"); ?>').fadeIn("slow");
                    }, 1000);
            });
    </script>
    </body>

    </html>