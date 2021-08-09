<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Models\Package;

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
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $package = Package::all()->take(6);
    return redirect('/')
        ->with('packages', $package);
})->name('dashboard');

Route::get('/', [HomeController::class, 'showHomepage']);
Route::view('/aboutus', "aboutus");
Route::get('/booking/{id}', [BookingController::class, 'showBookingPage']);
Route::get('/allPackages', [PackageController::class, 'showAllPackages']);
Route::get("search", [PackageController::class, 'showSearchResults']);
Route::resource('packages', 'App\Http\Controllers\PackageController');
Route::get('package/{id}', [PackageController::class, 'showPackageDetail']);
Route::get('/editPackages/{id}', [PackageController::class, 'edit']);
Route::post('updatePackage/{id}', [PackageController::class, 'updatePackage']);
//Route::post('/package/{id}', [PackageController::class, 'update']);
Route::post('createPackage', [PackageController::class, 'store']);
Route::post('book', [BookingController::class, 'addBooking']);
Route::get('receipt/{id}', [BookingController::class, 'showReceipt']);
Route::get('/downloadReceipt/{id}', [BookingController::class, 'downloadReceipt']);
Route::get('/profile', [ProfileController::class, 'showProfile']);

require 'admin.php';
