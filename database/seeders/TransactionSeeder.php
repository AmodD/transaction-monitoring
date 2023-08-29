<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $secs = [3,0.100,2,0.250,0.5,1.0,1.5,2.0,2.5];
          $not = [3,10,12,6,5,1,8,20,2];

          for ($x = 0; $x <= 1000; $x++) {
            sleep(Arr::random($secs));
            \App\Models\Transaction::factory(Arr::random($not))->create();
          }
    }
}
