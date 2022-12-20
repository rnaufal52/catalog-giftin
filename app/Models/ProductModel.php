<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table      = 'product';
    protected $primaryKey = 'product_id';
    protected $allowedFields = [
        'product_name',
        'product_description',
        'category_id',
        'product_image'
    ];

    public function countproduct()
    {
        $builder = $this->db->table('product');
        $jumlahproduk = $builder->countAllResults();
        return $jumlahproduk;
    }
    public function getnewproduct()
    {
        $query = $this->db->table('product')
            ->join('category', 'product.category_id=category.category_id')
            ->orderBy('product_id', "DESC")->limit(3)->get()->getResultArray();
        return $query;
    }
    public function getProduct()
    {
        $getProduct = $this->db->table('product')
            ->join('category', 'product.category_id=category.category_id')
            ->orderBy('product_id', "DESC")->get()->getResultArray();
        return $getProduct;
    }
    public function addProduct($data)
    {
        $builder = $this->db->table($this->table);
        $addProduct = $builder->insert($data);
        return $addProduct;
    }
    public function idProduct($product_id)
    {
        $idProduct = $this->db->table('product')
            ->join('category', 'product.category_id=category.category_id')
            ->orderBy('product_id', "DESC")->getWhere(['product_id' => $product_id])->getResultArray();
        return $idProduct;
    }
    public function updateProduct($product_id, $data)
    {
        $builder = $this->db->table($this->table);
        $updateProduct = $builder->update($data, array('product_id' => $product_id));
        return $updateProduct;
    }
    public function deleteProduct($product_id)
    {
        $builder = $this->db->table('$this->table');
        $deleteProduct = $builder->delete(array('id' => $product_id));
        return $deleteProduct;
    }
}
