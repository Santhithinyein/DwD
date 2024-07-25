<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function donationType()
    {
        return $this->belongsTo(DonationType::class);
    }

    public function transactionType(){
        return $this->belongsTo(TransactionType::class);
    }

    public function monastery(){
        return $this->belongsTo(Monastery::class);
    }
}
