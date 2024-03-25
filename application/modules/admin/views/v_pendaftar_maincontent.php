<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3><?= "Pendaftar"; ?></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="flash-data-for-confirm" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <div class="flash-data-for-delete" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Pendaftar</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <!-- Table -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>No. KTP</th>
                                                <th>No. HP</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $id = 1;

                                            foreach ($allPendaftar as $data) :  ?>
                                                <tr>
                                                    <td><?= $id++; ?> </td>
                                                    <td><?= $data['nama']; ?></td>
                                                    <td><?= $data['no_ktp']; ?></td>
                                                    <td><?= $data['no_hp']; ?></td>
                                                    <td><?= $data['jenis_kelamin']; ?></td>
                                                    <td><?= $data['alamat']; ?></td>
                                                    <td><?= $data['status']; ?></td>
                                                    <td>
                                                        <button type="button" id="<?= $data['id_shadow']; ?>" class="btn btn-warning btn-sm font-weight-bold text-white btn-konfirmasi">Konfirmasi</button>
                                                        <button type="button" id="<?= $data['id_shadow']; ?>" class="btn btn-danger btn-sm font-weight-bold text-white btn-hapus">Hapus</button>
                                                    </td>

                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!-- End Table -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>