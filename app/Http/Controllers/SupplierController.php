<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\View\View;

class SupplierController extends Controller
{
    public function index() : View
    {
        // Mengambil data supplier dengan field tambahan sesuai tugas
        $supplier = Supplier::select('id', 'supplier_name', 'alamat_supplier', 'pic_supplier', 'no_hp_pic_supplier')->paginate(10);

        // Mengirimkan data supplier ke view
        return view('supplier.index', compact('supplier'));
    }
}

