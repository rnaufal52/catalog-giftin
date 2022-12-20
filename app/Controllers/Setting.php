<?php

namespace App\Controllers;

use App\Models\SettingModel;
use App\Controllers\BaseController;

class Setting extends BaseController
{
    public function __construct()
    {
        $this->SettingModel = new SettingModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Setting Website',
            'judul' => 'Setting Website',
            'setting' => $this->SettingModel->getSetting(),
            'validation' => $this->validator,
            'validation' => \Config\Services::validation(),
        ];
        return view('AdminTemplate/Setting/Setting', $data);
    }
    public function update()
    {
        helper('form');
        $setting_id = $this->request->getVar('setting_id');
        $logolama = $this->request->getVar('setting_logo');
        $alamatlama = $this->request->getVar('setting_alamat_image');

        $validation = $this->validate([
            'logo' => 'mime_in[logo,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[logo,4096]',
            'alamat' => 'mime_in[alamat,image/jpg,image/jpeg,image/gif,image/png,image/webp]|max_size[alamat,4096]',
            'setting_tagline' => 'required',
            'setting_deskripsi' => 'required',
            'setting_alamat' => 'required',
            'setting_alamat_url' => 'required',
            'setting_alamat_image' => 'required',
            'setting_wa' => 'required',
            'setting_wa_url' => 'required',
            'setting_instagram' => 'required',
            'setting_instagram_url' => 'required',
            'setting_tiktok' => 'required',
            'setting_tiktok_url' => 'required',
            'setting_email' => 'required',
            'setting_email_url' => 'required',
        ]);

        if ($validation == FALSE) {
            $validation = \Config\Services::validation();
            return redirect()->to(base_url() . '/setting/')->withInput();
        }
        // cek foto logo
        $upload_logo = $this->request->getFile('logo');
        if ($upload_logo->getError() == 4) {
            $upload_logo = $logolama;
        } else {
            $upload_logo->move(WRITEPATH . '../public/assets/images/website/');
            $upload_logo = $upload_logo->getName();
            unlink('../public/assets/images/website/' . $logolama);
        }
        // cek foto alamat
        $upload_alamat = $this->request->getFile('alamat');
        if ($upload_alamat->getError() == 4) {
            $upload_alamat = $alamatlama;
        } else {
            $upload_alamat->move(WRITEPATH . '../public/assets/images/website/');
            $upload_alamat = $upload_alamat->getName();
            unlink('../public/assets/images/website/' . $alamatlama);
        }
        $data = array(
            'setting_tagline'          => $this->request->getPost('setting_tagline'),
            'setting_logo'         => $upload_logo,
            'setting_deskripsi'         => $this->request->getPost('setting_deskripsi'),
            'setting_alamat'      => $this->request->getPost('setting_alamat'),
            'setting_alamat_url'      => $this->request->getPost('setting_alamat_url'),
            'setting_wa'      => $this->request->getPost('setting_wa'),
            'setting_wa_url'      => $this->request->getPost('setting_wa_url'),
            'setting_instagram'      => $this->request->getPost('setting_instagram'),
            'setting_instagram_url'      => $this->request->getPost('setting_instagram_url'),
            'setting_tiktok'      => $this->request->getPost('setting_tiktok'),
            'setting_tiktok_url'      => $this->request->getPost('setting_tiktok_url'),
            'setting_email'      => $this->request->getPost('setting_email'),
            'setting_email_url'      => $this->request->getPost('setting_email_url'),
            'setting_email'      => $upload_alamat,
        );
        $this->SettingModel->updateSetting($setting_id, $data);
        session()->setFlashdata('pesan', 'Data Berhasil Diperbarui!');
        return redirect()->to(base_url() . '/setting');
    }
}
