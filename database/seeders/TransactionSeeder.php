<?php

namespace Database\Seeders;

use App\Models\Monastery;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        // $types = [ 'KBZPay',  'Wave Money'];
        
        // 'receivePhoto' => fake()->imageUrl(),
        // 'user_id'=>User::factory(),
        // 'monastery_id'=>Monastery::factory(),

        // foreach ($types as $type) {
        //     Transaction::create(['paymentType' => $type]);
        // }
       
        collect(range(1, 10))->map(function () {
            Transaction::create([
                'paymentType' => fake()->text(),
                'receivePhoto' => fake()->imageUrl(),
                'user_id'=>User::inRandomOrder()->first()->id,
                'monastery_id'=>Monastery::inRandomOrder()->first()->id,
               
            ]);
        });
    }
}
