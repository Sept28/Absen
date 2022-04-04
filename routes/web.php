<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OfficeController;
use App\Http\Controllers\Admin\PositionController;
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

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController:: class, 'index'])->name('admin.dashboard');
});

Route::prefix('admin/master')->group(function () {
    // POSITION
    Route::resource('position', PositionController::class);
    Route::get('/position/delete-all-confirm', [PositionController::class, 'deleteAllConfirmation'])->name('position.deleteAllConfirmation');
    Route::get('/position/{position}/confirm', [PositionController::class, 'confirmation'])->name('position.confirmation');
    Route::post('/position/delete', [PositionController::class, 'deleteAll'])->name('position.deleteAll');
    
    // OFFICE
    Route::resource('office', OfficeController::class);
    Route::get('/office/{office}/confirm', [OfficeController::class, 'confirmation'])->name('office.confirmation');
    Route::post('/office/delete', [OfficeController::class, 'deleteAll'])->name('office.deleteAll');
});

Route::get('getCity/{id}', function ($id) {
$city = Illuminate\Support\Facades\DB::table('indonesia_cities')->where('province_code',$id)->get();
    return response()->json($city);
});