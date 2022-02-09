<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'vehicle_id',
        'price_per_hour',
        'quantity',
        'total_price',
        'order_address',
        'order_contact',
        'driver',
        'duration',
        'upto_date',
        'upto_time',
        'payment_mode',
        'is_paid',
        'order_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(vehicles::class);
    }
}
