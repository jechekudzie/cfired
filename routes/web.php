<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactTypeController;
use App\Http\Controllers\CoreValueController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\OurApproachController;
use App\Http\Controllers\OurServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
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

//introduction
Route::get('/admin/introduction', [IntroductionController::class, 'index'])->name('introduction.index');
Route::post('/admin/introduction/store', [IntroductionController::class, 'store'])->name('introduction.store');
Route::get('/admin/introduction/create', [IntroductionController::class, 'create'])->name('introduction.create');
Route::get('/admin/introduction/{introduction}', [IntroductionController::class, 'show'])->name('introduction.show');
Route::get('/admin/introduction/{introduction}/edit', [IntroductionController::class, 'edit'])->name('introduction.edit');
Route::patch('/admin/introduction/{introduction}', [IntroductionController::class, 'update'])->name('introduction.update');
Route::delete('/admin/introduction/{introduction}', [IntroductionController::class, 'destroy'])->name('introduction.destroy');

//our journey
Route::get('/admin/our-journey', [JourneyController::class, 'index'])->name('our-journey.index');
Route::post('/admin/our-journey/store', [JourneyController::class, 'store'])->name('our-journey.store');
Route::get('/admin/our-journey/create', [JourneyController::class, 'create'])->name('our-journey.create');
Route::get('/admin/our-journey/{ourJourney}', [JourneyController::class, 'show'])->name('our-journey.show');
Route::get('/admin/our-journey/{ourJourney}/edit', [JourneyController::class, 'edit'])->name('our-journey.edit');
Route::patch('/admin/our-journey/{ourJourney}', [JourneyController::class, 'update'])->name('our-journey.update');
Route::delete('/admin/our-journey/{ourJourney}', [JourneyController::class, 'destroy'])->name('our-journey.destroy');

//core values
Route::get('/admin/core-values', [CoreValueController::class, 'index'])->name('core-values.index');
Route::post('/admin/core-values/store', [CoreValueController::class, 'store'])->name('core-values.store');
Route::get('/admin/core-values/create', [CoreValueController::class, 'create'])->name('core-values.create');
Route::get('/admin/core-values/{coreValue}', [CoreValueController::class, 'show'])->name('core-values.show');
Route::get('/admin/core-values/{coreValue}/edit', [CoreValueController::class, 'edit'])->name('core-values.edit');
Route::patch('/admin/core-values/{coreValue}', [CoreValueController::class, 'update'])->name('core-values.update');
Route::delete('/admin/core-values/{coreValue}', [CoreValueController::class, 'destroy'])->name('core-values.destroy');

//our approach
Route::get('/admin/our-approach', [OurApproachController::class, 'index'])->name('our-approach.index');
Route::post('/admin/our-approach/store', [OurApproachController::class, 'store'])->name('our-approach.store');
Route::get('/admin/our-approach/create', [OurApproachController::class, 'create'])->name('our-approach.create');
Route::get('/admin/our-approach/{ourApproach}', [OurApproachController::class, 'show'])->name('our-approach.show');
Route::get('/admin/our-approach/{ourApproach}/edit', [OurApproachController::class, 'edit'])->name('our-approach.edit');
Route::patch('/admin/our-approach/{ourApproach}', [OurApproachController::class, 'update'])->name('our-approach.update');
Route::delete('/admin/our-approach/{ourApproach}', [OurApproachController::class, 'destroy'])->name('our-approach.destroy');

//contact types
Route::get('/admin/contact-types', [ContactTypeController::class, 'index'])->name('contact-types.index');
Route::post('/admin/contact-types/store', [ContactTypeController::class, 'store'])->name('contact-types.store');
Route::get('/admin/contact-types/create', [ContactTypeController::class, 'create'])->name('contact-types.create');
Route::get('/admin/contact-types/{contactType}', [ContactTypeController::class, 'show'])->name('contact-types.show');
Route::get('/admin/contact-types/{contactType}/edit', [ContactTypeController::class, 'edit'])->name('contact-types.edit');
Route::patch('/admin/contact-types/{contactType}', [ContactTypeController::class, 'update'])->name('contact-types.update');
Route::delete('/admin/contact-types/{contactType}', [ContactTypeController::class, 'destroy'])->name('contact-types.destroy');

//our services introduction
Route::get('/admin/our-services-introduction', [OurServiceController::class, 'index'])->name('our-services-introduction.index');
Route::post('/admin/our-services-introduction/store', [OurServiceController::class, 'store'])->name('our-services-introduction.store');
Route::get('/admin/our-services-introduction/create', [OurServiceController::class, 'create'])->name('our-services-introduction.create');
Route::get('/admin/our-services-introduction/{ourService}', [OurServiceController::class, 'show'])->name('our-services-introduction.show');
Route::get('/admin/our-services-introduction/{ourService}/edit', [OurServiceController::class, 'edit'])->name('our-services-introduction.edit');
Route::patch('/admin/our-services-introduction/{ourService}', [OurServiceController::class, 'update'])->name('our-services-introduction.update');
Route::delete('/admin/our-services-introduction/{ourService}', [OurServiceController::class, 'destroy'])->name('our-services-introduction.destroy');

//services
Route::get('/admin/services', [ServiceController::class, 'index'])->name('services.index');
Route::post('/admin/services/store', [ServiceController::class, 'store'])->name('services.store');
Route::get('/admin/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::get('/admin/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/admin/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::patch('/admin/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/admin/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
