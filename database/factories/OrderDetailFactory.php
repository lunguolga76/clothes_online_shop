<?php

namespace Database\Factories;

use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id'=>Order::factory(),
             'product_id'=>Product::factory(),
             'unit_price'=>$this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 200),
             'quantity'=>$this->faker->numberBetween(1,4)
        ];
    }
}
