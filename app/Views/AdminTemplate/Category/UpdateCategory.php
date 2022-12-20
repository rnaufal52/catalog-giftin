<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Update Kategori</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?= form_open_multipart(base_url('/category/update/')); ?>
                        <?= csrf_field(); ?>
                        <div class="form-body">
                            <div class="row">
                                <input type="hidden" name="category_id" class="form-control" value="<?= $category[0]['category_id']; ?>">
                                <input type="hidden" name="category_image" class="form-control" value="<?= $category[0]['category_image']; ?>">
                                <div class="col-md-2">
                                    <label>Nama Kategori</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="first-name" class="form-control <?= ($validation->hasError('category_name')) ? 'is-invalid' : ''; ?>" name="category_name" placeholder="First Name" value="<?= ($validation->hasError('category_name')) ? old('category_name') : $category[0]['category_name'] ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('category_name'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Upload Gambar</label>
                                </div>
                                <div class="col-md-10 mb-5">
                                    <input type="file" name="image" class="form-control <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('image'); ?>
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