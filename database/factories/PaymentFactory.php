<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_id' => mt_rand(1, 5),
            'year' => fake()->year(),
            'jan' => fake()->randomNumber(3, false),
            'feb' => fake()->randomNumber(3, false),
            'mart' => fake()->randomNumber(3, false),
            'apr' => fake()->randomNumber(3, false),
            'mey' => fake()->randomNumber(3, false),
            'jun' => fake()->randomNumber(3, false),
            'jul' => fake()->randomNumber(3, false),
            'augs' => fake()->randomNumber(3, false),
            'sept' => fake()->randomNumber(3, false),
            'okt' => fake()->randomNumber(3, false),
            'nov' => fake()->randomNumber(3, false),
            'des' => fake()->randomNumber(3, false),
        ];
    }
}
