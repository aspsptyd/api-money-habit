<?php

namespace App\Http\Controllers;

use App\Models\Income;

class IncomeController extends Controller
{
    public function index()
    {
        $posts = Income::all();

        $response = [
            'code' => 200,
            'msg' => 'List data income',
            'data_income' => $posts
        ];

        return response()->json($response); 
    }
}
