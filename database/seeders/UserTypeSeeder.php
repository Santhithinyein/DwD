<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(range(1, 10))->map(function () {
            UserType::create([
                'admin' => fake()->name(),
                'user' => fake()->name(),
            ]);
        });
    }
}
