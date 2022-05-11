<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function main_category(){
        return $this->belongsTo(Min_Category::class,'min__category_id','id');
    }

    public function products() {
        return $this->hasMany(VendorProducts::class);
    }
}
