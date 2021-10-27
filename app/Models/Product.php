<?php

namespace App\Models;

use App\Http\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoggableInterface;

class Product extends Model implements LoggableInterface
{
    use HasFactory;

    protected $fillable = ['category_id', 'name','code','description','quantity','unit_price'];

    public function scopeLike($query,$s){

        return $query->where('name','LIKE',"%{$s}%");

    }
    public function scopeFilter(Builder $builder, Filter $filter): Builder
    {
        return $filter->apply($builder);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function productDetail(){
        return $this->hasOne(ProductDetail::class);
    }

    public function productReviews(){
        return $this->hasMany(ProductReviews::class);
    }
    public function orderDetails(){
    return $this->hasMany(OrderDetails::class);
}
    public function tags(){
    return $this->belongsToMany(Tag::class);
}
    public function toArray():array
    {
        return parent::toArray();
    }

    public function toString():string
    {
        return 'Product with '. $this->id;
    }
}
