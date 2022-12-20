<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table      = 'category';
    protected $primaryKey = 'category_id';
    protected $allowedFields = [
        'category_name',
        'category_image',
    ];

    public function countcategory()
    {
        $builder = $this->db->table('category');
        $jumlahcategory = $builder->countAllResults();
        return $jumlahcategory;
    }
    public function getCategory()
    {
        $builder = $this->db->table('category');
        $getcategory = $builder->get()->getResultArray();
        return $getcategory;
    }
    public function addCategory($data)
    {
        $builder = $this->db->table($this->table);
        $addCategory = $builder->insert($data);
        return $addCategory;
    }
    public function idCategory($category_id)
    {
        $builder = $this->db->table($this->table);
        $idCategory = $builder->getWhere(['category_id' => $category_id])->getResultArray();
        return $idCategory;
    }
    public function updateCategory($category_id, $data)
    {
        $builder = $this->db->table($this->table);
        $updateCategory = $builder->update($data, array('category_id' => $category_id));
        return $updateCategory;
    }
    public function deleteCategory($category_id)
    {
        $builder = $this->db->table('$this->table');
        $deleteCategory = $builder->delete(array('id' => $category_id));
        return $deleteCategory;
    }
}
