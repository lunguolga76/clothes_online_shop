<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'customer_address_id','city','street','phone'];
    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function customerAddress(){
        return $this->belongsTo(CustomerAddress::class);
    }
}