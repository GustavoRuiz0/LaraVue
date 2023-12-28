<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->name,
            'lastname'  => $this->faker->name,
            'email'     => $this->faker->email,
            'address'    => $this->faker->address,
        ];
    }
}
