<?php

namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{
    protected $table      = 'setting';
    protected $primaryKey = 'setting_id';
    protected $allowedFields = [
        'setting_tagline',
        'setting_deskripsi',
        'setting_alamat',
        'setting_alamat_url',
        'setting_alamat_image',
        'setting_wa',
        'setting_wa_url',
        'setting_instagram',
        'setting_instagram_url',
        'setting_tiktok',
        'setting_tiktok_url',
        'setting_logo',
        'setting_email',
        'setting_email_url',
    ];
    public function getSetting()
    {
        $builder = $this->db->table($this->table);
        $idSetting = $builder->getWhere(['setting_id' => 1])->getResultArray();
        return $idSetting;
    }
    public function updateSetting($setting_id, $data)
    {
        $builder = $this->db->table($this->table);
        $updateSetting = $builder->update($data, array('setting_id' => $setting_id));
        return $updateSetting;
    }
}
