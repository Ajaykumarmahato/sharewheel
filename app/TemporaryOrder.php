<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemporaryOrder extends Model
{
    protected $fillable = [
        'user_id',
        'vehicle_id',
        'title',
        'name',
        'driver',
        'duration',
        'upto_date',
        'upto_time',
        'email',
        'phone',
        'address',
        'order_id',
        'brand',
        'quantity',
        'price_per_hour',
        'total_price',
    ];

    public $timestamps = false;
}
