<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Controllers\BaseController;

class Product extends BaseController
{
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
        $this->CategoryModel = new CategoryModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Produk',
            'judul' => 'Produk',
            'product' => $this->ProductModel->getProduct(),
            'validation' => $this->validator,
        ];
        return view('AdminTemplate/Product/Product', $data);
    }
    public function form()
    {
        helper('form');
        $data = [
            'page' => 'Produk',
            'judul' => 'Tambah Produk',
            'validation' => \Config\Services::validation(),
            'category' => $this->CategoryModel->getCategory(),
        ];
        return view('AdminTemplate/Product/AddProduct', $data);
    }
    public function tambah()
    {
        $validation = $this->validate([
            'image' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,4096]',
            'product_name' => 'required|is_unique[product.product_name]',
            'product_description' => 'required',
        ]);
        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/product/form')->withInput();
        }
        $upload = $this->request->getFile('image');
        if ($upload->getError() == 4) {
            $upload = 'image.jpg';
        } else {
            $upload->move(WRITEPATH . '../public/assets/images/product/');
            $upload = $upload->getName();
        }
        $data = array(
            'product_name'          => $this->request->getPost('product_name'),
            'product_image'         => $upload,
            'product_description'   => $this->request->getPost('product_description'),
            'category_id'           => $this->request->getPost('category_id')
        );
        $this->ProductModel->addProduct($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to(base_url() . '/product');
    }
    public function formupdate($product_id)
    {
        helper('form');
        $data = [
            'page' => 'Produk',
            'judul' => 'Update Produk',
            'validation' => \Config\Services::validation(),
            'category' => $this->CategoryModel->getCategory(),
            'product' => $this->ProductModel->idProduct($product_id),
        ];
        return view('AdminTemplate/Product/UpdateProduct', $data);
    }
    public function update()
    {
        $product_id = $this->request->getVar('product_id');
        $fotolama = $this->request->getVar('product_image');

        // cek nama
        $caridata = $this->ProductModel->idProduct($product_id);
        if ($caridata[0]['product_name'] == $this->request->getVar('product_name')) {
            $rules_nama = 'required';
        } else {
            $rules_nama = 'required|is_unique[product.product_name]';
        }

        $validation = $this->validate([
            'image' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,4096]',
            'product_name' => $rules_nama,
            'product_description' => 'required',
        ]);

        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/product/formupdate/' . $product_id)->withInput();
        }
        // cek foto
        $upload = $this->request->getFile('image');
        if ($upload->getError() == 4) {
            $upload = $fotolama;
        } else {
            $upload->move(WRITEPATH . '../public/assets/images/product/');
            $upload = $upload->getName();
            if ($fotolama != 'image.jpg') {
                unlink('../public/assets/images/product/' . $fotolama);
            }
        }
        $data = array(
            'product_name'  => $this->request->getPost('product_name'),
            'product_image' => $upload,
            'product_description' => $this->request->getPost('product_description'),
            'category_id' => $this->request->getPost('category_id'),
        );
        $this->ProductModel->updateProduct($product_id, $data);
        session()->setFlashdata('pesan', 'Data Berhasil Diperbarui!');
        return redirect()->to(base_url() . '/product');
    }
    public function delete($product_id)
    {
        $caridata = $this->ProductModel->idProduct($product_id);
        if ($caridata[0]['product_image'] != 'image.jpg') {
            unlink('../public/assets/images/product/' . $caridata[0]['product_image']);
        }
        $this->ProductModel->delete($product_id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to(base_url() . '/product');
    }
}
