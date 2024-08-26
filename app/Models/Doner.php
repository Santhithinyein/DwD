<?php

namespace App\Models;

use App\Exports\DonorsExport;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Facades\Excel;

class Doner extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'transaction_type_id',
        'receivePhoto',
        'amount',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function transactionType(){
        return $this->belongsTo(TransactionType::class);
    }

   
}
