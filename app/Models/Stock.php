<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    // 主キーカラムを変更
    protected $primaryKey = 'it_item_code';
    // オートインクリメント無効化
    public $incrementing = false;
    // Laravel 6.0+以降なら指定
    protected $keyType = 'string';

    // 追加等可能カラムを定義
    protected $fillable = [
        'it_item_code',
        'stock_quantity',
    ];

    // 「１対１」→ メソッド名は単数形
    Public function item()
    {
        // Itemモデルのデータを引っ張てくる
        return $this->hasOne('App\Models\Item');
    }
}
