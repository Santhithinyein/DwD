<?php

namespace Database\Seeders;

use App\Models\DonationType;
use App\Models\Monastery;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserCList;
use App\Models\UserType;
use Database\Factories\UserTypeFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->count(10)->create();
        // Monastery::factory()->count(10)->create();
        // UserType::factory()->count(10)->create();
        // UserCList::factory()->count(10)->create();
        // Transaction::factory()->count(10)->create();
        // DonationType::factory()->count(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'uAddress' => 'Pyay',
        //     'uPhoNo' => '09442111788',
        //     'status'=>true,
        //     'user_types_id'=>UserType::factory(),
        // ]);

        $this->call(UserTypeSeeder::class);
        $this->call(DonationTypeSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(UserCListSeeder::class);
        $this->call(MonasterySeeder::class);
        $this->call(TransactionSeeder::class);



        
    }
}
