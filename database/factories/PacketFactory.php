<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Packet>
 */
class PacketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'packetName' => $this->faker->regexify('[A-Z]{3}'),
            'packetPrice' => $this->faker->randomNumber(3, false),
            'packetDes' => $this->faker->sentence()
        ];
    }
}
