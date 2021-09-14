<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Filters\ArticleFilter;
use  App\Models\Blog\Article;
use  App\Models\Blog\Comment;
use  App\Models\Blog\Author;
class BlogController extends Controller
{
    
    public function index(ArticleFilter $request){

       // dd($request);
        $articles=Article::filter($request)->paginate(9);
       // dd(Article::all()->toArray());
       //dd($request);
      
       
        return view ('front.blog-list',compact('articles')); 
      // return ArticleResource::collection($articles); 
    }
 

        


    public function show(int $articleId){
       // dd(Article::all());
        $article=Article::with('comments')->findOrFail($articleId);
        $article->views +=1;
        $article->update();
      
        return view ('front.blog-article', compact('article'));

        }
   
}
