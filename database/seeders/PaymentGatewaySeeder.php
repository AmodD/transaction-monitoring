<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('payment_gateways')->insert([
        ['name' => 'RazaorPay', 'code' => '480001'],
        ['name' => 'Infibeam', 'code' => '480002'],
        ['name' => 'Paypal', 'code' => '480003'],
        ['name' => 'Paytm', 'code' => '480004'],
        ['name' => 'PayU', 'code' => '480005'],
        ['name' => 'BillDesk', 'code' => '480006'],
        ['name' => 'PayKun', 'code' => '480007'],
        ['name' => 'ZaakPay', 'code' => '480008'],
        ['name' => 'JusPay', 'code' => '480009'],
        ['name' => 'Instamojo', 'code' => '480010'],
        ['name' => 'Mobikwik', 'code' => '480011'],
      ]);
    }
}
