<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodosTableSeeder extends Seeder
{
    public function run(): void
    {
        Todo::factory()->count(10)->create();
    }
}
