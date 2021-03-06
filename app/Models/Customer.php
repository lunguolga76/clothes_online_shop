<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'surname'];

    public function orders(){
        return $this->hasMany(Order::class);
    }
    public function productReviews(){
        return $this->hasMany(ProductReviews::class);
    }
    public function customerAddresses(){
        return $this->hasMany(CustomerAddress::class);
    }
}
