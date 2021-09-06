<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function show($id){


        $sections=Section::where('id',$id)->limit(2);
        dd(Section::all()->toArray());
        //$posts=$category->posts()->orderBy('id','desc')->paginate(2);

        return view('section.show', compact('section'));
}
}
