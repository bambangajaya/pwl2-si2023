<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\View\View;

class SupplierController extends Controller
{
    public function index() : View
    {
       
        $supplier = Supplier::select('id', 'supplier_name', 'alamat_supplier', 'pic_supplier', 'no_hp_pic_supplier')->paginate(10);

       
        return view('supplier.index', compact('supplier'));
    }
}

