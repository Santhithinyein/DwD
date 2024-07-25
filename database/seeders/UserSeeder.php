<?php

namespace Database\Seeders;

use App\Models\DonationType;
use App\Models\TransactionType;
use App\Models\User;
use App\Models\UserCList;
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
                'user_type_id'=>2,
                'email_verified_at' => now(),
                'password' => 23456789,
            ]);
        });

        User::create([
            'name' =>'Admin',
            'email' => 'admin@gmail.com',
            'user_type_id'=>1,
            'email_verified_at' => now(),
            'password' => 23456789,
        ]);
    }
}
