<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function get_product(){
        //get all products
        $sql = $this->select("products.*", "category_product.Product_category_name as product_category_name", "supplier.supplier_name as supplier_name")
                    ->join('category_product', 'category_product.id', '=', 'products.product_category_id')
                    ->join('supplier', 'supplier.id', '=', 'products.id_supplier');
    return $sql;
    }
}
