<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MerchantCategoryCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      DB::table('merchant_category_codes')->insert([
        ['code' => 4112, 'description' => 'passenger railways'],
        ['code' => 4829, 'description' => 'money orders - wire transfer'],
        ['code' => 4900, 'description' => 'electric, gas, sanitary and water utilities'],
        ['code' => 5013, 'description' => 'motor vehicle supplies and new parts'],
        ['code' => 5045, 'description' => 'computers, computer peripheral equipment, software'],
        ['code' => 5047, 'description' => 'medical, dental ophthalmic, hospital equipment and supplies'],
        ['code' => 5139, 'description' => 'commercial footwear'],
        ['code' => 5411, 'description' => 'grocery stores'],
        ['code' => 5462, 'description' => 'bakeries'],
        ['code' => 5541, 'description' => 'service stations'],
        ['code' => 5571, 'description' => 'motorcycle dealers'],
        ['code' => 5732, 'description' => 'electronic sales'],
        ['code' => 5812, 'description' => 'eating places, restaurants'],
        ['code' => 5814, 'description' => 'fast food restaurants'],
        ['code' => 5816, 'description' => 'digital goods games'],
        ['code' => 5912, 'description' => 'drug stores and pharmacies'],
        ['code' => 5921, 'description' => 'package stores, beer, wine, liquor'],
        ['code' => 5942, 'description' => 'book stores'],
        ['code' => 5977, 'description' => 'cosmetic stores'],
        ['code' => 6540, 'description' => 'poi point of interaction funding transactions'],
        ['code' => 7032, 'description' => 'sporting and recreational camps'],
        ['code' => 7298, 'description' => 'health and beauty shops'],
        ['code' => 7542, 'description' => 'car washes'],
        ['code' => 8062, 'description' => 'hospitals'],
        ['code' => 9399, 'description' => 'government services'],
      ]);
    }
}
