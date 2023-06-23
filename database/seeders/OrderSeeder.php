<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order = Order::create([
            'customer_name'     => 'Fulan',
            'customer_wa'       => '628225678',
            'customer_address'  => 'Jl. dfsfsdf',
            'lat'               => 10.35345253,
            'long'              => 4.342525532,
            'price'             => 50_000,
            'app_fee'           => 3_000,
            'courir_fee'        => 4_000,
            'cabang_id'         => 1,
            'status'            => 'done'
        ]);

        $order->items()->createMany([
            [
                'product_id'        => 1,
                'qty'               => 2,
                'price'             => 15_000,
                'total'             => 30_000
            ],
            [
                'product_id'        => 2,
                'qty'               => 1,
                'price'             => 20_000,
                'total'             => 20_000
            ]
            ]);
       
    }
}
