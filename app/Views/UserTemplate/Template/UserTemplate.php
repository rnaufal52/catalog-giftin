<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/custome.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo/giftin.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo/giftin.ico" type="image/x-icon">

</head>

<body>
    <!-- head -->
    <div class="brand-identity hide">
        <div class="container">
            <div class="row text-light text-small">
                <div class="col mt-2">
                    <small><a class="text-light" target="_blank" href="<?= $setting[0]['setting_wa_url'] ?>"><?= $setting[0]['setting_wa'] ?></a></small>
                </div>
                <div class="col text-center mt-2">
                    <small>
                        <p><?= $setting[0]['setting_tagline'] ?> | Shop Now</p>
                    </small>
                </div>
                <div class="col text-end mt-2">
                    <small><a class="text-light" target="_blank" href="<?= $setting[0]['setting_alamat_url'] ?>"><?= $setting[0]['setting_alamat'] ?></a></small>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light up">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?= base_url() ?>/assets/images/website/<?= $setting[0]['setting_logo'] ?>" alt="Logo" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/giftin') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/faqs') ?>">Faq</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="root"></div>
        <section id="howtoorder" class="mt-5">
            <div class="row mb-4">
                <h5>Cara Pemesanan</h3>
            </div>
            <div class="row">
                <?php $i = 1; ?>
                <?php foreach ($pemesanan as $pemesanan) : ?>
                    <div class="col-sm-2 mb-3 category-card me-3">
                        <a class="link">
                            <div class="card category-card">
                                <div class="category-image">
                                    <img src="<?= base_url() ?>/assets/images/website/<?= $pemesanan['image']; ?>" class="card-img-top category-image" alt="...">
                                </div>
                                <h5 class="category-head mb-5 text-center">0<?= $i++ ?></h5>
                                <p class="category-text text-center"><small><?= $pemesanan['nama']; ?></small> </p>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <hr class="mt-4">
        <footer>
            <div class="row mt-4">
                <div class="col-5 footer-col mb-3">
                    <div class="footer-logo">
                        <img src="<?= base_url() ?>/assets/images/logo/<?= $setting[0]['setting_logo'] ?>" alt="Logo" class="footer-logo">
                    </div>
                    <p class="mt-2"><?= $setting[0]['setting_tagline'] ?></p>
                    <h5>Metode Pembayaran</h5>
                    <div class="row">
                        <div class="col-2">
                            <div class="footer-image">
                                <img src="<?= base_url() ?>/assets/images/website/BNI.webp" alt="Tf BNI" class="footer-image">
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="footer-image">
                                <img src="<?= base_url() ?>/assets/images/website/dana.webp" alt="Dana" class="footer-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 footer-col mb-3">
                    <h5>Menu</h5>
                    <ul class="list-reset">
                        <li><a href="" class="link">Home</a></li>
                        <li><a href="" class="link">About</a></li>
                        <li><a href="" class="link">Faq</a></li>
                    </ul>
                </div>
                <div class="col-2 footer-col mb-3">
                    <h5>Social Media</h5>
                    <ul class="list-reset">
                        <li class="mb-2">
                            <a href="<?= $setting[0]['setting_tiktok_url'] ?>" class="link" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" class="footer-icon" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                    <path d="M22.465,9.866c-2.139,0-4.122-0.684-5.74-1.846v8.385c0,4.188-3.407,7.594-7.594,7.594c-1.618,0-3.119-0.51-4.352-1.376  c-1.958-1.375-3.242-3.649-3.242-6.218c0-4.188,3.407-7.595,7.595-7.595c0.348,0,0.688,0.029,1.023,0.074v0.977v3.235  c-0.324-0.101-0.666-0.16-1.023-0.16c-1.912,0-3.468,1.556-3.468,3.469c0,1.332,0.756,2.489,1.86,3.07  c0.481,0.253,1.028,0.398,1.609,0.398c1.868,0,3.392-1.486,3.462-3.338L12.598,0h4.126c0,0.358,0.035,0.707,0.097,1.047  c0.291,1.572,1.224,2.921,2.517,3.764c0.9,0.587,1.974,0.93,3.126,0.93V9.866z" />
                                </svg>
                                <?= $setting[0]['setting_tiktok'] ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= $setting[0]['setting_instagram_url'] ?>" class="link" target="_blank">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve" class="footer-icon">
                                    <g>
                                        <path d="M12,2.162c3.204,0,3.584,0.012,4.849,0.07c1.308,0.06,2.655,0.358,3.608,1.311c0.962,0.962,1.251,2.296,1.311,3.608   c0.058,1.265,0.07,1.645,0.07,4.849c0,3.204-0.012,3.584-0.07,4.849c-0.059,1.301-0.364,2.661-1.311,3.608   c-0.962,0.962-2.295,1.251-3.608,1.311c-1.265,0.058-1.645,0.07-4.849,0.07s-3.584-0.012-4.849-0.07   c-1.291-0.059-2.669-0.371-3.608-1.311c-0.957-0.957-1.251-2.304-1.311-3.608c-0.058-1.265-0.07-1.645-0.07-4.849   c0-3.204,0.012-3.584,0.07-4.849c0.059-1.296,0.367-2.664,1.311-3.608c0.96-0.96,2.299-1.251,3.608-1.311   C8.416,2.174,8.796,2.162,12,2.162 M12,0C8.741,0,8.332,0.014,7.052,0.072C5.197,0.157,3.355,0.673,2.014,2.014   C0.668,3.36,0.157,5.198,0.072,7.052C0.014,8.332,0,8.741,0,12c0,3.259,0.014,3.668,0.072,4.948c0.085,1.853,0.603,3.7,1.942,5.038   c1.345,1.345,3.186,1.857,5.038,1.942C8.332,23.986,8.741,24,12,24c3.259,0,3.668-0.014,4.948-0.072   c1.854-0.085,3.698-0.602,5.038-1.942c1.347-1.347,1.857-3.184,1.942-5.038C23.986,15.668,24,15.259,24,12   c0-3.259-0.014-3.668-0.072-4.948c-0.085-1.855-0.602-3.698-1.942-5.038c-1.343-1.343-3.189-1.858-5.038-1.942   C15.668,0.014,15.259,0,12,0z" />
                                        <path d="M12,5.838c-3.403,0-6.162,2.759-6.162,6.162c0,3.403,2.759,6.162,6.162,6.162s6.162-2.759,6.162-6.162   C18.162,8.597,15.403,5.838,12,5.838z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S14.209,16,12,16z" />
                                        <circle cx="18.406" cy="5.594" r="1.44" />
                                    </g>
                                </svg>
                                <?= $setting[0]['setting_instagram'] ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-3 ms-auto footer-col mb-3">
                    <h5>Lokasi</h5>
                    <div class="footer-maps">
                        <a href="<?= $setting[0]['setting_alamat_url'] ?>" target="_blank">
                            <div class="footer-maps">
                                <img src="<?= base_url() ?>/assets/images/website/<?= $setting[0]['setting_alamat_image'] ?>" alt="maps" class="footer-maps">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-6">
                    <p class="flex-1">©2022 — Giftin</p>
                </div>
                <div class="col-6">
                    <div class="flex-1 text-end text-grey">Powered by <code>Rnaufal</code></div>
                </div>
            </div>
        </footer>
    </div>




    <script src="<?= base_url(); ?>/assets/js/bootstrap.js"></script>
    <!-- Ajax script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Load Component -->
    <script src="<?= base_url(); ?>/assets/js/<?= $component ?>"></script>
</body>