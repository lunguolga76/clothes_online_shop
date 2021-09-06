<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'body' => $this->faker->paragraph(12),
            'description' => $this->faker->paragraph(2),
            'published_at'=>$this->faker->dateTime(),
            'image' =>$this->faker->imageUrl($width = 640, $height = 480) ,
            'author_id'=>$this->faker->numberBetween(1,4),
            'blog_category_id'=>$this->faker->numberBetween(1,5),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime(),
            

        ];
    }
}
