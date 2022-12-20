<?php

namespace App\Controllers;

use App\Models\CategoryModel;

use App\Controllers\BaseController;

class Category extends BaseController
{
    public function __construct()
    {
        $this->CategoryModel = new CategoryModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Kategori',
            'judul' => 'Kategori Produk',
            'category' => $this->CategoryModel->getCategory(),
            'validation' => $this->validator,
        ];
        return view('AdminTemplate/Category/Category', $data);
    }
    public function form()
    {
        helper('form');
        $data = [
            'page' => 'Kategori',
            'judul' => 'Tambah Kategori',
            'validation' => \Config\Services::validation()
        ];
        return view('AdminTemplate/Category/AddCategory', $data);
    }
    public function tambah()
    {
        $validation = $this->validate([
            'image' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,4096]',
            'category_name' => 'required|is_unique[category.category_name]'
        ]);
        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/category/form')->withInput();
        }
        $upload = $this->request->getFile('image');
        if ($upload->getError() == 4) {
            $upload = 'image.jpg';
        } else {
            $upload->move(WRITEPATH . '../public/assets/images/category/');
            $upload->getName();
        }

        $data = array(
            'category_name'  => $this->request->getPost('category_name'),
            'category_image' => $upload
        );
        $this->CategoryModel->addCategory($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to(base_url() . '/category');
    }
    public function formupdate($category_id)
    {
        helper('form');
        $data = [
            'page' => 'Kategori',
            'judul' => 'Update Kategori',
            'validation' => \Config\Services::validation(),
            'category' => $this->CategoryModel->idCategory($category_id),
        ];
        return view('AdminTemplate/Category/UpdateCategory', $data);
    }
    public function update()
    {
        $category_id = $this->request->getVar('category_id');
        $fotolama = $this->request->getVar('category_image');

        // cek nama
        $caridata = $this->CategoryModel->idCategory($category_id);
        if ($caridata[0]['category_name'] == $this->request->getVar('category_name')) {
            $rules_nama = 'required';
        } else {
            $rules_nama = 'required|is_unique[category.category_name]';
        }

        $validation = $this->validate([
            'image' => 'mime_in[image,image/jpg,image/jpeg,image/gif,image/png]|max_size[image,4096]',
            'category_name' => $rules_nama,
        ]);

        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/category/formupdate/' . $category_id)->withInput();
        }
        // cek foto
        $upload = $this->request->getFile('image');
        if ($upload->getError() == 4) {
            $upload = $fotolama;
        } else {
            $upload->move(WRITEPATH . '../public/assets/images/category/');
            $upload = $upload->getName();
            if ($fotolama != 'image.jpg') {
                unlink('../public/assets/images/category/' . $fotolama);
            }
        }
        $data = array(
            'category_name'  => $this->request->getPost('category_name'),
            'category_image' => $upload
        );
        $this->CategoryModel->updateCategory($category_id, $data);
        session()->setFlashdata('pesan', 'Data Berhasil Diperbarui!');
        return redirect()->to(base_url() . '/category');
    }
    public function delete($category_id)
    {
        $caridata = $this->CategoryModel->idCategory($category_id);
        if ($caridata[0]['category_image'] != 'image.jpg') {
            unlink('../public/assets/images/category/' . $caridata[0]['category_image']);
        }
        $this->CategoryModel->delete($category_id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to(base_url() . '/category');
    }
}
