<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Product;
use App\Http\Requests\BarangMasuk\StoreBarangMasukRequest;

class BarangMasukController extends Controller
{
    public function index()
    {
        $barang_masuk = BarangMasuk::all();

        return view('barang_masuk.index', [
            'barang_masuk' => $barang_masuk
        ]);
    }

    public function create()
    {
        $product = Product::all(['id', 'name']);

        return view('barang_masuk.create', [
            'product' => $product,
        ]);
    }

    public function store(StoreBarangMasukRequest $request)
    {
        $barang_masuk = BarangMasuk::create($request->all());

        $stok_barang = Product::where('name', $request->name)->first();
        $newValue = $stok_barang->quantity + $request->quantity_in;
        $stok_barang->update(['quantity' => $newValue]);

        return redirect()
            ->route('barang_masuk.index')
            ->with('success', 'New barang masuk has been created!');
    }

    public function show(BarangMasuk $barang_masuk)
    {
        return view('barang_masuk.show', [
            'barang_masuk' => $barang_masuk
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

    
