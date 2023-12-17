<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class ProdukController extends Controller
{

    /**
     * Show and Search data artikel
     */
    public function show(Request $request)
    {
        $search = $request->search;
        $produk = Product::where('name','like', '%' . $search . '%')
                        ->orderby('id', 'desc')->paginate(8);

        return view('home.app.product', ['produk' => $produk]);
    }

    public function detail($slug)
    {
        // $users = DB::table('users')->get();
        $produk = Product::where('products.slug', $slug)->first();
        return view('home.app.product_detail', compact('produk'));
    }
}