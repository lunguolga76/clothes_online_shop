<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['section_id', 'name','description'];

    public function section(){
        return $this->belongTo(Section::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
