<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['section_id', 'name','image_path','discount','description'];

    public function getImageUrlAttribute()
    {
        return \Illuminate\Support\Facades\Storage::url($this->image);
    }
    
    public function section(){
        return $this->belongTo(Section::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
