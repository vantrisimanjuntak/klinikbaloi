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
    <title><?= $title; ?></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo-ppid.png'); ?>">


    <link rel="shortcut icon" href="<?= base_url('assets/images/logo-ppid.png'); ?>">

    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/bootstrap/dist/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/font-awesome/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/themify-icons/css/themify-icons.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/selectFX/css/cs-skin-elastic.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/assets-user/vendors/jqvmap/dist/jqvmap.min.css'); ?>">


    <link rel="stylesheet" href="<?= base_url('assets/assets-user/assets/css/style.css'); ?>">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="<?= base_url('assets/sweetalert2-11.10.1/package/dist/sweetalert2.min.css'); ?>   ">




</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="flash-data-for-wrongpassword" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php endif; ?>
            <?php if ($this->session->flashdata('belum_verifikasi')) :  ?>

                <div class="flash-data-for-pending" data-flashdata="<?= $this->session->flashdata('belum_verifikasi'); ?>"></div>
            <?php endif; ?>
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <h2 class="text-white" style="text-decoration: none;">KlINIK BALOI</h2>
                    </a>
                </div>
                <div class="login-form">
                    <form action="<?= base_url('user/login/checklogin'); ?>" method="POST">
                        <div class="form-group">
                            <label>Nomor HP</label>
                            <input type="text" class="form-control" autocomplete="off" name="no_hp" placeholder="Nomor HP">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label class="pull-right">
                                <a href="#">Lupa Password?</a>
                            </label>

                        </div>
                        <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/jquery-3.4.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/jquery/dist/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/popper.js/dist/umd/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/vendors/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/assets-user/assets/js/main.js'); ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('assets/sweetalert2-11.10.1/package/dist/sweetalert2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/tambahan.js') ?>"></script>


</body>

</html>