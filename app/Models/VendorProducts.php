<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorProducts extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function vendor(){
       return $this->belongsTo(Vendor::class,'vendor_id');
    }

    public function sub_category(){
        return $this->belongsTo(Sub_Category::class,'sub__category_id');
    }
}
