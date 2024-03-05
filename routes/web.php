<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactTypeController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VisionController;
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

Route::get('/', function () {
    return view('welcome');
});

// Landing page
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

//vision
Route::get('/admin/vision', [VisionController::class, 'index'])->name('vision.index');
Route::post('/admin/vision/store', [VisionController::class, 'store'])->name('vision.store');
Route::get('/admin/vision/create', [VisionController::class, 'create'])->name('vision.create');
Route::get('/admin/vision/{vision}', [VisionController::class, 'show'])->name('vision.show');
Route::get('/admin/vision/{vision}/edit', [VisionController::class, 'edit'])->name('vision.edit');
Route::patch('/admin/vision/{vision}', [VisionController::class, 'update'])->name('vision.update');
Route::delete('/admin/vision/{vision}', [VisionController::class, 'destroy'])->name('vision.destroy');

//mission
Route::get('/admin/mission', [MissionController::class, 'index'])->name('mission.index');
Route::post('/admin/mission/store', [MissionController::class, 'store'])->name('mission.store');
Route::get('/admin/mission/create', [MissionController::class, 'create'])->name('mission.create');
Route::get('/admin/mission/{mission}', [MissionController::class, 'show'])->name('mission.show');
Route::get('/admin/mission/{mission}/edit', [MissionController::class, 'edit'])->name('mission.edit');
Route::patch('/admin/mission/{mission}', [MissionController::class, 'update'])->name('mission.update');
Route::delete('/admin/mission/{mission}', [MissionController::class, 'destroy'])->name('mission.destroy');

// ContactTypeController
Route::resource('contact-types', ContactTypeController::class)->names([
    'index' => 'contact-types.index',
    'create' => 'contact-types.create',
    'store' => 'contact-types.store',
    'show' => 'contact-types.show',
    'edit' => 'contact-types.edit',
    'update' => 'contact-types.update',
    'destroy' => 'contact-types.destroy',
]);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
