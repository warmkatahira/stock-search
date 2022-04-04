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

    // 「１対１」→ メソッド名は単数形
    Public function stock()
    {
        // Stockモデルのデータを引っ張てくる
        return $this->hasOne('App\Models\Stock');
    }
}
