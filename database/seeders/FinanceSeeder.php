<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Finance;

class FinanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $finances = [
        ['name' => 'မြို့နယ် အထွေထွေ အုပ်ချုပ်ရေးမှုးရုံး', 'amount' => 900000],
        ['name' => 'ခရိုင်စီမံရေးရုံး', 'amount' => 800000],
        ['name' => 'စည်ပင်ရုံး', 'amount' => 700000],
        ['name' => 'ပြန်ဆပ်ရုံး', 'amount' => 600000],
        ['name' => 'သာသနာရေးရုံး', 'amount' => 1000000],
    ];

    foreach ($finances as $finance) {
        Finance::create($finance);
    }
}


}
