<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    // 以下を追記
    protected $guarded = array('id');

    // テーブル名を指定
    protected $table = 'your_table';

    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
}