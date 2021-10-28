<?php

namespace App\Providers;

use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\Product;
use App\Models\Section;
use App\Services\Logging\DebugRequestLogger;
use App\Services\Logging\DummyRequestLogger;
use App\Services\Logging\ProductionRequestLogger;
use App\Services\Logging\RequestLoggerInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use  App\Models\Blog\Article;
use  App\Models\Blog\BlogCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->singleton(RequestLoggerInterface::class, function (){
           if(config('app.env')==='production'){
               return $this->app->make(ProductionRequestLogger::class);
           }
           return $this->app->make(DebugRequestLogger::class);
       });



    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        view()->composer(['layouts.front_blog_sidebar','layouts.front_header','layouts.front_sidebar', 'layouts.front_another_sidebar'], function($view){
        $view->with('popular_articles', Article::orderBy('views','desc')->limit(4)->get());
        $view->with('blog_cats', BlogCategory::withCount('articles')->orderBy('articles_count', 'desc')->get());
        $view->with('sections', Section::orderBy('name', 'desc')->get());
        $view->with('cats', Category::with('section')->orderBy('name', 'desc')->limit(6)->get());
        $view->with('new_products', Product::orderBy('id','desc')->limit(3)->get());
        });

    }
}
