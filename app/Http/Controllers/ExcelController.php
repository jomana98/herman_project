<?php

namespace App\Http\Controllers;
use App\Exports\ResultsExport;
use App\Exports\MainResultsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    public function export()
    {
        return Excel::download(new ResultsExport, 'جدول نتائج المقياس المختصر .xlsx');
    }
    public function exportMain(){
        return Excel::download(new MainResultsExport, 'جدول نتائج المقياس الشامل .xlsx');
    }
}
