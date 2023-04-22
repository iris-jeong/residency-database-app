<?php

namespace Database\Factories;

use App\Models\BroadcastFormat;
use App\Models\Broadcasts;
use App\Models\FrequencyPeriod;
use App\Models\FrequencyStartFrom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BroadcastsFactory extends Factory
{

    protected $model = Broadcasts::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->words(3, true),
            'description' => fake()->unique()->sentence(10, true),
            'message' => fake()->text(200),
            'freq_auto' => fake()->randomElement([TRUE, FALSE]),
            'freq_count' => fake()->randomDigit(),
            'freq_period_id' => FrequencyPeriod::pluck('id')->random(),
            'freq_start_id' => FrequencyStartFrom::pluck('id')->random(),
            'format_id' => BroadcastFormat::pluck('id')->random(),
            // 'attachments' => fake()->randomElement(['Male', 'Female'])
        ];
    }
}
