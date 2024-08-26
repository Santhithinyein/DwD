<?php

namespace App\Exports;

use App\Models\Doner;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DonorsExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {   
        $doners=Doner::all();
         // Customize the data
         $customizedData = $doners->map(function ($doner) {
            return [
                
                'Name' => $doner->user->name, 
                'Email' => $doner->user->email, 
                'Amount' => $doner->amount, 
                'Date' => $doner->created_at->format('d-m-Y'),
                // 'Updated_at' => $saleitem->updated_at->format('d-m-Y'),
            ];
        });

        return $customizedData;
    }

      /**
    * @return array
    */

    public function headings():array
    {
        return [
            
            'Name',
            'Email',
            'Amount',
            'Date'
           
            
        ];
    }
}
