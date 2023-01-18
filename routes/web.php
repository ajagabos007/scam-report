<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportScamController;
use App\Http\Livewire\ReportScams\ExportToCsv;
use App\Http\Livewire\Predict\SpamEmail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('report-scams/export-to-csv', ExportToCsv::class)->name('report-scams.export-to-csv');
Route::get('predict/spam-email', SpamEmail::class)->name('predict.spam-email');

Route::resource('report-scams', ReportScamController::class);
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::fallback(function () {
    return view('404');
});
