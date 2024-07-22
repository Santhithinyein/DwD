<?php

namespace Database\Seeders;

use App\Models\DonationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // collect(range(1, 10))->map(function () {
        //     DonationType::create([
        //         'individual' => fake()->name(),
        //         'group' => fake()->name(),
        //     ]);
        // });

        $types=['individual','group'];
        foreach ($types as $type) {
            DonationType::create([
                'type'=>$type
            ]);
        }
    }
}
