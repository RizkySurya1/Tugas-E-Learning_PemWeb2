<?php

namespace App\Exports;

use App\Models\ServicePackage;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ServicePackagesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return ServicePackage::all()->map(function ($package) {
            return [
                'ID' => $package->id,
                'Nama Paket' => $package->name,
                'Deskripsi' => $package->description,
                'Harga' => number_format($package->price, 0, ',', '.'),
                'Durasi (jam)' => $package->duration_hours,
                'Termasuk' => $package->includes,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Paket',
            'Deskripsi',
            'Harga',
            'Durasi (jam)',
            'Termasuk',
        ];
    }
}
