<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_details')->insert([
            [
                'order_code' => 'ORD-' . Str::upper(Str::random(6)),
                'note'       => 'Ghi chú đơn hàng 1',
                'quantity'   => 2,
                'price'      => 150000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_code' => 'ORD-' . Str::upper(Str::random(6)),
                'note'       => 'Ghi chú đơn hàng 2',
                'quantity'   => 5,
                'price'      => 75000.50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_code' => 'ORD-' . Str::upper(Str::random(6)),
                'note'       => 'Ghi chú đơn hàng 3',
                'quantity'   => 1,
                'price'      => 250000.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
