<?php

namespace App\Controllers;

use App\Models\ColorModel;

use App\Controllers\BaseController;

class Color extends BaseController
{
    public function __construct()
    {
        $this->ColorModel = new ColorModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Warna',
            'judul' => 'Warna Produk',
            'color' => $this->ColorModel->getColor(),
            'validation' => $this->validator,
        ];
        return view('AdminTemplate/Color/Color', $data);
    }
    public function form()
    {
        helper('form');
        $data = [
            'page' => 'Warna',
            'judul' => 'Tambah Warna',
            'validation' => \Config\Services::validation()
        ];
        return view('AdminTemplate/Color/AddColor', $data);
    }
    public function tambah()
    {
        $validation = $this->validate([
            'color_name' => 'required|is_unique[color.color_name]'
        ]);

        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/color/form')->withInput();
        }
        $data = array(
            'color_name'  => $this->request->getPost('color_name')
        );
        $this->ColorModel->addColor($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to(base_url() . '/color');
    }
    public function formupdate($color_id)
    {
        helper('form');
        $data = [
            'page' => 'Warna',
            'judul' => 'Update Warna',
            'validation' => \Config\Services::validation(),
            'color' => $this->ColorModel->idColor($color_id),
        ];
        return view('AdminTemplate/Color/UpdateColor', $data);
    }
    public function update()
    {
        $color_id = $this->request->getVar('color_id');
        // cek nama
        $caridata = $this->ColorModel->idColor($color_id);
        if ($caridata[0]['color_name'] == $this->request->getVar('color_name')) {
            $rules_nama = 'required';
        } else {
            $rules_nama = 'required|is_unique[color.color_name]';
        }

        $validation = $this->validate([
            'color_name' => $rules_nama,
        ]);
        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/color/formupdate/' . $color_id)->withInput();
        }
        $data = array(
            'color_name'  => $this->request->getPost('color_name'),
        );
        $this->ColorModel->updateColor($color_id, $data);
        session()->setFlashdata('pesan', 'Data Berhasil Diperbarui!');
        return redirect()->to(base_url() . '/color');
    }
    public function delete($color_id)
    {
        $this->ColorModel->delete($color_id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to(base_url() . '/color');
    }
}
