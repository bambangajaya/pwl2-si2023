<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Supplier extends Model
{
    use HasFactory;

   
    protected $table = 'supplier';

   
    protected $fillable = [
        'supplier_name', 'alamat_supplier', 'pic_supplier', 'no_hp_pic_supplier', 'created_at', 'updated_at'
    ];

    
    public function get_supplier()
    {
        $sql = $this->select('supplier.*');
        return $sql;
    }

    
}

