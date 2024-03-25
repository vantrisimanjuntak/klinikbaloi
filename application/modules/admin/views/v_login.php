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
    <!-- Animate.css -->
    <link href="<?= base_url('assets/assets-admin/vendors/animate.css/animate.min.css'); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/assets-admin/build/css/custom.min.css'); ?>" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="<?= base_url('admin/login/checklogin') ?>" method="POST">
                        <h1>Login <br> Sistem Informasi Data Pengunjung Pasien</h1>
                        <div>
                            <input type="text" class="form-control" name="username" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" name="password" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button class="btn btn-primary" type="submit">Login</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br>
                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
</body>

</html>