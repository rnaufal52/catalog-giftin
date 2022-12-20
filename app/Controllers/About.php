<?php

namespace App\Controllers;

use App\Models\SettingModel;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function __construct()
    {
        $this->SettingModel = new SettingModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Gift In - About',
            'setting' => $this->SettingModel->getSetting(),
            'component' => 'about.js',
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
                'setting' => $this->SettingModel->getSetting(),
            ];
            $msg = [
                'data' => view('UserTemplate/Template/about', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
}
