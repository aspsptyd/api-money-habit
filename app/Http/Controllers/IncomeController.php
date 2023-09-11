<?php

namespace App\Http\Controllers;

use App\Models\Income;

class IncomeController extends Controller
{
    public function index()
    {
        $income = Income::all();

        if ($income != '[]') {
            $code = 200;
            $response = [
                'status' => true,
                'msg' => 'Data invome available',
                'data_income' => $income
            ];
        } else {
            $code = 200;
            $response = [
                'status' => false,
                'msg' => 'Tidak ada data income',
            ];
        }

        return response()->json($response, $code); 
    }
}
