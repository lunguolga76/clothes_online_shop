<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id'=>Category::factory(),
            'name'=>$this->faker->word(),
            'code'=>$this->faker->randomNumber($nbDigits = NULL, $strict = false), 
            'description'=>$this->faker->paragraph(3),
            'quantity'=>$this->faker->numberBetween(100,1000),
            'unit_price'=>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 90)
        ];
    }
}
