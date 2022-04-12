<?php

use App\Http\Controllers\Admin\BiodataStaff;
use App\Http\Controllers\Admin\BiodataStaffController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OfficeController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\ShiftController;
use App\Http\Controllers\Admin\StaffController;
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
Route::get('/login', function(){
    return view('user.auth.login');
});
Route::get('/register', function(){
    return view('user.auth.register');
});
Route::prefix('admin')->group(function () {
    Route::get('/', [DashboardController:: class, 'index'])->name('admin.dashboard');

    // POSITION
    Route::resource('position', PositionController::class);
    Route::get('/position/delete-all-confirm', [PositionController::class, 'deleteAllConfirmation'])->name('position.deleteAllConfirmation');
    Route::get('/position/{position}/confirm', [PositionController::class, 'confirmation'])->name('position.confirmation');
    Route::post('/position/delete', [PositionController::class, 'deleteAll'])->name('position.deleteAll');
    
    // OFFICE
    Route::resource('office', OfficeController::class);
    Route::get('/office/{office}/confirm', [OfficeController::class, 'confirmation'])->name('office.confirmation');
    Route::post('/office/delete', [OfficeController::class, 'deleteAll'])->name('office.deleteAll');

    // SHIFT
    Route::resource('shift', ShiftController::class);
    Route::get('/shift/{shift}/confirm', [ShiftController::class, 'confirmation'])->name('shift.confirmation');
    Route::post('/shift/delete', [ShiftController::class, 'deleteAll'])->name('shift.deleteAll');

    // STAFF
    Route::resource('staff', StaffController::class);
    Route::get('/staff/{staff}/confirm', [StaffController::class, 'confirmation'])->name('staff.confirmation');
    Route::post('/staff/delete', [StaffController::class, 'deleteAll'])->name('staff.deleteAll');

    // BIODATA
    Route::resource('biodata', BiodataStaffController::class);
    Route::get('/biodata/{biodata}/confirm', [BiodataStaffController::class, 'confirmation'])->name('biodata.confirmation');
    Route::post('/biodata/delete', [BiodataStaffController::class, 'deleteAll'])->name('biodata.deleteAll');
});

// Route::prefix('admin/master')->group(function () {
//     // // POSITION
//     // Route::resource('position', PositionController::class);Malam  
//     // Route::get('/position/delete-all-confirm', [PositionController::class, 'deleteAllConfirmation'])->name('position.deleteAllConfirmation');
//     // Route::get('/position/{position}/confirm', [PositionController::class, 'confirmation'])->name('position.confirmation');
//     // Route::post('/position/delete', [PositionController::class, 'deleteAll'])->name('position.deleteAll');
    
//     // // OFFICE
//     // Route::resource('office', OfficeController::class);
//     // Route::get('/office/{office}/confirm', [OfficeController::class, 'confirmation'])->name('office.confirmation');
//     // Route::post('/office/delete', [OfficeController::class, 'deleteAll'])->name('office.deleteAll');
// });

Route::get('getCity/{id}', function ($id) {
$city = Illuminate\Support\Facades\DB::table('indonesia_cities')->where('province_code',$id)->get();
    return response()->json($city);
});