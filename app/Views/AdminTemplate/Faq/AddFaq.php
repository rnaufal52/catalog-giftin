<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Faq</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?= form_open(base_url('faq/tambah')); ?>
                        <?= csrf_field(); ?>
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Pertanyaan</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="faq_questions" class="form-control <?= ($validation->hasError('faq_questions')) ? 'is-invalid' : ''; ?>" name="faq_questions" placeholder="Pertanyaan" value="<?= old('faq_questions') ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('faq_questions'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Jawaban</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="faq_answer" class="form-control <?= ($validation->hasError('faq_answer')) ? 'is-invalid' : ''; ?>" name="faq_answer" placeholder="Jawaban" value="<?= old('faq_answer') ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('faq_answer'); ?>
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