<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $attributes=[
        'description'=>'dumy description',
        'active'=>1
    ];
    protected $fillable=[
        'name',
        'description',
        'active'
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
