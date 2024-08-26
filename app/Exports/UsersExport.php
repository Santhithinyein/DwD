<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('name', 'email', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            
            'Name',
            'Email',
            'created_at',
            
        ];
    }
}
