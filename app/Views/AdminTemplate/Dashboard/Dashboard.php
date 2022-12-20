<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>

<section class="row">
    <div class="col-12 col-lg-9">
        <!-- Card Produk, Categori, Invoice, User -->
        <div class="row">
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldShow"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Produk</h6>
                                <h6 class="font-extrabold mb-0"><?= $jml_produk; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Kategori</h6>
                                <h6 class="font-extrabold mb-0"><?= $jml_kategori ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldAdd-User"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Warna</h6>
                                <h6 class="font-extrabold mb-0"><?= $jml_color ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body px-4 py-4-5">
                        <div class="row">
                            <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldBookmark"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <h6 class="text-muted font-semibold">Variant</h6>
                                <h6 class="font-extrabold mb-0"><?= $jml_variant; ?></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End -->
        <!-- Tabel Produk -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Produk</h4>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-lg">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Variant</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($new_variant as $new_variant) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td class="text-bold-500"><?= $new_variant['product_name'];  ?></td>
                                            <td><?= $new_variant['variant_size']; ?></td>
                                            <td class="text-bold-500"><?= $new_variant['variant_price']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Tabel Produk -->
    </div>
    <div class="col-12 col-lg-3">
        <!-- <div class="card">
            <div class="card-body py-4 px-4">
                <div class="d-flex align-items-center">
                    <div class="avatar avatar-xl">
                        <img src="assets/images/faces/1.jpg" alt="Face 1">
                    </div>
                    <div class="ms-3 name">
                        <h5 class="font-bold">John Duck</h5>
                        <h6 class="text-muted mb-0">@johnducky</h6>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="card">
            <div class="card-header">
                <h4>Produk Terbaru</h4>
            </div>
            <div class="card-content pb-4">
                <?php foreach ($new_product as $new_product) : ?>
                    <div class="recent-message d-flex px-4 py-3">
                        <div class="avatar avatar-lg">
                            <img src="<?= base_url() ?>/assets/images/product/<?= $new_product['product_image']  ?>">
                        </div>
                        <div class="name ms-4">
                            <h5 class="mb-1"><?= $new_product['product_name']; ?></h5>
                            <h6 class="text-muted mb-0"><?= $new_product['category_name'] ?></h6>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="px-4">
                    <a href="<?= base_url('/product')  ?>" class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Semua Produk</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>