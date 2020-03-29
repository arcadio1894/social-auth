<?php

namespace App\Http\Controllers;

use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function excel()
    {
        $categories = Category::all();
        $date = Carbon::now('America/Lima');
        //dd($categories);

        $vista = view('excel.categoriesExcel', compact('categories', 'date'));

        return Excel::download( new CategoryExports , 'categories.xlsx');
    }
}
