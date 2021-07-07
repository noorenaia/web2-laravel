<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class post extends Model
{
    public function category(){
        return $this->belongsTo(category::class);
    }
    public function image(){
        return $this->morphOne(image::class,'imageable');
    }
    public function comments(){
        return $this->hasMany(comment::class);
    }
    use HasFactory;
}
