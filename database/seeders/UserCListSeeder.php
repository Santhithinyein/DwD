<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserCList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserCListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        collect(range(1, 10))->map(function () {
            UserCList::create([
                'cNo' => 'p0001',
                'user_id'=>User::inRandomOrder()->first()->id,
            ]);
        });
    }
}
