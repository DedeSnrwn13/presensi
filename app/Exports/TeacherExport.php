<?php

namespace App\Exports;

use App\Attendance;
use Maatwebsite\Excel\Concerns\{FromCollection,WithHeadings,ShouldAutoSize,WithStyles,WithMapping};
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TeacherExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Attendance::all();
    }

    public function map($absen): array
    {
        return [
            'NAMA' => $absen->teacher->name,
            'TANGGAL' => $absen->date,
            'ABSEN MASUK' => $absen->time_in,
            'ABSEN PULANG' => $absen->time_out,
            'KETERANGAN' => $absen->note,
        ];
    }

    public function headings(): array
    {
        return [
            'NAMA',
            'TANGGAL',
            'ABSEN MASUK',
            'ABSEN PULANG',
            'KETERANGAN',
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['family' => 'Open Sans','bold' => true, 'size' => 12]],
        ];
    }
}
