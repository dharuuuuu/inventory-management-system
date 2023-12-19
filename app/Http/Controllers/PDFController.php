<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Product;
use App\Models\Category;
use App\Models\Unit;
use Illuminate\Support\Carbon;
use Picqer\Barcode\BarcodeGeneratorHTML;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function PDFbarang_masuk()
    {
        $barang_masuk = BarangMasuk::get();
  
        $data = [
            'title' => 'Barang Masuk',
            'date' => Carbon::now(),
            'barang_masuk' => $barang_masuk
        ]; 
            
        $pdf = PDF::loadView('PDFbarang_masuk', $data);
     
        return $pdf->download('Barang Masuk' . ' - '. Carbon::now() . '.pdf');
    }

    public function PDFbarang_keluar()
    {
        $barang_keluar = BarangKeluar::get();
  
        $data = [
            'title' => 'Barang Keluar',
            'date' => Carbon::now(),
            'barang_keluar' => $barang_keluar
        ]; 
            
        $pdf = PDF::loadView('PDFbarang_keluar', $data);
     
        return $pdf->download('Barang Keluar' . ' - '. Carbon::now() . '.pdf');
    }

    public function PDFproduct()
    {
        $product = Product::get();
        $code = Product::select("code")->get();
        $categories = Category::all(['id', 'name']);
        $units = Unit::all(['id', 'name']);

        $generator = new BarcodeGeneratorHTML();
        $barcode = $generator->getBarcode($code, $generator::TYPE_CODE_128);
  
        $data = [
            'title' => 'Product',
            'date' => Carbon::now(),
            'product' => $product,
            'units' => $units,
            'categories' => $categories,
            'barcode' => $barcode,
        ]; 
            
        $pdf = PDF::loadView('PDFproduct', $data);
        $pdf->setPaper('a3', 'landscape');
     
        return $pdf->download('Product' . ' - '. Carbon::now() . '.pdf');
    }
}