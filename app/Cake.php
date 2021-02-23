<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
     protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        'cakename' => 'required',
        'price' => 'required',
        'info' => 'required',
        );
}
