<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class HomeController extends Controller
{
    public function index(){
        
            $sections=Section::offset(0)->limit(2)->get();

        return  view ('front.homepage', compact('sections'));

    }
}
