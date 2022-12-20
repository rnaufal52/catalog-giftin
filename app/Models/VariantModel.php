<?php

namespace App\Models;

use CodeIgniter\Model;

class VariantModel extends Model
{
    protected $table      = 'variant';
    protected $primaryKey = 'variant_id';
    protected $allowedFields = [
        'id_product',
        'variant_size',
        'variant_price',
        'variant_discount',
        'variant_image'
    ];

    public function countvariant()
    {
        $builder = $this->db->table('variant');
        $jumlahvariant = $builder->countAllResults();
        return $jumlahvariant;
    }
    public function getnewvariant()
    {
        $query = $this->db->table('variant')
            ->join('product', 'variant.id_product=product.product_id')
            ->orderBy('variant_id', "DESC")->limit(5)->get()->getResultArray();
        return $query;
    }
    public function getVariant()
    {
        $getVariant = $this->db->table('variant')
            ->join('product', 'variant.id_product=product.product_id')
            ->orderBy('variant_id', "DESC")->get()->getResultArray();
        return $getVariant;
    }
    public function idVariant($variant_id)
    {
        $idVariant = $this->db->table('variant')
            ->join('product', 'variant.id_product=product.product_id')
            ->orderBy('variant_id', "DESC")->getWhere(['variant_id' => $variant_id])->getResultArray();
        return $idVariant;
    }
    public function addVariant($data)
    {
        $builder = $this->db->table($this->table);
        $addVariant = $builder->insert($data);
        return $addVariant;
    }
    public function updateVariant($variant_id, $data)
    {
        $builder = $this->db->table($this->table);
        $updateVariant = $builder->update($data, array('variant_id' => $variant_id));
        return $updateVariant;
    }
    public function deleteVariant($variant_id)
    {
        $builder = $this->db->table('$this->table');
        $deleteVariant = $builder->delete(array('id' => $variant_id));
        return $deleteVariant;
    }
}
