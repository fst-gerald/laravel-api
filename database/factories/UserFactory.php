<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'fname' => $this->faker->firstName,
            'lname' => $this->faker->lastName,
            'continent' => $this->faker->randomElement(User::CONTINENTS),
            'age'  => $this->faker->numberBetween($min = 10, $max = 90),
            'sex' => $this->faker->randomElement([User::MALE, User::FEMALE, USER::NON_BINARY])
        ];
    }
}
