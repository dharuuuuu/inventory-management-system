<?php

namespace App\Exports;

use App\Models\BarangMasuk;
use Maatwebsite\Excel\Concerns\FromCollection;

class BarangMasukExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BarangMasuk::select('id', 'name', 'quantity_in', 'created_at')->get();
    }

    public function withFilename()
    {
        return 'BarangMasuk-' . time() . '.xlsx';
    }

    public function withHeadings()
    {
        return [
            'id',
            'Product',
            'Jumlah Masuk',
            'Tanggal Masuk',
        ];
    }
}
