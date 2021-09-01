<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;
    protected  $fillable= ['name', 'description'];

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
