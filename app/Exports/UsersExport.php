<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
   
   	 public function headings(): array
    {
        return [
        	'#',
            'Name',
            'Correo',
            'Perfil',
            'Estado'   
        ];
    }
    public function collection()
    {
         return DB::table('users')->select('id','name','email','profile_id','status_id')->get();
    }

}