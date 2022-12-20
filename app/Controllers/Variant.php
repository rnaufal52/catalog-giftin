<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\VariantModel;
use App\Controllers\BaseController;

class Variant extends BaseController
{
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
        $this->VariantModel = new VariantModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Variant Produk',
            'judul' => 'Variant Produk',
            'variant' => $this->VariantModel->getVariant(),
            'validation' => $this->validator,
        ];
        return view('AdminTemplate/Variant/Variant', $data);
    }
    public function form()
    {
        helper('form');
        $data = [
            'page' => 'Variant Produk',
            'judul' => 'Variant Produk',
            'validation' => \Config\Services::validation(),
            'product' => $this->ProductModel->getProduct(),
        ];
        return view('AdminTemplate/Variant/AddVariant', $data);
    }
    public function tambah()
    {
        $validation = $this->validate([
            'image' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,4096]',
            'variant_size' => 'required',
            'variant_price' => 'required',
            'variant_discount' => 'required',
        ]);
        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/variant/form')->withInput();
        }
        $upload = $this->request->getFile('image');
        if ($upload->getError() == 4) {
            $upload = 'image.jpg';
        } else {
            $upload->move(WRITEPATH . '../public/assets/images/variant/');
            $upload->getName();
        }

        $data = array(
            'variant_size'          => $this->request->getPost('variant_size'),
            'variant_image'         => $upload,
            'variant_price'   => $this->request->getPost('variant_price'),
            'variant_discount'   => $this->request->getPost('variant_discount'),
            'id_product'           => $this->request->getPost('id_product')
        );
        $this->VariantModel->addVariant($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to(base_url() . '/variant');
    }
    public function formupdate($variant_id)
    {
        helper('form');
        $data = [
            'page' => 'Variant Produk',
            'judul' => 'Variant Produk',
            'validation' => \Config\Services::validation(),
            'product' => $this->ProductModel->getProduct(),
            'variant' => $this->VariantModel->idVariant($variant_id),
        ];
        return view('AdminTemplate/Variant/UpdateVariant', $data);
    }
    public function update()
    {
        $variant_id = $this->request->getVar('variant_id');
        $fotolama = $this->request->getVar('image');


        $validation = $this->validate([
            'image' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,4096]',
            'variant_size' => 'required',
            'variant_price' => 'required',
            'variant_discount' => 'required',
        ]);

        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/variant/formupdate/' . $variant_id)->withInput();
        }
        // cek foto
        $upload = $this->request->getFile('image');
        if ($upload->getError() == 4) {
            $upload = $fotolama;
        } else {
            $upload->move(WRITEPATH . '../public/assets/images/variant/');
            $upload = $upload->getName();
            if ($fotolama != 'image.jpg') {
                unlink('../public/assets/images/variant/' . $fotolama);
            }
        }
        $data = array(
            'variant_size'          => $this->request->getPost('variant_size'),
            'variant_image'         => $upload,
            'variant_price'         => $this->request->getPost('variant_price'),
            'variant_discount'      => $this->request->getPost('variant_discount'),
            'id_product'            => $this->request->getPost('id_product')
        );
        $this->VariantModel->updateVariant($variant_id, $data);
        session()->setFlashdata('pesan', 'Data Berhasil Diperbarui!');
        return redirect()->to(base_url() . '/variant');
    }
    public function delete($variant_id)
    {
        $caridata = $this->VariantModel->idVariant($variant_id);
        if ($caridata[0]['variant_image'] != 'image.jpg') {
            unlink('../public/assets/images/variant/' . $caridata[0]['variant_image']);
        }
        $this->VariantModel->delete($variant_id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to(base_url() . '/variant');
    }
}
