<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'packet_id' => mt_rand(1, 3),
            'customerCode' => Str::random(8),
            'customerName' => fake()->name(),
            'customerAddress' => fake()->address(),
            'customerEmail' => fake()->freeEmail(),
            'customerPhone' => fake()->phoneNumber()
        ];
    }
}
