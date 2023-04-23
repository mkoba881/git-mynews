<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    // 以下を追記
    protected $guarded = array('id');

    // ★テーブル名を指定、ここはなぜ必要なのか後で質問するようにする。★
    protected $table = 'mynews.profile';

    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
}
