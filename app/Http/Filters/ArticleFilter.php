<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;

class ArticleFilter extends Filter
{
    
    public function title(string $value = null): Builder
    {
        return $this->builder->where('title', 'like', "%$value%" );
    }

    public function blog_category_id(string $id = null): Builder
    {
        
        return $this->builder->when($id, function($query) use($id){
            $query->where('blog_category_id', $id);
        });
       
    }

    public function sort(array $value = []): Builder
    {
        if (isset($value['by']) && ! Schema::hasColumn('published_at', $value['by'])) {
            return $this->builder;
        }

        return $this->builder->orderBy(
            $value['by'] ?? 'published_at', $value['order'] ?? 'desc'
        );
    }
    

}