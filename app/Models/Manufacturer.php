<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LoggableInterface;

class Manufacturer extends Model implements LoggableInterface
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

    public function toArray():array
    {
        return parent::toArray();
    }
    
    public function toString():string
    {
        return 'Manufacturer with '. $this->id;
    }
}
