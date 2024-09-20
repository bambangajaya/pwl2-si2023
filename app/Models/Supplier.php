<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Tentukan nama tabel yang digunakan
    protected $table = 'supplier';

    // Daftar kolom yang bisa diisi
    protected $fillable = [
        'supplier_name', 'alamat_supplier', 'pic_supplier', 'no_hp_pic_supplier', 'created_at', 'updated_at'
    ];

    // Fungsi untuk mengambil data supplier
    public function get_suppliers()
    {
        return $this->select('id', 'supplier_name', 'alamat_supplier', 'pic_supplier', 'no_hp_pic_supplier')->get();
    }
}

