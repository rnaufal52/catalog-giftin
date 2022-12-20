<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section class="row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header mb-3">
                    <h4>Variant</h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('/variant/form'); ?>" class="btn btn-outline-primary">Tambah Variant</a>
                    <?php if (!empty(session()->getFlashdata('pesan'))) { ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php } ?>
                    <div class="table-responsive mt-4">
                        <table class="table table-lg" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Variant</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($variant as $variant) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td class="text-bold-500"><?= $variant['product_name'];  ?></td>
                                        <td class="text-bold-500"><?= $variant['variant_size'];  ?></td>
                                        <td class="text-bold-500"><?= $variant['variant_price'];  ?></td>
                                        <td class="text-bold-500"><?= $variant['variant_discount'];  ?></td>
                                        <td><?= $variant['variant_image']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>/variant/formupdate/<?= $variant['variant_id']; ?>" class="btn btn-sm btn-warning">Update</a>
                                            <a href="<?= base_url(); ?>/variant/delete/<?= $variant['variant_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus variant ini ?')">Delete</a>
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