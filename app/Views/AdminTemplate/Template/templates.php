<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page; ?></title>

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main/app.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo/giftin.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?= base_url(); ?>/assets/images/logo/giftin.ico" type="image/png">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/custome.css">

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/shared/iconly.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.13.1/datatables.min.css">

</head>

<body>
    <div id="app">
        <!-- Sidebar -->
        <?= $this->include('AdminTemplate/Template/sidebar') ?>

        <!-- end sidebar -->
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3><?= $judul; ?></h3>
            </div>
            <div class="page-content">
                <?= $this->renderSection('content') ?>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Gift in</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="https://rnaufal.weebly.com">Rnaufal</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?= base_url(); ?>/assets/js/bootstrap.js"></script>
    <script src="<?= base_url(); ?>/assets/js/app.js"></script>

</body>

</html>