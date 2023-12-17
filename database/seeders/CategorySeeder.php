<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect([
            [
                'id'    => 1,
                'name'  => 'Pupuk',
                'slug'  => 'pupuk',
                'created_at' => now()
            ],
            [
                'id'    => 2,
                'name'  => 'Pestisida',
                'slug'  => 'pestisida',
                'created_at' => now()
            ],
            [
                'id'    => 3,
                'name'  => 'Alat Pertanian',
                'slug'  => 'alat_pertanian',
                'created_at' => now()
            ],
        ]);

        $categories->each(function ($category){
            Category::insert($category);
        });
    }
}
