<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Product;
use App\Http\Requests\BarangKeluar\StoreBarangKeluarRequest;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $barang_keluar = BarangKeluar::all();

        return view('barang_keluar.index', [
            'barang_keluar' => $barang_keluar
        ]);
    }

    public function create()
    {
        $product = Product::all(['id', 'name']);

        return view('barang_keluar.create', [
            'product' => $product,
        ]);
    }

    public function store(StoreBarangKeluarRequest $request)
    {
        $barang_keluar = BarangKeluar::create($request->all());

        $stok_barang = Product::where('name', $request->name)->first();
        $newValue = $stok_barang->quantity - $request->quantity_out;
        $stok_barang->update(['quantity' => $newValue]);

        return redirect()
            ->route('barang_keluar.index')
            ->with('success', 'New barang keluar has been created!');
    }

    public function show(BarangKeluar $barang_keluar)
    {
        return view('barang_keluar.show', [
            'barang_keluar' => $barang_keluar
        ]);
    }

    
    public function destroy(Customer $customer)
    {
        if($customer->photo)
        {
            unlink(public_path('storage/customers/') . $customer->photo);
        }

        $customer->delete();

        return redirect()
            ->back()
            ->with('success', 'Customer has been deleted!');
    }
}

    
