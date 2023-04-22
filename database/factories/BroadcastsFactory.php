<?php

namespace Database\Factories;

use App\Models\BroadcastFormat;
use App\Models\Broadcasts;
use App\Models\FreqPeriods;
use App\Models\FreqStartFrom;
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
            'title' => fake()->catchPhrase(),
            'description' => fake()->text(50),
            'message' => fake()->text(200),
            'freq_auto' => fake()->randomElement([TRUE, FALSE]),
            'freq_count' => fake()->randomDigit(),
            'freq_period_id' => FreqPeriods::pluck('id')->random(),
            'freq_start_id' => FreqStartFrom::pluck('id')->random(),
            'format_id' => BroadcastFormat::pluck('id')->random(),
            // 'attachments' => fake()->randomElement(['Male', 'Female'])
        ];
    }
}
