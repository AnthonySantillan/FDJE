<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< HEAD
use App\Models\User;
=======
use Illuminate\Support\Str;
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e

class UserFactory extends Factory
{
    /**
<<<<<<< HEAD
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
=======
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'dni' => $this->faker->name(),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => $this->faker->word(),
=======
            'name' => $this->faker->name(),
            'ci' => $this->faker->unique()->word(),
            'ci_verified_at' => now(),
            'phone' => $this->faker->word(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
<<<<<<< HEAD
                'email_verified_at' => null,
=======
                'ci_verified_at' => null,
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
            ];
        });
    }
}
