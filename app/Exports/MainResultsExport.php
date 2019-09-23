<?php

namespace App\Exports;

use App\MainResult;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;


class MainResultsExport implements FromCollection, WithHeadings,ShouldAutoSize
//   WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MainResult::select('userName','age','examDate','Arate','Brate','Crate','Drate','Atotal','Btotal','Ctotal','Dtotal')->get();

    }

    public function headings(): array
    {
        return [

            'إسم المتدرب',
            'العمر',
            'تاريخ الإختبار',
            'مجموع A',
            'مجموع B',
            'مجموع C',
            'مجموع D',
            'رمز A',
            'رمز B',
            'رمز C',
            'رمز D'

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
