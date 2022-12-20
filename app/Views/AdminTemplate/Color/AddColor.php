<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Warna</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?= form_open(base_url('color/tambah')); ?>
                        <?= csrf_field(); ?>
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Nama Warna</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="first-name" class="form-control <?= ($validation->hasError('color_name')) ? 'is-invalid' : ''; ?>" name="color_name" placeholder="First Name" value="<?= old('color_name') ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('color_name'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>