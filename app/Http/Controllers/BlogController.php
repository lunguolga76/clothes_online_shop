<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Blog\Article;
use  App\Models\Blog\Comment;
use  App\Models\Blog\Author;


class BlogController extends Controller
{

    public function index (Request $request)
    {
        $articles=Article::with(['author','blog_category']);

        if($request->has('title')){

            $articles->where('title','like', "%$request->title%" );
        }
        if($request->has('name')){

            $articles->whereHas('blog_category',function ($query) use ($request){
                $query->where('name','like', "%$request->name%" );
            } );
        }
        if($request->has('first_name')){

            $articles->whereHas('author',function ($query) use ($request){
                $query->where('first_name','like', "%$request->first_name%" );
            } );
        }

        if($request->has('created_at') && in_array($request->created_at, ['created_at_desc', 'created_at_asc'])){

            if ($request->created_at == 'created_at_desc') {
                $articles->orderBy('created_at','desc');

            } else {
               $articles->orderBy('created_at','asc');
            }

        }


        $articles=$articles->paginate(10);


       // $articles=Article::filter($filters)->orderBy('published_at','desc')->paginate(10);

        return view ('front.blog-list',compact('articles'));
      
    }


    public function show(int $articleId, ViewLogger $viewLogger){

        $article=Article::with('comments')->findOrFail($articleId);
        //dd(Article::all());
        $article->views +=1;
        $article->update();
        $viewLogger->logView($article);


        return view ('front.blog-article', compact('article'));

        }

}
