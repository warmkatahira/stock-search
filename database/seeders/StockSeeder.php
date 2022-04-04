<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            'it_item_code' => '1dr-bluvm-050',
            'stock_quantity' => 10,
        ]);
        Stock::create([
            'it_item_code' => 'acam1d-pur-650',
            'stock_quantity' => 19,
        ]);
        Stock::create([
            'it_item_code' => 'lrm-clm-325',
            'stock_quantity' => 22,
        ]);
    }
}
