<?php

use Illuminate\Support\Facades\Route;

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
    return redirect()->route('patent_request');
//    redirect('patent_request');
    return view('welcome');
});

Route::get('/patent_request', [\App\Http\Controllers\PatentRequestController::class, 'index'])->name('patent_request');
Route::post('/patent_request', [\App\Http\Controllers\PatentRequestController::class, 'save'])->name('save_patent_request');
Route::get('/main_table', [\App\Http\Controllers\MainTableController::class, 'index'])->name('main_table');
Route::get('/test123', function () {
    return view('pages.test');
})->name('test');
Route::get('/test', [\App\Http\Controllers\TestController::class, 'index']);
