<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = ['product_id' , 'location_id' , 'status'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

}
