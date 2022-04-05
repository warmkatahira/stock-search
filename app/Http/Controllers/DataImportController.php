<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rap2hpoutre\FastExcel\FastExcel;
use App\Models\Item;
use App\Models\Stock;

class DataImportController extends Controller
{
    public function index()
    {
        return view('data_import.index');
    }

    public function item_info_data_import(Request $request)
    {
        // テーブルをクリア
        Item::query()->delete();
        Stock::query()->delete();
        // ファイルの情報を取得
        $all_line = (new FastExcel)->import($request->file('file_select'));
        // テーブルに追加
        foreach ($all_line as $line) {
            // UTF-8形式に変換
            $line = mb_convert_encoding($line, 'UTF-8', 'ASCII, JIS, UTF-8, SJIS-win');
            // itemsテーブルに追加
            $param = [
                'item_code' => $line['商品コード'],
                'integrate_jan_code' => $line['代表JAN'],
                'individual_jan_code' => $line['個別JAN'],
                'brand_name' => $line['ブランド'],
                'item_name_01' => $line['商品名01'],
                'item_name_02' => $line['商品名02'],
                'jan_start_position' => $line['JAN_Start_Position'],
                'lot_start_position' => $line['Lot_Start_Position'],
                'lot_length' => $line['Lot_Length'],
                's_power_code' => $line['S-POWERコード'],
                's_power_code_start_position' => $line['S-POWER_Start_Position'],
                'location' => $line['ロケーション'],
            ];
            Item::insert($param);
            // stocksテーブルに追加
            $param = [
                'it_item_code' => $line['商品コード'],
                'stock_quantity' => 100,
            ];
            // 追加
            Stock::insert($param);
        }
        return redirect()->route('index.data_import');
    }
}
