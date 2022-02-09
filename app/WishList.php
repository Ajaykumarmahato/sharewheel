<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{   
    public $fillable = [
        'user_id',
        'vehicle_id'
    ];

    public $timestamps=false;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function vehicle(){
        return $this->belongsTo(vehicles::class);
    }
}
