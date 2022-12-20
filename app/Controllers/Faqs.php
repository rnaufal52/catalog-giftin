<?php

namespace App\Controllers;

use App\Models\FaqModel;
use App\Models\SettingModel;

use App\Controllers\BaseController;

class Faqs extends BaseController
{
    public function __construct()
    {
        $this->FaqModel = new FaqModel();
        $this->SettingModel = new SettingModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Gift In - Faq',
            'setting' => $this->SettingModel->getSetting(),
            'component' => 'faq.js',
            'faq' => $this->FaqModel->getFaq(),
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
                'faq' => $this->FaqModel->getFaq(),
            ];
            $msg = [
                'data' => view('UserTemplate/Template/faq', $data)
            ];

            echo json_encode($msg);
        } else {
            exit('Maaf tidak dapat diproses');
        }
    }
}
