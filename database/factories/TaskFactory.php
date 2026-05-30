<?php

namespace Database\Factories;

use App\Models\Priority;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(20),
            'description' => fake()->realTextBetween(10, 100),
            'due date' => fake()->dateTimeBetween('now', '+6 months'),
            
            // Eloquent relationships
            'user_id' => User::inRandomOrder()->first()->id,

            // for the priority_id value, query the priority table in random order and get the first from that query list and get its id
            'priority_id' => Priority::inRandomOrder()->first()->id,
        ];
    }
}
