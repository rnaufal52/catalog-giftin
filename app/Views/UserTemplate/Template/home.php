<section id="Jumbotron" class="jumbotron">
    <img src="<?= base_url() ?>/assets/images/website/banner utama.png" class="img-fluid" alt="spanduk">
</section>
<section id="gift-produk" class="mt-5">
    <div class="row">
        <h3><?= $produk_judul ?></h3>
        <p>Produk dapat di kustom mulai dari <b>warna, tulisan, gambar, dan ukuran</b>.</p>
    </div>
    <div class="row mb-4">
        <div class="col" id="myDIV">
            <button type="button" class="btn btn-outline-success active btn-sm" id="All">
                Semua
            </button>
            <?php $i = 1 ?>
            <?php foreach ($category as $category) : ?>
                <button type="button" class="btn btn-outline-success btn-sm" id="product-<?= $i++; ?>">
                    <?= $category['category_name'];  ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="row text-center" id="parrent">
        <?php foreach ($variant as $variant) : ?>
            <div class="me-3 mb-3 product-card product-<?= $variant['category_id'] ?> item">
                <a href="https://api.whatsapp.com/send/?phone=6281373505542&text=<?= "Hallo kak, saya mau pesan " ?><?= $variant['product_name'] ?><?= " ukuran " ?><?= $variant['variant_size']; ?>" target="_blank" class="link">
                    <div class="card product-card">
                        <div class="product-image">
                            <img src="<?= base_url() ?>/assets/images/variant/<?= $variant['variant_image']; ?>" class="card-img-top" alt="image">
                        </div>
                        <div class="card-body">
                            <h6 class="text-success"><?= $variant['product_name']; ?></h6>
                            <h6 class="text-success"><?= $variant['variant_size']; ?></h6>
                            <!-- <small><s class="danger">Rp.45.000</s></small> -->
                            <h5 class="product-title"><?= $variant['variant_price'];  ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<div class="tambahmodal" style="display:none ;"></div>
<section id="diskon" class="jumbotron mt-5">
    <img src="<?= base_url() ?>/assets/images/website/Banner_thankscard.webp" class="img-fluid" alt="spanduk">
</section>

<script>
    var selector = '#myDIV button';

    $(selector).on('click', function() {
        $(selector).removeClass('active');
        $(this).addClass('active');
    });

    $(function() {
        $('#All').click(function() {
            $('.item').show();
            return false;
        });

        $('#product-1').click(function() {
            $('.item').show();
            $('.item').not('.product-1').hide();
            return false;
        });

        $('#product-2').click(function() {
            $('.item').show();
            $('.item').not('.product-2').hide();
            return false;
        });

        $('#product-3').click(function() {
            $('.item').show();
            $('.item').not('.product-3').hide();
            return false;
        });
    });
</script>