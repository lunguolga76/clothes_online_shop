<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;

class ManufacturerController extends Controller
{
    public function create(){

        $manufacturer = new Manufacturer();
        $manufacturer->name = 'Test';
        $manufacturer->description = 'Test description';
        $manufacturer->active = true;
        $manufacturer->save();

        $manufacturertwo=Manufacturer::create([
            'name'=>'Dumy Name',
            'description'=>'test description',
            'active'=>true
        ]);
        $manufacturerthree=Manufacturer::create([
            
        ]);
       // dd($manufacturer->toArray());
        //dd($manufacturertwo->toArray());
        dd($manufacturerthree->toArray());
        
    }
}
