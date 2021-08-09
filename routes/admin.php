<?php 

use App\Http\Controllers\PackageController;
use App\Models\Package;

Route::group(['prefix'  =>  'admin'], function () {

Route::get('login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login.post');
Route::get('logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/', function () {
        $package = Package::all();
        $count = Package::count();
        return view('admin.dashboard.index')
                ->with('packages', $package)
                ->with('count', $count);
    })->name('admin.dashboard');

    Route::post('createPackage', [PackageController::class, 'store'])->name('package.store.post');

});

});