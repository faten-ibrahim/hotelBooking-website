<?php

namespace Database\Factories;

use App\Enums\BookingRequestStatus;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookingRequest>
 */
class BookingRequestFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(BookingRequestStatus::getValues()),
            'user_id' => User::factory(),
            'room_id' => Room::factory()
        ];
    }
}
