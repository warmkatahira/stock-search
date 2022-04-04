<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'item_code' => '1dr-bluvm-050',
            'individual_jan_code' => '4582575390398',
            'brand_name' => 'リフレア(Refrear)',
            'item_name_01' => '1DAY Refrear BL UVモイスチャー(30枚入)',
            'item_name_02' => '-0.5',
            'jan_start_position' => 1,
            'lot_start_position' => 20,
            'lot_length' => 10,
            's_power_code' => 202,
            's_power_code_start_position' => 34,
            'location' => '31-3',
        ]);
        Item::create([
            'item_code' => 'acam1d-pur-650',
            'individual_jan_code' => '4562323416709',
            'brand_name' => 'エンジェルカラー(ANGELCOLOR)',
            'item_name_01' => 'アンドミ―ワンデー ピュア',
            'item_name_02' => '-6.5',
            'jan_start_position' => 1,
            'lot_start_position' => 20,
            'lot_length' => 10,
            's_power_code' => 226,
            's_power_code_start_position' => 34,
            'location' => '72-2',
        ]);
        Item::create([
            'item_code' => 'lrm-clm-325',
            'individual_jan_code' => '4589848146850',
            'brand_name' => 'ラルム(LARME)',
            'item_name_01' => 'LARME MELTY SERIES　クリアマカロン',
            'item_name_02' => '-3.25',
            'jan_start_position' => 1,
            'lot_start_position' => 20,
            'lot_length' => 10,
            's_power_code' => 213,
            's_power_code_start_position' => 34,
            'location' => '49-1',
        ]);
    }
}
