<section>
    <!-- <div class="row align-items-center mt-5">
        <div class="col-4 footer-col">
            <img src="<?= base_url() ?>/assets/images/website/Asset 2.png" class="card-img-top" alt="">
        </div>
        <div class="col-2"></div>
        <div class="col-6 footer-col">
        <div class="col-6 footer-col">
            <h1>Gift In</h1>
            <h5 class="text-success"><?= $setting[0]['setting_tagline'] ?></h5>
            <p>Gift in menyediakan berbagai produk sebagai hadiah untuk orang terkasih di segala moment.</p>
            <a href="<?= $setting[0]['setting_wa_url']  ?>" target="_blank" type="button" class="btn btn-outline-success">Pesan Sekarang</a>
        </div>
    </div> -->
    <div class="row text-center mt-5">
        <div class="col align-self-center">
            <h2>About <span class="text-success">us</span></h2>
            <p><?= $setting[0]['setting_deskripsi'] ?></p>
        </div>
    </div>
    <div class="row">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url() ?>/assets/images/website/banner utama.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url() ?>/assets/images/website/Banner_thankscard.webp" class="d-block w-100" alt="...">
                </div>
                <!-- <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>