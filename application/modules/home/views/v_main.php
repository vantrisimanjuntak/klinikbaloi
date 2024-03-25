<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<!-- Site Metas -->
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />
<link rel="shortcut icon" href="<?= base_url('assets/images/logo-ppid.png') ?>" type="">

<title> <?= $title; ?> </title>


<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/asset-home/carint-1.0.0/css/bootstrap.css'); ?>" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

<!-- font awesome style -->
<link href="<?= base_url('assets/asset-home/carint-1.0.0/css/font-awesome.min.css'); ?>" rel="stylesheet" />
<!-- <link href="<?= base_url('assets/fontawesome-free-6.5.1-web/css/fontawesome.min.css'); ?>" rel="stylesheet" /> -->

<!-- Custom styles for this template -->
<link href="<?= base_url('assets/asset-home/carint-1.0.0/css/style.css'); ?>" rel="stylesheet" />
<!-- responsive style -->
<link href="<?= base_url('assets/asset-home/carint-1.0.0/css/responsive.css'); ?>" rel="stylesheet" />
<link href="<?= base_url('assets/tambahan.css'); ?>" rel="stylesheet" />

</head>

<body style="background:#c5eef6;">

    <div class="hero_area">

        <?php $this->load->view('header'); ?>
        <?php $this->load->view('main_content'); ?>
    </div>



    <!-- footer -->
    <?php $this->load->view('footer'); ?>

    <!-- jQery -->
    <script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/jquery-3.4.1.min.js'); ?>"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/bootstrap.js'); ?>"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/custom.js'); ?>"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
</body>

</html>