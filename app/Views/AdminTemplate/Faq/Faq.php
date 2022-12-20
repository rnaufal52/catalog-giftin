<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section class="row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header mb-3">
                    <h4>Frequently Asked Questions</h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('faq/form'); ?>" class="btn btn-outline-primary mb-3">Tambah Faq</a>
                    <?php if (!empty(session()->getFlashdata('pesan'))) { ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php } ?>
                    <div class="table-responsive">
                        <table class="table table-lg" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Faq Questions</th>
                                    <th>Faq Answer</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($faq as $faq) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td class="text-bold-500"><?= $faq['faq_questions'];  ?></td>
                                        <td class="text-bold-500"><?= $faq['faq_answer'];  ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>/faq/formupdate/<?= $faq['faq_id']; ?>" class="btn btn-sm btn-warning">Update</a>
                                            <a href="<?= base_url(); ?>/faq/delete/<?= $faq['faq_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus Faq ini ?')">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/v/bs5/dt-1.13.1/r-2.4.0/rr-1.3.1/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            "lengthMenu": [5, 10, 20],
            // default row
            "pageLength": 5,
        });
    });
</script>

<?= $this->endSection() ?>