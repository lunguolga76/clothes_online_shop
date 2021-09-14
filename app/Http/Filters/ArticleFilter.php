<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class ArticleFilter extends QueryFilter
{
    /*
     * @param string $status
     */
    public function published_at($published_at)
    {
        $this->builder->where('published_at', 'desc');
    }

    /*
     * @param string $title
     */
    public function title($title)
    {
        $this->builder->where('title', 'desc');

        
            }
    

}