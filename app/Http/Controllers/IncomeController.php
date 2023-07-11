<?php

namespace App\Http\Controllers;

use App\Models\Income;

class IncomeController extends Controller
{
    public function index()
    {
        $posts = Income::all();

        return response()->json($posts); 
    }
}
