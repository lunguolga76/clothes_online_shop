<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//use App\Models\Section;
//use App\Models\Category;
//use App\Models\Product;
use App\Models\Customer;
use App\Models\CustomerAddresse;





class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        // \App\Models\Blog\Comment::factory()->count(50)->create();
     
        // \App\Models\Section::factory()->count(3)->create();
    // \App\Models\Category::factory()->count(5)->create();
   //  \App\Models\Product::factory()->count(100)->create();
  //  \App\Models\Customer::factory()->count(50)->create();
  // \App\Models\Tag::factory()->count(200)->create();
 // \App\Models\ProductDetail::factory()->count(200)->create();
 //\App\Models\ProductReview::factory()->count(200)->create();
 // \App\Models\Order::factory()->count(200)->create();
 //\App\Models\CustomerAddress::factory()->count(200)->create();
 // \App\Models\OrderDetail::factory()->count(200)->create();
  //\App\Models\Shipping::factory()->count(200)->create();
  

  

 \App\Models\Blog\Article::factory()->count(200)->create();
     //$this->call(BlogCategorySeeder::class);
     //  $this->call(AuthorSeeder::class);
     // $this->call(ArticleSeeder::class);
   // $this->call(CommentSeeder::class);
    }
}
