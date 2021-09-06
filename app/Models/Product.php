<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['category_id', 'name','code','description','quantity','unit_price'];

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



}
