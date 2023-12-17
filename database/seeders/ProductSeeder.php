<?php

namespace Database\Seeders;

use App\Models\Product;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = collect([
            [
                'name' => 'iPhone 14 Pro',
                'slug' => 'iphone-14-pro',
                'code' => 001,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'notes' => null,
                'category_id' => 3,
                'unit_id' => 2,
            ],
            [
                'name' => 'ASUS Laptop',
                'slug' => 'asus-laptop',
                'code' => 002,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'notes' => null,
                'category_id' => 3,
                'unit_id' => 2,
            ],
            [
                'name' => 'Logitech Keyboard',
                'slug' => 'logitech-keyboard',
                'code' => 003,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'notes' => null,
                'category_id' => 3,
                'unit_id' => 2,
            ],
            [
                'name' => 'Logitech Speakers',
                'slug' => 'logitech-speakers',
                'code' => 004,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'notes' => null,
                'category_id' => 3,
                'unit_id' => 2,
            ],
            [
                'name' => 'AutoCAD v7.0',
                'slug' => 'autocad-v7.0',
                'code' => 005,
                'quantity' => 10,
                'buying_price' => 900,
                'selling_price' => 1400,
                'notes' => null,
                'category_id' => 3,
                'unit_id' => 2,
            ]
        ]);

        $products->each(function ($product){
            Product::create($product);
        });
    }
}