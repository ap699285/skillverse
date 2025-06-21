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

Route::group(['middleware' => []], function () {
    Route::get('/', [LandingPageController::class, 'landing_page'])->name('landing_page');
    Route::get('/blog_content/{id}', [LandingPageController::class, 'blog_content'])->name('blog_content');
    Route::post('/save_comment_blog', [LandingPageController::class, 'save_comment_blog'])->name('save_comment_blog');
    Route::get('/about_us', [LandingPageController::class, 'about_us'])->name('about_us');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => ['auth', 'verified', 'allowedrole']], function () {
    Route::get('/dashboard', [LandingPageController::class, 'dashboard'])->name('dashboard');

    Route::get('/pengaturan/halaman-awal/slider', [LandingPageController::class, 'pengaturan_slider'])->name('pengaturan.slider');
    Route::get('/pengaturan/halaman-awal/feature', [LandingPageController::class, 'pengaturan_feature'])->name('pengaturan.feature');
    Route::get('/pengaturan/halaman-awal/counter', [LandingPageController::class, 'pengaturan_counter'])->name('pengaturan.counter');
    Route::get('/pengaturan/halaman-awal/course', [LandingPageController::class, 'pengaturan_course'])->name('pengaturan.course');
    Route::get('/pengaturan/halaman-awal/video', [LandingPageController::class, 'pengaturan_video'])->name('pengaturan.video');
});

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::post('/pengaturan/halaman-awal/slider/save', [LandingPageController::class, 'pengaturan_slider_save'])->name('pengaturan.slider.save');
    Route::post('/pengaturan/halaman-awal/feature/save', [LandingPageController::class, 'pengaturan_feature_save'])->name('pengaturan.feature.save');
    Route::post('/pengaturan/halaman-awal/counter/save', [LandingPageController::class, 'pengaturan_counter_save'])->name('pengaturan.counter.save');
    Route::post('/pengaturan/halaman-awal/course/save', [LandingPageController::class, 'pengaturan_course_save'])->name('pengaturan.course.save');
    Route::post('/pengaturan/halaman-awal/video/save', [LandingPageController::class, 'pengaturan_video_save'])->name('pengaturan.video.save');
});

require __DIR__.'/auth.php';
