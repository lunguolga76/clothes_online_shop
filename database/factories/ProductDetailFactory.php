<?php

namespace Database\Factories;

use App\Models\ProductDetail;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=>$this->faker->unique()->numberBetween($min = 1, $max = 50),
            'image_path'=>$this->faker->image('storage/app/public',$width = 640, $height = 480, null, false),
            'status'=>$this->faker->boolean(true),
            'color'=>$this->faker->colorName,
            'weight'=>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 2),
            'fabric'=>$this->faker->word
        ];
    }
}
