<div class="flash-data-for-registration-user" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong>Basic Form</strong> Elements
        </div>
        <div class="card-body card-block">
            <form action="<?= base_url('user/registrasi_pemeriksaan/submit') ?>" id="submitRegistrasiPemeriksaan" method="post" enctype="multipart/form-data" class="form-horizontal">
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">No. RM</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static">Username</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static"><?= $this->session->userdata('nama'); ?></p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="disabledSelect" class=" form-control-label">Jenis Kelamin</label></div>
                    <div class="col-12 col-md-9">
                        <p class="form-control-static"><?= $this->session->userdata('jenis_kelamin'); ?></p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label class=" form-control-label">Tanggal Kontrol</label></div>
                    <div class="col col-md-9">
                        <div class="form-group">
                            <div class="input-group">
                                <input class="form-control" name="tanggal_kontrol" type="date">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3"><label for="select" class=" form-control-label">Layanan</label></div>
                    <div class="col-12 col-md-9">
                        <select name="layanan" id="select" class="form-control">
                            <?php foreach ($allLayanan->result_array() as $row) :  ?>
                                <option value="<?= $row['id_layanan']; ?>"><?= $row['title_layanan']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm btn-submit-reg-pemeriksaan">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>

    </div>
</div>