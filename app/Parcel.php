<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    protected $guarded=[];

    function logs(){
        return $this->hasMany(ParcelLog::class);  //select * from parcellog where id = this parecel id
    }
}
