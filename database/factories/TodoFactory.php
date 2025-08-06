<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Todo;

class TodoFactory extends Factory
{
    protected $model = Todo::class;

    public function definition(): array
    {
        return [
            'task' => $this->faker->sentence(6),
            'status' => $this->faker->boolean(),
        ];
    }
}
