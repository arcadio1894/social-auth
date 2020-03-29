<?php
/**
 * Created by PhpStorm.
 * User: USUARIO
 * Date: 09/02/2020
 * Time: 05:15 PM
 */

namespace App\Http\Controllers;


use App\Category;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CategoryExports implements FromView
{
    public function view(): View
    {
        return view('excel.categoriesExcel', [
            'categories' => Category::all(), 'date' => Carbon::now('America/Lima')
        ]);
    }
}