<?php

namespace Database\Factories;

use App\Models\CustomerAddress;
use App\Models\Customer;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_id'=>Customer::factory(),
            'country'=>$this->faker->country,
            'city'=>$this->faker->city,
            'street'=>$this->faker->streetAddress,
            'phone'=>$this->faker->phoneNumber
        ];
    }
}
