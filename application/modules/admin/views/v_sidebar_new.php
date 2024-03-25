  <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Panel Admin</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
              <div class="profile_pic">
                  <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                  <span>Welcome,</span>
                  <h2><?= $this->session->userdata('nama'); ?></h2>
              </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->


          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">

                  <ul class="nav side-menu">
                      <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> Home</a></li>
                      <li><a href="<?= base_url('admin/dokter'); ?>"><i class="fa fa-user"></i> Dokter</a> </li>
                      <li><a href="<?= base_url('admin/pasien'); ?>"><i class="fa fa-home"></i> Pasien</a></li>
                      <li><a href="<?= base_url('admin/pendaftar'); ?>"><i class="fa fa-home"></i> Pendaftar</a></li>
                      <li><a href="<?= base_url('admin/rekammedis'); ?>"><i class="fa fa-home"></i> Rekam Medis</a></li>
                  </ul>
              </div>


          </div>


          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                  <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                  <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                  <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
          </div>
          <!-- /menu footer buttons -->
      </div>
  </div>