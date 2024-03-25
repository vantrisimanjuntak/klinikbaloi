<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?= base_url('user/dashboard'); ?>">Klinik Baloi</a>
            <a class="navbar-brand hidden" href="./"><img src="<?= base_url('assets/images/logo-ppid.png'); ?>" alt="Logso"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?= base_url('user/dashboard'); ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Kesehatan</h3><!-- /.menu-title -->

                <li class="">
                    <a href="<?= base_url('user/registrasi_pemeriksaan'); ?>"> <i class="menu-icon fa fa-stethoscope"></i>Pemeriksaan Kesehatan</a>

                </li>
                <h3 class="menu-title">Akun</h3><!-- /.menu-title -->

                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Data Diri</a>
                </li>
                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-gear (alias)"></i>Akun</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->