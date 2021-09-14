<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Section;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'section_id'=>Section::factory(),
             'name'=>$this->faker->word(),
             'image_path'=>$this->faker->image('storage/app/public',$width = 640, $height = 480, null, false),
             'description'=>$this->faker->paragraph(1)
        ];
    }
}
