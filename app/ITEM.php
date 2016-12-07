<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ITEM extends Model
{
    protected $table = 'ITEM';

    public function Img(){
      return $this->hasMany('App\ITEMIMAGE','itemID');
    }
}
