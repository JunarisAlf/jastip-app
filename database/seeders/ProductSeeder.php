<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'          => 'Product Toko A1-1',
            'price'         => 15_000,
            'description'   => '-',
            'product_img'   => 'product_default_img.jpg',
            'toko_id'       => 1
        ]);
        Product::create([
            'name'          => 'Product Toko A1-2',
            'price'         => 20_000,
            'description'   => '-',
            'product_img'   => 'product_default_img.jpg',
            'toko_id'       => 1
        ]);
        Product::create([
            'name'          => 'Product Toko A1-3',
            'price'         => 10_000,
            'description'   => '-',
            'product_img'   => 'product_default_img.jpg',
            'toko_id'       => 1
        ]);


        Product::create([
            'name'          => 'Product Toko B1-1',
            'price'         => 15_000,
            'description'   => '-',
            'product_img'   => 'product_default_img.jpg',
            'toko_id'       => 2
        ]);
        Product::create([
            'name'          => 'Product Toko B1-2',
            'price'         => 20_000,
            'description'   => '-',
            'product_img'   => 'product_default_img.jpg',
            'toko_id'       => 2
        ]);
        Product::create([
            'name'          => 'Product Toko B1-3',
            'price'         => 10_000,
            'description'   => '-',
            'product_img'   => 'product_default_img.jpg',
            'toko_id'       => 2
        ]);
    }
}
