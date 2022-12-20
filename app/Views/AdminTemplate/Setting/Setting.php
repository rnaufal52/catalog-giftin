<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <?php if (!empty(session()->getFlashdata('pesan'))) { ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php } ?>
                        <?= form_open_multipart(base_url('/setting/update')); ?>
                        <?= csrf_field(); ?>
                        <div class="form-body">
                            <div class="row">
                                <input type="hidden" name="setting_id" class="form-control" value="<?= $setting[0]['setting_id']; ?>">
                                <input type="hidden" name="setting_logo" class="form-control" value="<?= $setting[0]['setting_logo']; ?>">
                                <input type="hidden" name="setting_alamat_image" class="form-control" value="<?= $setting[0]['setting_alamat_image']; ?>">
                                <h4>Informasi Umum</h4>
                                <hr>
                                <div class="col-md-2">
                                    <label>Tagline Website</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="tagline" class="form-control <?= ($validation->hasError('setting_tagline')) ? 'is-invalid' : ''; ?>" name="setting_tagline" value="<?= ($validation->hasError('setting_tagline')) ? old('setting_tagline') : $setting[0]['setting_tagline'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_tagline'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Deskripsi Gift In</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <textarea name="setting_deskripsi" id="" cols="30" rows="10" class="form-control <?= ($validation->hasError('setting_deskripsi')) ? 'is-invalid' : ''; ?>"><?= ($validation->hasError('setting_deskripsi')) ? old('setting_deskripsi') : $setting[0]['setting_deskripsi'] ?></textarea>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_deskripsi'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Logo lama</label>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <img src="<?= base_url() ?>/assets/images/website/<?= $setting[0]['setting_logo']; ?>" class="setting-image" alt="Logo-image">
                                </div>
                                <div class="col-md-2">
                                    <label>Upload Logo</label>
                                </div>
                                <div class="col-md-10 mb-5">
                                    <input type="file" name="logo" class="form-control <?= ($validation->hasError('logo')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('logo'); ?>
                                    </div>
                                </div>




                                <!-- Alamat -->

                                <h4 class="mt-3">Alamat</h4>
                                <hr>
                                <div class="col-md-2">
                                    <label>Alamat</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="alamat" class="form-control <?= ($validation->hasError('setting_alamat')) ? 'is-invalid' : ''; ?>" name="setting_alamat" value="<?= ($validation->hasError('setting_alamat')) ? old('setting_alamat') : $setting[0]['setting_alamat'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_alamat'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Link google maps</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="link alamat" class="form-control <?= ($validation->hasError('setting_alamat_url')) ? 'is-invalid' : ''; ?>" name="setting_alamat_url" value="<?= ($validation->hasError('setting_alamat_url')) ? old('setting_alamat_url') : $setting[0]['setting_alamat_url'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_alamat_url'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Alamat lama</label>
                                </div>
                                <div class="col-md-10 mb-3">
                                    <img src="<?= base_url() ?>/assets/images/website/<?= $setting[0]['setting_alamat_image']; ?>" class="setting-image" alt="Logo-image">
                                </div>
                                <div class="col-md-2">
                                    <label>Upload foto alamat</label>
                                </div>
                                <div class="col-md-10 mb-5">
                                    <input type="file" name="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('alamat'); ?>
                                    </div>
                                </div>





                                <!-- Sosial Media -->
                                <h4 class="mt-3">Social Media</h4>
                                <hr>
                                <div class="col-md-2">
                                    <label>Whatsapp</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="wa" class="form-control <?= ($validation->hasError('setting_wa')) ? 'is-invalid' : ''; ?>" name="setting_wa" value="<?= ($validation->hasError('setting_wa')) ? old('setting_wa') : $setting[0]['setting_wa'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_wa'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Link Whatsapp</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="wa_url" class="form-control <?= ($validation->hasError('setting_wa_url')) ? 'is-invalid' : ''; ?>" name="setting_wa_url" value="<?= ($validation->hasError('setting_wa_url')) ? old('setting_wa_url') : $setting[0]['setting_wa_url'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_wa_url'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Instagram</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="instagram" class="form-control <?= ($validation->hasError('setting_instagram')) ? 'is-invalid' : ''; ?>" name="setting_instagram" value="<?= ($validation->hasError('setting_instagram')) ? old('setting_instagram') : $setting[0]['setting_instagram'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_instagram'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Link Instagram</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="instagram_url" class="form-control <?= ($validation->hasError('setting_instagram_url')) ? 'is-invalid' : ''; ?>" name="setting_instagram_url" value="<?= ($validation->hasError('setting_instagram_url')) ? old('setting_instagram_url') : $setting[0]['setting_instagram_url'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_instagram_url'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Tiktok</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="tiktok" class="form-control <?= ($validation->hasError('setting_tiktok')) ? 'is-invalid' : ''; ?>" name="setting_tiktok" value="<?= ($validation->hasError('setting_tiktok')) ? old('setting_tiktok') : $setting[0]['setting_tiktok'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_tiktok'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Link Tiktok</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="tiktok_url" class="form-control <?= ($validation->hasError('setting_tiktok_url')) ? 'is-invalid' : ''; ?>" name="setting_tiktok_url" value="<?= ($validation->hasError('setting_tiktok_url')) ? old('setting_tiktok_url') : $setting[0]['setting_tiktok_url'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_tiktok_url'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="email" class="form-control <?= ($validation->hasError('setting_email')) ? 'is-invalid' : ''; ?>" name="setting_email" value="<?= ($validation->hasError('setting_email')) ? old('setting_email') : $setting[0]['setting_email'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_email'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Link Email</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="email_url" class="form-control <?= ($validation->hasError('setting_email_url')) ? 'is-invalid' : ''; ?>" name="setting_email_url" value="<?= ($validation->hasError('setting_email_url')) ? old('setting_email_url') : $setting[0]['setting_email_url'] ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('setting_email_url'); ?>
                                    </div>
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Update</button>
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