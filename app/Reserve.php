<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $guarded = array('id');
    
     public static $rules = array(
       
        'stuffid' => 'required',
        'cakeid'=>'required',
        'date' => 'required',
        'time' => 'required',
        'name' => 'required',
        'tel' => 'required',
        'message'=>'required',
        'candle'=>'required',
        'note'=>'required',
        
        'payment' => 'required',
        
    );
}

          