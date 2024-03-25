<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?><?= " - Klinik Baloi"; ?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo-ppid.png'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/themify-icons/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/selectFX/css/cs-skin-elastic.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/jqvmap/dist/jqvmap.min.css'); ?>">

    <!-- DataTable CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/assets-user/assets/css/style.css'); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?= base_url('assets/sweetalert2-11.10.1/package/dist/sweetalert2.min.css'); ?>   ">

</head>

<body>


    <!-- Left Panel -->

    <?php $this->load->view('v_sidebar'); ?>
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php $this->load->view('v_top'); ?>
        <!-- Header-->

        <?php $this->load->view('v_breadcumb'); ?>

        <div class="content mt-3">

            <?= $this->load->view('v_registrasi_pemeriksaan_maincontent'); ?>


        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/popper.js/dist/umd/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/assets/js/main.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/chart.js/dist/Chart.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/assets/js/dashboard.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/assets/js/widgets.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/jqvmap/dist/jquery.vmap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/jqvmap/dist/maps/jquery.vmap.world.js'); ?>"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

    <script src="<?= base_url('assets/assets-user/vendors/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/datatables.net-buttons/js/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/jszip/dist/jszip.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/pdfmake/build/pdfmake.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/pdfmake/build/vfs_fonts.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/datatables.net-buttons/js/buttons.html5.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/datatables.net-buttons/js/buttons.print.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/datatables.net-buttons/js/buttons.colVis.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/assets/js/init-scripts/data-table/datatables-init.js'); ?>"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('assets/sweetalert2-11.10.1/package/dist/sweetalert2.min.js'); ?>"></script>

    <script src="<?= base_url('assets/tambahan.js') ?>" type="text/javascript"></script>

</body>

</html>