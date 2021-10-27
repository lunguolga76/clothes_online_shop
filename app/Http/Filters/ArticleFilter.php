<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;

class ArticleFilter extends Filter
{

    public function title(string $value = null): Builder
    {
        return $this->builder->where('title', 'like', "%$value%");
    }

    public function name(string $value = null): Builder
    {
        return $this->builder->whereHas('blog_category', function ($query) use ($value) {
            $query->where('name', 'like', "%$value%");
        });
    }

    public function first_name(string $value = null): Builder
    {
        return $this->builder->whereHas('author', function ($query) use ($value) {
            $query->where('first_name', 'like', "%$value%");
        });

    }

    public function created_at(string $value = null): ?Builder
    {
        if (in_array($value, ['created_at_desc', 'created_at_asc'])) {
            if ($value == 'created_at_desc') {
                return $this->builder->orderByDesc('created_at');
            } else {
                return $this->builder->orderBy('created_at');
            }
        }
    }
}
