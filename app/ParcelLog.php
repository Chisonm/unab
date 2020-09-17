<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParcelLog extends Model
{
    protected $guarded=[];

    public function parcel(){
        return $this->belongsTo(Parcel::class);
    }

    public function admin(){
        return $this->belongsTo(User::class,'admin_id');
    }
}
