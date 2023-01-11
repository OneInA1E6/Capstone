<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'contact_firstname'     => fake()->firstName(),
            'contact_lastname'      => fake()->lastName(),
            'contact_phone_number'  => fake()->phoneNumber(),
            'group_size'            => 1,
            'isBooked'              => 0,
        ];
    }
}
