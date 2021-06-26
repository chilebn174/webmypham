<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use SoftDeletes;

    protected $guarded = [];
    public function numBr(){
        return $this->hasMany(Product::class, 'brand_id');
    }
}
