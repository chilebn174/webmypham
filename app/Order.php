<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_details', 'order_id', 'product_id');
    }

    public function customer()
    {
        return $this->hasMany(Customer::class, 'customer_id');
    }

    protected $guarded = [];
}
