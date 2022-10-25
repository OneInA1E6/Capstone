<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Playing>
 */
class PlayingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return  [
            'name'                  => fake()->name(),
            'email'                 => fake()->unique()->safeEmail(),
            'email_verified_at'     => now(),
            'password'              => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'        => Str::random(10),
            'votes'                 => fake()->numberBetween(4, 24),
            'confirmed'             => false,
            'want_to_be_created_at'     => fake()->date(),
            'wasnt_actually_created_at' => now(),
            'amount'                    => fake()->randomFloat(3, 0, 1000),
            'column'                    => random_int(0,55),
            'choices'                   => 'foo',
            'another_amount'            => fake()->randomFloat(3,50,60),
            'votes_but_worse'           => random_int(2,6),
            'description'               => fake()->name(),
            'numbers'                   => random_int(5, 50),
            'description_but_medium'    => fake()->address(),
            'votes_but_never'           => random_int(32,64),
            'numb'                      => random_int(0,4),
            'name_of_my_first_child'    => fake()->creditCardType(),
            'description_but_in_text'   => fake()->text(),
            'sunrise'                   => fake()->time(),
            'email_verified_at'         => now(),
        ];
    }
}
