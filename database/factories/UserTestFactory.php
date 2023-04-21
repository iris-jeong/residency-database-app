<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Test;
use App\Models\File;
use App\Models\UserTest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserTestFactory extends Factory
{
    //The name of the factory's corresponding model.
    protected $model = UserTest::class;
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::pluck('id')->random(),
            'test_id' => Test::pluck('id')->random(),
            'file_id' => File::pluck('id')->unique()->random(),
            'score' => fake()->numberBetween(100, 900)
        ];
    }
}