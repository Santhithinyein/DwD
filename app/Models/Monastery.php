<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monastery extends Model
{
    use HasFactory;
    protected $table='monasteries';
    protected $fillable=[
        'monasteryName',
        'monkName',
        'address',
        'phNo',
        'building',
        'monkNo',
        'mStatus',
        'photo'
    ];
}
