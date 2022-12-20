<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Update Produk</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?= form_open_multipart(base_url('/product/update')); ?>
                        <?= csrf_field(); ?>
                        <div class="form-body">
                            <div class="row">
                                <input type="hidden" name="product_id" class="form-control" value="<?= $product[0]['product_id']; ?>">
                                <input type="hidden" name="product_image" class="form-control" value="<?= $product[0]['product_image']; ?>">
                                <div class="col-md-2">
                                    <label>Nama Produk</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="first-name" class="form-control <?= ($validation->hasError('product_name')) ? 'is-invalid' : ''; ?>" name="product_name" placeholder="First Name" value="<?= ($validation->hasError('product_name')) ? old('product_name') : $product[0]['product_name'] ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('product_name'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Deskripsi Produk</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <textarea name="product_description" id="" cols="30" rows="10" class="form-control <?= ($validation->hasError('product_description')) ? 'is-invalid' : ''; ?>" name="product_description" placeholder="Deskripsi Produk"><?= ($validation->hasError('product_description')) ? old('product_description') : $product[0]['product_description'] ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('product_description'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Kategori</label>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <select class="form-select" aria-label="Kategori" id="Kategori" name="category_id">
                                        <?php foreach ($category as $k) : ?>
                                            <option value="<?= $k['category_id']; ?>" <?= $product[0]['category_id'] == $k['category_id'] ? 'selected' : null ?>>
                                                <?= $k['category_name']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-7"></div>
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