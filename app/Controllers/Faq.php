<?php

namespace App\Controllers;

use App\Models\FaqModel;

use App\Controllers\BaseController;

class Faq extends BaseController
{
    public function __construct()
    {
        $this->FaqModel = new FaqModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Faq',
            'judul' => 'Faq',
            'faq' => $this->FaqModel->getFaq(),
            'validation' => $this->validator,
        ];
        return view('AdminTemplate/Faq/Faq', $data);
    }
    public function form()
    {
        helper('form');
        $data = [
            'page' => 'Faq',
            'judul' => 'Tambah Faq',
            'validation' => \Config\Services::validation()
        ];
        return view('AdminTemplate/Faq/AddFaq', $data);
    }
    public function tambah()
    {
        $validation = $this->validate([
            'faq_questions' => 'required',
            'faq_answer' => 'required'
        ]);

        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/faq/form')->withInput();
        }
        $data = array(
            'faq_questions'  => $this->request->getPost('faq_questions'),
            'faq_answer'  => $this->request->getPost('faq_answer')
        );
        $this->FaqModel->addFaq($data);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan!');
        return redirect()->to(base_url() . '/faq');
    }
    public function formupdate($faq_id)
    {
        helper('form');
        $data = [
            'page' => 'Faq',
            'judul' => 'Update Faq',
            'validation' => \Config\Services::validation(),
            'faq' => $this->FaqModel->idFaq($faq_id),
        ];
        return view('AdminTemplate/Faq/UpdateFaq', $data);
    }
    public function update()
    {
        $faq_id = $this->request->getVar('faq_id');

        $validation = $this->validate([
            'faq_questions' => 'required',
            'faq_answer' => 'required'
        ]);
        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/faq/formupdate/' . $faq_id)->withInput();
        }
        $data = array(
            'faq_questions'  => $this->request->getPost('faq_questions'),
            'faq_answer'  => $this->request->getPost('faq_answer')
        );
        $this->FaqModel->updateFaq($faq_id, $data);
        session()->setFlashdata('pesan', 'Data Berhasil Diperbarui!');
        return redirect()->to(base_url() . '/faq');
    }
    public function delete($faq_id)
    {
        $this->FaqModel->delete($faq_id);
        session()->setFlashdata('pesan', 'Data Berhasil Dihapus!');
        return redirect()->to(base_url() . '/faq');
    }
}
