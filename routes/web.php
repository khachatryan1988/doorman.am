<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\LoginController;

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

//Route::get('/', function () {
//    return view('layouts.app');
//});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/localization/{locale}', \App\Http\Controllers\Localization::class)->name('localization');

Route::middleware(\App\Http\Middleware\Localization::class)
    ->group(function () {
        Route::view('/', 'layouts.app');
        Route::get('/ourworks', [\App\Http\Controllers\GalleryController::class, 'index'])->name('galery');
        Route::get('/contactUs', [\App\Http\Controllers\ContactUs::class, 'index'])->name('contactUs');
        Route::get('/service', [\App\Http\Controllers\ServiceController::class, 'index'])->name('service');
        Route::get('/about', [\App\Http\Controllers\AboutUsController::class, 'index'])->name('about');
        Route::get('/gateInstallation', [\App\Http\Controllers\GateInstallationController::class, 'index'])->name('gateInstallation');
        Route::get('/gateMaintenance', [\App\Http\Controllers\GateMaintenanceController::class, 'index'])->name('gateMaintenance');
        Route::get('/measurement', [\App\Http\Controllers\MeasurementController::class, 'index'])->name('measurement');
        Route::get('/consultation', [\App\Http\Controllers\ConsultationController::class, 'index'])->name('consultation');
//        Route::get('/new', [\App\Http\Controllers\ConsultationController::class, 'new'])->name('new');
    });
Route::post('/calculate-m2', function (Request $request) {
    $width = $request->input('width');
    $height = $request->input('height');

    $area = $width * $height;
    $price_per_m2 = 5000; // 100 dram per m²
    $total_price = $area * $price_per_m2;

    return redirect()->back()->with([
        'result' => number_format($area, 2),
        'price' => number_format($total_price, 0)
    ]);
})->name('calculate.m2');


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});




