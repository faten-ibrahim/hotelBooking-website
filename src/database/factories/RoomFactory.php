<?php

namespace Database\Factories;

use App\Enums\RoomStatus;
use App\Enums\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(RoomType::getValues()),
            'status' => fake()->randomElement(RoomStatus::getValues()),
            'description' => fake()->realText(100),
            'price' => fake()->numberBetween(200,1000)
        ];
    }
}
