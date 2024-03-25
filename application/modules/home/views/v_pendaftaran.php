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


<link rel="stylesheet" href="<?= base_url('assets/sweetalert2-11.10.1/package/dist/sweetalert2.min.css'); ?>   ">



<link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<!-- jQery -->
<script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/jquery-3.4.1.min.js'); ?>"></script>
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<!-- popper js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- custom js -->
<script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/custom.js'); ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="<?= base_url('assets/sweetalert2-11.10.1/package/dist/sweetalert2.min.js'); ?>"></script>



</head>

<body style="background:#c5eef6;">

    <div class="hero_area">


        <?php $this->load->view('header'); ?>
        <div class="container mt-4 w-75 pb-5 bg-white">
            <div class="flash-data-for-registrasi" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <h5 class="text-center font-weight-bold pt-4 pb-3">Form Pendaftaran</h5>
            <form action="<?= base_url('registrasi/submit'); ?>" method="POST" id="submitRegistrasi">
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-12 col-md-10 col">
                        <input type="text" class="form-control" required autocomplete="off" name="nama" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">No. KTP</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" required autocomplete="off" name="no_ktp" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">No. HP</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" required autocomplete="off" name="no_hp" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-2">
                        <select name="jenis_kelamin" type="text" id="" class="custom-select">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="" required cols="20" name="alamat" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" required autocomplete="off" name="password" id="">
                    </div>
                </div>

                <div class="container-fluid">
                    <button type="button" class="btn btn-primary pull-right" id="btnSubmit">
                        Daftar
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- footer -->
    <?php $this->load->view('footer'); ?>


    <!-- bootstrap js -->
    <script type="text/javascript" src="<?= base_url('assets/asset-home/carint-1.0.0/js/bootstrap.js'); ?>"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->
    <!--  -->
    <script type="text/javascript" src="<?= base_url('assets/tambahan.js') ?>"></script>
</body>

</html>