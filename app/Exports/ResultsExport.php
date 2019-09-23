<?php

namespace App\Exports;

use App\Result;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;

class ResultsExport implements FromCollection, WithHeadings,ShouldAutoSize
//   WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Result::select('userName','age','examDate','Arate','Brate','Crate','Drate','AB','CD','AD','CB','Atotal','Btotal','Ctotal','Dtotal')->get();

    }

    public function headings(): array
    {
        return [

            'إسم المتدرب',
            'العمر',
            'تاريخ الإختبار',
            'رمز A',
            'رمز B',
            'رمز C',
            'رمز D',
            'A + B',
            'C + D',
            'A + D',
            'C + B',
            'مجموع A',
            'مجموع B',
            'مجموع C',
            'مجموعD '

        ];
    }

//    public function registerEvents(): array
//    {
//        return [
//            AfterSheet::class    => function(AfterSheet $event) {
//                $cellRange = 'A1:W1'; // All headers
//                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
//            },
//        ];
//    }
}
