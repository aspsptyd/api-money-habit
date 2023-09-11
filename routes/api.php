<?php

use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;

Route::get('v1/income', [IncomeController::class, 'index']);