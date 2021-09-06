<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Comment;
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
            'author_id'=>$this->faker->numberBetween(1,4),
            'article_id'=>$this->faker->numberBetween(1,6),
            'created_at'=>$this->faker->dateTime(),
            'updated_at'=>$this->faker->dateTime(),
        ];
    }
}
