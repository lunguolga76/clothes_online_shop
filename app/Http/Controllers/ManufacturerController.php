<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacturer;
use  App\Services\Logging\ViewLogger;

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
       return redirect('manufacturer/' .$manufacturer->id . '/view');

    }

    public function view (int $id, ViewLogger $viewLogger)
    {
        $manufacturer= Manufacturer::findOrFail($id);
        $viewLogger->logView($manufacturer);

       // dd($manufacturer->toArray());

    }
}
