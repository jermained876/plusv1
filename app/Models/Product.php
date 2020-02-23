<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    public function suppliers(){
        return $this->belongsTo(Supplier::class);
    }
    public function images(){
        return $this->hasMany(Image::class);
    }

    public function manufacturers(){
        return $this->belongsTo(Manufacturer::class);
    }

    public function devices(){
        return $this->belongsTo(Device::class);
    }

    public function promotions()
    {
        return $this->belongsTo(Promotion::class);
    }
    public function types()
    {
        return $this->belongsTo(Type::class);
    }

}
