<header id="header" class="header">

    <div class="header-menu">

        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
            <div class="header-left"></div>
        </div>

        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?= $this->session->userdata('nama'); ?>
                </a>
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>
                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
                    <a class="nav-link" href="<?= base_url('user/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>


        </div>
    </div>

</header><!-- /header -->