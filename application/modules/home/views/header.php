<header class="header_section">

    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl custom_nav-container" style="font-size: 13px;">
                <a class="navbar-brand" href="index.html">
                    <span>
                        <img src="<?= base_url('assets/images/logo-ppid.png') ?>" width="140px" alt="" srcset="">
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.html">Profil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="about.html"> Informasi Publik</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="about.html"> SOP Layanan Publik</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html"> Video </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('registrasi'); ?>">
                                <button type="button" class="btn btn-round btn-warning text-white font-weight-bold">Registrasi</button>
                            </a>
                        </li>
                        <form class="form-inline">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>