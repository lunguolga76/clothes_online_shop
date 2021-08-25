<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;
    public function customer(){
        return $thsi->belongsTo(Customer::class);
    }
    public function shippings(){
        return $this->hasMany(Shipping::class);
    }
}
