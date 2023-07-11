<?php

use App\Http\Controllers\IncomeController;
use Illuminate\Support\Facades\Route;

Route::get('/income', [IncomeController::class, 'index']);