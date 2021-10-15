<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    public function index(){


       $sections=Section::offset(0)->limit(3)->get();
       //dd(Section::all()->toArray());
        //$posts=$category->posts()->orderBy('id','desc')->paginate(2);

        return view('front.homepage', compact('sections'));
}
public function show(int $sectionId){
    // dd(Article::all());
     $section=Section::findOrFail($sectionId);

     return view ('front.category', compact('section'));

     }
}
