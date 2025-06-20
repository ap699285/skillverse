<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LandingPageController;
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

Route::get('/', [LandingPageController::class, 'landing_page'])->name('landing_page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'allowedrole'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => ['auth', 'verified', 'allowedrole']], function () {
    Route::get('/pengaturan/halaman-awal/slider', [LandingPageController::class, 'pengaturanSlider'])->name('pengaturan.slider');
});

require __DIR__.'/auth.php';
