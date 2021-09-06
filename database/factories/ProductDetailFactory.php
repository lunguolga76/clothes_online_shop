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
            'product_id'=>Product::factory(),
            'image_path'=>$this->faker->imageUrl($width = 640, $height = 480),
            'status'=>$this->faker->boolean(true),
            'color'=>$this->faker->colorName,
            'weight'=>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 2),
            'fabric'=>$this->faker->word
        ];
    }
}
