<?php

namespace App\Http\Controllers\Dashboards;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Purchase;
use App\Models\Quotation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $products = Product::count();
        $categories = Category::count();
        $barang_masuk = BarangMasuk::count();
        $barang_keluar = BarangKeluar::count();

        return view('dashboard', [
            'products' => $products,
            'users' => $users,
            'categories' => $categories,
            'barang_masuk' => $barang_masuk,
            'barang_keluar' => $barang_keluar
        ]);
    }
}
