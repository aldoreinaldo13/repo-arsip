<?php

namespace App\Exports;

use App\Models\Data_arsip;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Data_ArsipExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Data_arsip::all();
    }
    
    public function headings(): array

    {

        return [

            'id',

            'nama',

            'nip',

            'nik',

            'tempat_lahir',

            'alamat',

            'jenis_kelamin',

            'tanggal_lahir',

            'jabatan',

            'ibu_kandung',

            'unit_penempatan',

        ];

    }
}
