<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Min_Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sub_categories(){
       return $this->hasMany(Sub_Category::class);
    }
}
