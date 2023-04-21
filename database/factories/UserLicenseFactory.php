<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserLicense;
use App\Models\User;
use App\Models\License;
use App\Models\File;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserLicense>
 */
class UserLicenseFactory extends Factory
{
    //The name of the factory's corresponding model.
    protected $model = UserLicense::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::pluck('id')->unique()->random(),
            'license_id' => License::pluck('id')->unique()->random(),
            'file_id' => File::pluck('id')->unique()->random(),
            'expiration_date' => fake()->date(), //'YYYY-mm-dd' e.g. 2024-04-21 => matches Laravel's date() column datatype.
        ];
    }
}
