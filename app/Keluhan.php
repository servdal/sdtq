<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    protected $table    =   "tbl_komplain";
    protected $guarded  = [];

    public function getTandatangan()
    {
        return $this->hasOne('App\XFiles','xmarking','marking');
    }
}
