<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\ColorModel;
use App\Models\VariantModel;
use App\Models\SettingModel;

use App\Controllers\BaseController;

class Giftin extends BaseController
{
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
        $this->CategoryModel = new CategoryModel();
        $this->ColorModel = new ColorModel();
        $this->VariantModel = new VariantModel();
        $this->SettingModel = new SettingModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Gift In - Home',
            'setting' => $this->SettingModel->getSetting(),
            'component' => 'home.js',
            'pemesanan'=>[
                ['nama'=>'Hubungi Admin', 'image'=>'comments.png'],
                ['nama'=>'Isi form pemesanan', 'image'=>'form.png'],
                ['nama'=>'Konfirmasi Pembayaran', 'image'=>'credit-card.png'],
                ['nama'=>'Pengambilan Produk', 'image'=>'truck-side.png'],
            ],
        ];
        // dd($data);
        return view('UserTemplate/Template/UserTemplate', $data);
    }
    public function ambildata()
    {
        // jika ada request berupa ajax maka jalankan ini
        if ($this->request->isAJAX()) {
            $data = [
                'variant' => $this->VariantModel->getVariant(),
                'category' => $this->CategoryModel->getCategory(),
                'produk_judul' => 'Gift Produk Buat Kamu',
            ];
            $msg = [
                'data' => view('UserTemplate/Template/home', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
}
