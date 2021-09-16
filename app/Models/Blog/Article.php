<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Http\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    use HasFactory;

    protected  $fillable= ['title', 'body','description','published_at','image','views','author_id','blog_category_id'];

    public function getImageUrlAttribute()
    {
        return \Illuminate\Support\Facades\Storage::url($this->image);

    }
    public function getPublishedAtAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s',$this->created_at)->format('d F,Y');
    }
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
    public function scopeFilter(Builder $builder, Filter $filter): Builder
    {
        return $filter->apply($builder);
    }
}
