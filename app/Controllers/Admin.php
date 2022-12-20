<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\ColorModel;
use App\Models\VariantModel;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
        $this->CategoryModel = new CategoryModel();
        $this->ColorModel = new ColorModel();
        $this->VariantModel = new VariantModel();
    }
    public function index()
    {
        $data = [
            'page' => 'Dashboard',
            'judul' => 'Product Statistic',
            'jml_produk' => $this->ProductModel->countproduct(),
            'jml_kategori' => $this->CategoryModel->countcategory(),
            'jml_color' => $this->ColorModel->countColor(),
            'jml_variant' => $this->VariantModel->countvariant(),
            'new_product' => $this->ProductModel->getnewproduct(),
            'new_variant' => $this->VariantModel->getnewvariant(),
        ];
        // dd($data);
        return view('AdminTemplate/Dashboard/Dashboard', $data);
    }
}
