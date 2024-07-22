<?php

namespace Database\Seeders;

use App\Models\UserType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // collect(range(1, 10))->map(function () {
        //     UserType::create([
        //         'admin' => fake()->name(),
        //         'user' => fake()->name(),
        //     ]);
        // });
        $types=['admin','user'];
        foreach($types as $type){
            UserType::create([
                       'type' =>$type
                    ]);

        }
        
    }
}
