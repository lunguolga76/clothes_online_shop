<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Comment;
use App\Models\Blog\Article;
use App\Models\Blog\Author;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->text($maxNbChars = 200) ,
            'author_id'=>Author::factory(),
            'article_id'=>Article::factory(),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime(),
        ];
    }
}
