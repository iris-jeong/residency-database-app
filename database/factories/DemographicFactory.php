<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Demographic;
use App\Models\PgyLevel;
use App\Models\Specialty;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Demographic>
 */
class DemographicFactory extends Factory
{
    //The name of the factory's corresponding model.
    protected $model = Demographic::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'birth_date' => fake()->date(),
            'sex' => fake()->randomElement(['Male', 'Female']),
            'address' => fake()->streetAddress(),
            'city' => fake()->city(),
            'state' => fake()->stateAbbr(),
            'zip' => fake()->postcode(),
            'phone_number' => fake()->phoneNumber(),
            'npi_number' => fake()->numerify(str_repeat('#', 10)),
            'pager_number' => fake()->numerify(str_repeat('#', 10)),
            'pgy_level_id' => PgyLevel::pluck('id')->random(),
            'specialty_id' => Specialty::pluck('id')->random(),
            'user_id' => User::factory() //This creates a new user and sets that user's ID here.
        ];
    }
}
