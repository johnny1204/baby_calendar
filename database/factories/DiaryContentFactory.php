<?php

namespace Database\Factories;

use App\Models\Child;
use App\Models\DiaryContent;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @package Database\Factories
 */
class DiaryContentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DiaryContent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::factory()->create(['email' => $this->faker->unique()->safeEmail]);
        return [
            'user_id'      => $user->id,
            'child_id'     => Child::factory()->create(['user_id' => $user->id])->id,
            'evented_at'   => Carbon::now(),
            'toilet_small' => rand(0, 1) === 1,
            'toilet_big'   => rand(0, 1) === 1,
            'milk'         => rand(0, 200),
            'sleep'        => rand(0, 1) === 1,
            'meal'         => $this->faker->text(),
        ];
    }
}
