<?php

namespace App\Models;

use CodeIgniter\Model;

class ColorModel extends Model
{
    protected $table      = 'color';
    protected $primaryKey = 'color_id';
    protected $allowedFields = [
        'color_name'
    ];
    public function countColor()
    {
        $builder = $this->db->table($this->table);
        $jumlahcolor = $builder->countAllResults();
        return $jumlahcolor;
    }
    public function getColor()
    {
        $builder = $this->db->table($this->table);
        $getColor = $builder->get()->getResultArray();
        return $getColor;
    }
    public function addColor($data)
    {
        $builder = $this->db->table($this->table);
        $addColor = $builder->insert($data);
        return $addColor;
    }
    public function idColor($color_id)
    {
        $builder = $this->db->table($this->table);
        $idColor = $builder->getWhere(['Color_id' => $color_id])->getResultArray();
        return $idColor;
    }
    public function updateColor($color_id, $data)
    {
        $builder = $this->db->table($this->table);
        $updateColor = $builder->update($data, array('Color_id' => $color_id));
        return $updateColor;
    }
    public function deleteColor($color_id)
    {
        $builder = $this->db->table('$this->table');
        $deleteColor = $builder->delete(array('id' => $color_id));
        return $deleteColor;
    }
}
