<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Filesystem\Filesystem;

class DatabaseSeeder extends Seeder
{
    //private $filesystem;

    /*public function __construct(Filesystem $filesystem){
        $this->filesystem=$filesystem;

    }*/
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $fs=New Filesystem();
        $fs->cleanDirectory('storage/app/public');

       // \App\Models\User::factory(10)->create();
      //\App\Models\Section::factory()->count(2)->create();
    $this->call(SectionSeeder::class);
   $this->call(CategorySeeder::class);
   //\App\Models\Category::factory()->count(5)->create();
\App\Models\Product::factory()->count(50)->create();
//  \App\Models\Customer::factory()->count(50)->create();
//  \App\Models\Tag::factory()->count(200)->create();
\App\Models\ProductDetail::factory()->count(50)->create();
//\App\Models\ProductReview::factory()->count(100)->create();
// \App\Models\Order::factory()->count(200)->create();
// \App\Models\CustomerAddress::factory()->count(200)->create();
// \App\Models\OrderDetail::factory()->count(200)->create();
//  \App\Models\Shipping::factory()->count(200)->create();

 $this->call(BlogCategorySeeder::class);
 \App\Models\Blog\Author::factory()->count(10)->create();
  \App\Models\Blog\Article::factory()->count(50)->create();
  \App\Models\Blog\Comment::factory()->count(100)->create();

    }
}
