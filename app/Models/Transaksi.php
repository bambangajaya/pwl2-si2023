<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    // Nama tabel di database
    protected $table = 'transaksi_penjualan';

    // Method untuk mengambil transaksi dengan join tabel produk dan kategori produk
    public function get_transaksi()
    {
        // Query untuk join tabel transaksi_penjualan, products, dan category_product
        $sql = $this->select(
                "transaksi_penjualan.*", 
                "products.title as product_name", 
                "products.price as product_price", 
                "category_product.product_category_name as category_name"
            )
            ->join('products', 'products.id', '=', 'transaksi_penjualan.id_products')
            ->join('category_product', 'category_product.id', '=', 'products.product_category_id'); // Join ke kategori produk
        
        return $sql;
    }
}
