<?php

namespace Database\Seeders;

use App\Models\Ads;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ads::create([
            'name'              => 'Iklan 01',
            'is_active'         => true,
            'banner_img'        => 'ads_default.jpg'
        ]);
        Ads::create([
            'name'              => 'Iklan 02',
            'is_active'         => true,
            'banner_img'        => 'ads_default.jpg'
        ]);
        Ads::create([
            'name'              => 'Iklan 03',
            'is_active'         => true,
            'banner_img'        => 'ads_default.jpg'
        ]);
    }
}
