<?php

namespace Database\Factories;

use App\Models\Doctors;
use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Facades\Hash; // Import Hash facade

class DoctorsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Doctors::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctorName' => $this->faker->name,
            'doctorEmail' => $this->faker->unique()->safeEmail,
            'doctorPassword' => bcrypt('password'), // Hashing the password 'password'
            'license_no' => $this->faker->randomNumber(6)
        ];
    }
}
