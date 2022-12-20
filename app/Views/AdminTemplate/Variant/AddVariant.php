<?= $this->extend('AdminTemplate/Template/templates') ?>

<?= $this->section('content') ?>
<section id="basic-horizontal-layouts">
    <div class="row match-height">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Variant</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <?= form_open_multipart(base_url('variant/tambah')); ?>
                        <?= csrf_field(); ?>
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <label>Nama Variant</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="first-name" class="form-control <?= ($validation->hasError('variant_size')) ? 'is-invalid' : ''; ?>" name="variant_size" placeholder="Nama Variant" value="<?= old('variant_size') ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('variant_size'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Jenis Produk</label>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <select class="form-select" aria-label="id_product" id="id_product" name="id_product">
                                        <?php foreach ($product as $k) : ?>
                                            <option value="<?= $k['product_id']; ?>"><?= $k['product_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-7"></div>
                                <div class="col-md-2">
                                    <label>Harga</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="rupiah" class="form-control <?= ($validation->hasError('variant_price')) ? 'is-invalid' : ''; ?>" name="variant_price" placeholder="Harga" value="<?= old('variant_price') ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('variant_price'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Diskon Dalam Rupiah</label>
                                </div>
                                <div class="col-md-10 form-group">
                                    <input type="text" id="rupiah1" class="form-control <?= ($validation->hasError('variant_discount')) ? 'is-invalid' : ''; ?>" name="variant_discount" placeholder="Diskon" value="<?= old('variant_discount') ?>" autofocus>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('variant_discount'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>Upload Gambar</label>
                                </div>
                                <div class="col-md-10 mb-5">
                                    <input type="file" name="image" class="form-control <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('image'); ?>
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

<script type="text/javascript">
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah.value = formatRupiah(this.value, 'Rp. ');
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
</script>

<script type="text/javascript">
    var rupiah1 = document.getElementById('rupiah1');
    rupiah1.addEventListener('keyup', function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatrupiah1() untuk mengubah angka yang di ketik menjadi format angka
        rupiah1.value = formatrupiah1(this.value, 'Rp. ');
    });

    /* Fungsi formatrupiah1 */
    function formatrupiah1(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah1 = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah1 += separator + ribuan.join('.');
        }

        rupiah1 = split[1] != undefined ? rupiah1 + ',' + split[1] : rupiah1;
        return prefix == undefined ? rupiah1 : (rupiah1 ? 'Rp. ' + rupiah1 : '');
    }
</script>

<?= $this->endSection() ?>