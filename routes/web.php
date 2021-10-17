<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SuratController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::post('suratInsert', [SuratController::class, 'store']);
Route::get('suratPreview/{id}', [SuratController::class, 'previewLetter'])->name('preview');
Route::post('suratDelete', [SuratController::class, 'delete']);


Route::get('suratPrintPDF/{id}', [SuratController::class, 'printPDF'])->name('printPDF');
Route::get('suratEdit/{id}', [SuratController::class, 'edit'])->name('edit');
Route::post('suratEditing', [SuratController::class, 'edting']);

