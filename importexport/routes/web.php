<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

Route::get('/', function () {
    return view('welcome');
});

// Emport and Import CSV files
Route::get('/importExportView', [ExcelController::class, 'index'])->name('importExportView');
Route::post('/import', [ExcelController::class, 'import'])->name('import');
Route::post('/export', [ExcelController::class, 'export'])->name('export');
