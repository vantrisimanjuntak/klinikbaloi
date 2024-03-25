<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>


        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Data Pasien</h2>
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
                                    <p class="text-muted font-13 m-b-30">
                                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                                    </p>
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Tanggal Kontrol</th>
                                                <th>Layanan</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $id = 1;

                                            foreach ($allPasien as $data) :  ?>
                                                <tr>
                                                    <td><?= $id++; ?> </td>
                                                    <td><?= $data['nama']; ?></td>
                                                    <td><?= date('d M Y', strtotime($data['tgl_kontrol']));  ?></td>
                                                    <td><?= $data['title_layanan']; ?></td>
                                                    <td>
                                                        <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target=".bs-example-modal-lg-<?= $id; ?>">Pemeriksaan</button>
                                                        <div class="modal fade bs-example-modal-lg-<?= $id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myModalLabel">No. Antrian: <?= $data['antrian']; ?></h4>
                                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h4></h4>
                                                                        <form action="<?= base_url('admin/pasien/konfirm_pemeriksaan/' . $data['antrian']); ?>" method="POST">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-12 ">
                                                                                    <h2>Input Data Rekam Medis</h2>
                                                                                    <div class="x_content">
                                                                                        <br>
                                                                                        <div class="form-group row">
                                                                                            <label for="staticEmail" class="col-sm-2 col-md-2 col-lg-2 col-form-label">Nama Pasien</label>
                                                                                            <div class="col-sm-3">
                                                                                                <?= $data['nama']; ?>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label for="inputPassword" class="col-sm-2 col-form-label">Hari Pelayanan</label>
                                                                                            <div class="col-sm-4">
                                                                                                <?= $data['tgl_kontrol']; ?>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label for="inputPassword" class="col-sm-2 col-form-label">Dokter Pemeriksa</label>
                                                                                            <div class="col-sm-4">
                                                                                                <div class='input-group date' id=''>
                                                                                                    <select class="form-control" name="dokter_pemeriksa">
                                                                                                        <?php foreach ($allDokter as $row) : ?>
                                                                                                            <option value="<?= $row['id'] ?>"><?= $row['nama']; ?></option>
                                                                                                        <?php endforeach; ?>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label for="inputPassword" class="col-sm-2 col-form-label">Catatan Pemeriksaan</label>
                                                                                            <div class="col-sm-10">
                                                                                                <textarea name="catatan_pemeriksaan" class="form-control" id="" cols="30" rows="10"></textarea>
                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-primary">Input Rekam Medis</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

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