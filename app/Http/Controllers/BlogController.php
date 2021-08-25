<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $articles;
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
    }
    public function index(){
      
        return view ('front.blog-list',['articles'=>$this->articles]);  
    }

    public function show(int $articleId){
        
        $article=null;

        foreach($this->articles as $articleItem){
            if($articleItem['id']===$articleId){
                $article=$articleItem;
                
            }
        }
        if(!$article){
            abort(404);
        }

        return view ('front.blog-article',['article'=>$article]);

        }
   
}
