<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(range(1, 10))->map(function () {
            User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'uAddress'=>fake()->address(),
                'uPhNo'=>'09442111788',
                'status'=>fake()->boolean(),
                'user_type_id'=>UserType::inRandomOrder()->first()->id,
                'email_verified_at' => now(),
                // 'password' => static::$password ??= Hash::make('password'),
            ]);
        });
    }
}
