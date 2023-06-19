<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Toko::create([
            'name'          => 'Toko A1',
            'description'   => 'Deskripsi Toko',
            'wa_number'     => '6282298097',
            'address'       => 'Jl. Durian N0. 10',
            'lat'           => 0.5270575138427904,
            'long'          => 101.4200681601453,
            'cover_img'     => 'cover_default.jpg',
            'profile_img'   => 'profile_default.png',
            'cabang_id'     => 1
        ]);
        Toko::create([
            'name'          => 'Toko B1',
            'description'   => 'Deskripsi Toko',
            'wa_number'     => '6282298098',
            'address'       => 'Jl. Durian N0. 12',
            'lat'           => 0.5270575138427904,
            'long'          => 101.4200681601453,
            'cover_img'     => 'cover_default.jpg',
            'profile_img'   => 'profile_default.png',
            'cabang_id'     => 2
        ]);
    }
}
