<?php

namespace Database\Seeders;

use App\Models\Monastery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MonasterySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(range(1, 10))->map(function () {
            Monastery::create([
                'monasteryName'=>fake()->name(),
                'monkName'=>fake()->name(),
                'address'=>fake()->sentence(),
                'phNo'=>'09442111788',
                'building'=>20,
                'monkNo'=>30,
                'photo' => fake()->imageUrl(),
                'mStatus'=>fake()->boolean()
            ]);
        });
       
    }
}
