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
        ['name' => 'မြို့နယ်စည်ပင်', 'amount' => 2737000,'fmonastery'=>'ရတနာသိဒ္ဓိ'],
        ['name' => 'မြို့နယ်ထွေအုပ်', 'amount' => 1313450,'fmonastery'=>'ပတ္တမြားဇောတိက'],
        ['name' => 'ဆံတော်ရပ်ကွက်', 'amount' => 801700,'fmonastery'=>'ဓမ္မရောင်ခြည်'],
        ['name' => 'အကျဉ်းဦးစီးဌာန', 'amount' => 670000,'fmonastery'=>'ဗောဓိသုခခေတ္တရာ'],
        ['name' => 'ရွှေတံခါးရပ်ကွက်', 'amount' => 500000,'fmonastery'=>'အောင်ဇေယျန၀ဒေး'],
        ['name' => 'ဆက်သွယ်ရေး', 'amount' => 478000,'fmonastery'=>'အောင်ဇေယျရွှေတံခါး'],
        ['name' => 'ပြည်တွင်းအခွန်', 'amount' => 436450,'fmonastery'=>'ဓမ္မအလင်းရောင်'],
        ['name' => 'ရွာဘဲရပ်ကွက်', 'amount' => 435000,'fmonastery'=>'ရွှေတောင်တောရ'],
        ['name' => 'ခေတ္တရာရပ်ကွက်', 'amount' => 430000,'fmonastery'=>'ဗောဓိရိပ်သာရွာဘဲ'],
        ['name' => 'ပြည်(၁)ရဲစခန်း', 'amount' => 413900,'fmonastery'=>'သိမ်တော်မင်္ဂလာ'],
        ['name' => 'ကျောင်းကြီးအိုးတန်းရပ်ကွက်', 'amount' => 400000,'fmonastery'=>'ဂန္ဓမာ(၂)တောရ'],
        ['name' => 'ပြည်သာယာရပ်ကွက်', 'amount' => 400000,'fmonastery'=>'ကြက်ဖြူတောင်'],
        ['name' => 'ခရိုင်သစ်တော', 'amount' => 400000,'fmonastery'=>'ရွှေရတနာဂုဏ်ရည်'],
        ['name' => 'ခရိုင်ထွေအုပ်', 'amount' => 398500,'fmonastery'=>'ကံသာအေး'],
        ['name' => 'မြို့နယ်ရဲတပ်ဖွဲ့မှုးရုံး', 'amount' => 388600,'fmonastery'=>'ရွှေသီလဂုဏ်ရည်'],
        ['name' => 'ဆင်စုရပ်ကွက်', 'amount' => 386000,'fmonastery'=>'အောင်စကြာ'],

    ];

    foreach ($finances as $finance) {
        Finance::create($finance);
    }
}


}
