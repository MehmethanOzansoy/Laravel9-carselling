<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function car()
    {
        return $this->hasMany(Car::class);
    }

    
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }

    
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
