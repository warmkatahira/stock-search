<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // 主キーカラムを変更
    protected $primaryKey = 'item_code';
    // オートインクリメント無効化
    public $incrementing = false;
    // Laravel 6.0+以降なら指定
    protected $keyType = 'string';

    // 追加等可能カラムを定義
    protected $fillable = [
        'item_code',
        'integrate_jan_code',
        'individual_jan_code',
        'brand_name',
        'item_name_01',
        'item_name_02',
        'jan_start_position',
        'lot_start_position',
        'lot_length',
        's_power_code',
        's_power_code_start_position',
        'location',
    ];

    // 「１対１」→ メソッド名は単数形
    Public function stock()
    {
        // Stockモデルのデータを引っ張てくる
        return $this->hasOne('App\Models\Stock');
    }
}
