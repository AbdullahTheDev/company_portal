<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\PageController;

// Route::resource('pages', PageController::class);


Route::prefix('Admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('pages', PageController::class)->names('admin.pages');
    Route::get('pages/create/{oldPage}', [PageController::class, 'create'])->name('admin.pages.create');

});
Route::get('agreement/{slug}', [PageController::class, 'viewPage'])->name('user.pages.view');
Route::post('agreement/submit', [PageController::class, 'submit'])->name('user.agreement.submit');


Route::get('thanks/{id?}', [PageController::class, 'thanks'])->name('thanks');
Route::get('download-pdf/{id}', [PageController::class, 'generatePdf'])->name('download-pdf');