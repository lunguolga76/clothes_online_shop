<?php

namespace Database\Factories;

use App\Models\Shipping;
use App\Models\Order;
use App\Models\CustomerAddress;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShippingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Shipping::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id'=>Order::factory(),
             'customer_address_id'=>CustomerAddress::factory(),
             'status'=>$this->faker->boolean(true),
             
        ];
    }
}
