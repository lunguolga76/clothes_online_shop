<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Blog\Article;
use  App\Models\Blog\Comment;
use  App\Models\Blog\Author;
class BlogController extends Controller
{
    /*private $articles;
    public function __construct(){
        $this->articles=[
        [
            'id'=>1,
            'img_path'=>'../images/champagne-3515140_1920.jpg',
            'title'=>'You can learn how to make money with your blog and videos',
            'short_description'=>'Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.',
            'all_description'=>'Lorem33',
            'created_at'=>'01.07.2023',
            'author'=>'Jack'
        ],
        [
            'id'=>2,
            'img_path'=>'../images/happiness.jpg',
            'title'=>'The way to reach hundreds of thousands of customers is through the SEO',
            'short_description'=>'Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.',
            'all_description'=>'Lorem33',
            'created_at'=>'05.07.2019',
            'author'=>'LOra'
        ],
        [
            'id'=>3,
            'img_path'=>'../images/balance.jpg',
            'title'=>'Thanks to the Internet, there is no limit to what you will just try!',
            'short_description'=>'Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.',
            'all_description'=>'Lorem33',
            'created_at'=>'01.01.2010',
            'author'=>'Jem'
        ],
        [
            'id'=>4,
            'img_path'=>'../images/hot-air-balloon.jpg',
            'title'=>'You can learn how to make money with your blog and videos',
            'short_description'=>'Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.',
            'all_description'=>'Lorem33',
            'created_at'=>'01.07.2023',
            'author'=>'Jack'
        ],
        [
            'id'=>5,
            'img_path'=>'../images/training.jpg',
            'title'=>'Would you like to work as a freelancer for lifetime?',
            'short_description'=>'Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.',
            'all_description'=>'Lorem33',
            'created_at'=>'22.02.2014',
            'author'=>'Hellen'
        ],
        [
            'id'=>6,
            'img_path'=>'../images/skilanglauf.jpg',
            'title'=>'Ten golden rules to be followed for a real team work',
            'short_description'=>'Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enimcerat elicerat eli nibh, maximus ac felis nec, maximus tempor odio.',
            'all_description'=>'Lorem33',
            'created_at'=>'28.02.2017',
            'author'=>'Lily'
        ],

        ];
    }*/
    public function index(){

        
        $articles=Article::paginate(5);
        
      
       //dd(Article::all()->toArray());
        return view ('front.blog-list',compact('articles'));  
    }

    public function search(Request $request)
{
    
    $search = $request->all();
    dd($request->all());

    if ($request->sort == "published_at_ascending")
    {
       $articles->orderBy('created_at', 'asc');
   } elseif ($request->sort == "published_at_descending") 
   {
       $articles->orderBy('created_at', 'desc');
   }
   $articles = $articles->get();
    return response/view;
}


    public function show(int $articleId){
       // dd(Article::all());
        $article=Article::with('comments')->findOrFail($articleId);
        $article->views +=1;
        $article->update();
      
        return view ('front.blog-article', compact('article'));

        }
   
}
