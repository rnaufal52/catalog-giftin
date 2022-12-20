<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section class="row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header mb-3">
                    <h4>Kategori Produk</h4>
                </div>
                <div class="card-body">
                    <a href="<?= base_url('/category/form'); ?>" class="btn btn-outline-primary">Tambah Kategori</a>
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
                                    <th>Nama Category</th>
                                    <th>Gambar</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($category as $category) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td class="text-bold-500"><?= $category['category_name'];  ?></td>
                                        <td><?= $category['category_image']; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>/category/formupdate/<?= $category['category_id']; ?>" class="btn btn-sm btn-warning">Update</a>
                                            <a href="<?= base_url(); ?>/category/delete/<?= $category['category_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus kategori ini ?')">Delete</a>
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