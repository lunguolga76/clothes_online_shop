<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Filters\ArticleFilter;
use  App\Models\Blog\Article;
use  App\Models\Blog\Comment;
use  App\Models\Blog\Author;
class BlogController extends Controller
{
    
    public function index (Request $request, ArticleFilter $filters)
    {

        $articles=Article::filter($filters)->orderBy('published_at','desc')->paginate(10);
     
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
