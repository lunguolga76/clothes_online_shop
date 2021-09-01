<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagnew extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function articles(){
        return $this->belonsToMany(Article::class);
    }
}
