<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $with =['images'];

    public function suppliers(){
        return $this->belongsTo(Supplier::class,'supplier_id');
    }
    public function images(){
        return $this->hasMany(Image::class);
    }

    public function manufacturers(){
        return $this->belongsTo(Manufacturer::class,'manufacturer_id');
    }

    public function devices(){
        return $this->belongsTo(Device::class,'device_id');
    }

    public function promotions()
    {
        return $this->belongsTo(Promotion::class,'promotion_id');
    }
    public function types()
    {
        return $this->belongsTo(Type::class,'type_id');
    }

}
