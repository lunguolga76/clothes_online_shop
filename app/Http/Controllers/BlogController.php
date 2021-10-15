<?php

namespace App\Http\Controllers;

use App\Http\Filters\ArticleFilter;
use App\Listeners\LogViewListener;
use Illuminate\Http\Request;
use  App\Models\Blog\Article;
use  App\Models\Blog\Comment;
use  App\Models\Blog\Author;
use  App\Services\Logging\ViewLogger;


class BlogController extends Controller
{
    public function read()
    {
        return 'some string';
    }

    public function index (Request $request, ArticleFilter $filters)
    {
       /* $articles=Article::with(['author','blog_category']);

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
                $articles->orderByDesc('created_at');

            } else {
               $articles->orderBy('created_at');
            }

        }

        $articles=$articles->paginate(10);   */


        $articles=Article::with(['author','blog_category'])->filter($filters)->paginate(10);

        return view ('front.blog-list',compact('articles'));

    }


    public function show($article){

        $article=Article::with('comments')->findOrFail($article);
        //dd(Article::all());
        $article->views +=1;
        $article->update();
        event(new LogViewListener($article));
        //dd($article);



        return view ('front.blog-article', compact('article'));

        }

}
