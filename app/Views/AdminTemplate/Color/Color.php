<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section class="row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header mb-3">
                    <h4>Warna Produk</h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('/color/form'); ?>" class="btn btn-outline-primary">Tambah Warna</a>
                    <?php if (!empty(session()->getFlashdata('pesan'))) { ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php } ?>
                    <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Warna</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($color as $color) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td class="text-bold-500"><?= $color['color_name'];  ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>/color/formupdate/<?= $color['color_id']; ?>" class="btn btn-sm btn-warning">Update</a>
                                            <a href="<?= base_url(); ?>/color/delete/<?= $color['color_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus kategori ini ?')">Delete</a>
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

<?= $this->endSection() ?>