<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [''];
    public function get_product(){
        //get all products
        $sql = $this->select("products.*", "category_product.Product_category_name as product_category_name", "supplier.supplier_name as supplier_name")
                    ->join('category_product', 'category_product.id', '=', 'products.product_category_id')
                    ->join('supplier', 'supplier.id', '=', 'products.id_supplier');
    return $sql;
    }

    public function get_category_product() {
        $sql = DB::table('category_product')->select('*');

        return $sql;
    }

     /**
     * fillable
     * 
     * @var array
     */

     protected $fillable = [
        'image',
        'title',
        'product_category_id',
        'id_supplier',
        'description',
        'price',
        'stock'
    ];
}

