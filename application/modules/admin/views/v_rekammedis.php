<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('assets/images/logo-ppid.png'); ?>" type="image/ico" />

    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/assets-admin/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/assets-admin/vendors/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/assets-admin/vendors/nprogress/nprogress.css'); ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('assets/assets-admin/vendors/iCheck/skins/flat/green.css'); ?>" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('assets/assets-admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet">


    <!-- DataTables -->
    <link href="<?= base_url('assets/assets-admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/assets-admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/assets-admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/assets-admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/assets-admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css'); ?>" rel="stylesheet">

    <link href="<?= base_url('assets/assets-admin/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/assets-admin/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css'); ?>" rel="stylesheet">


    <!-- SweetAlertCSS -->
    <link rel="stylesheet" href="<?= base_url('assets/sweetalert2-11.10.1/package/dist/sweetalert2.min.css'); ?>   ">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('assets/sweetalert2-11.10.1/package/dist/sweetalert2.min.js'); ?>"></script>
    <!-- End SweetAlertCSS -->

    <!-- JQVMap -->
    <link href="<?= base_url('assets/assets-admin/vendors/jqvmap/dist/jqvmap.min.css'); ?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/assets-admin/vendors/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/assets-admin/build/css/custom.min.css'); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?= base_url('assets/assets-admin/vendors/jquery/dist/jquery.min.js'); ?>"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('v_sidebar_new'); ?>

            <!-- top navigation -->
            <?php $this->load->view('v_topnav.php'); ?>
            <!-- /top navigation -->

            <!-- page content -->
            <?php $this->load->view('v_rekammedis_maincontent'); ?>
            <!-- page content -->
            <?php $this->load->view('v_footer'); ?>
        </div>
    </div>

    <!-- jQuery -->

    <!-- Bootstrap -->
    <script src="<?= base_url('assets/assets-admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/assets-admin/vendors/fastclick/lib/fastclick.js'); ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('assets/assets-admin/vendors/nprogress/nprogress.js'); ?>"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('assets/assets-admin/vendors/Chart.js/dist/Chart.min.js'); ?>"></script>
    <!-- gauge.js -->
    <script src="<?= base_url('assets/assets-admin/vendors/gauge.js/dist/gauge.min.js') ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('assets/assets-admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets/assets-admin/vendors/iCheck/icheck.min.js'); ?>"></script>
    <!-- Skycons -->
    <script src="<?= base_url('assets/assets-admin/vendors/skycons/skycons.js'); ?>"></script>
    <!-- Flot -->
    <script src="<?= base_url('assets/assets-admin/vendors/Flot/jquery.flot.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/Flot/jquery.flot.pie.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/Flot/jquery.flot.time.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/Flot/jquery.flot.stack.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/Flot/jquery.flot.resize.js'); ?>"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('assets/assets-admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/flot-spline/js/jquery.flot.spline.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/flot.curvedlines/curvedLines.js'); ?>"></script>
    <!-- DateJS -->
    <script src="<?= base_url('assets/assets-admin/vendors/DateJS/build/date.js'); ?>"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('assets/assets-admin/vendors/jqvmap/dist/jquery.vmap.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('assets/assets-admin/vendors/moment/min/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/assets-admin/build/js/custom.min.js'); ?>"></script>

    <!-- DataTables -->
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-buttons/js/buttons.flash.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/jszip/dist/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/pdfmake/build/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-admin/vendors/pdfmake/build/vfs_fonts.js'); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(function() {

            $('#myDatepicker3').datetimepicker({
                format: 'HH:mm'
            });
        });
    </script>
    <script type="text/javascript" src="<?= base_url('assets/tambahan.js') ?>"></script>


</body>

</html>