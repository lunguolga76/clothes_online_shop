<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected  $fillable= ['title', 'body','description','published_at','image','author_id','blog_category_id'];

    public function blog_category(){

        return $this->belongsTo(BlogCategory::class);
    }
    public function author(){

        return $this->belongsTo(Author::class);
    }
    public function comments(){

        return $this->hasMany(Comment::class);
    }
    public function blog_tag(){
        
        return $this->belongsToMany(BlogTag::class);
    }
}
