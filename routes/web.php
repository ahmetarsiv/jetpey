<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\Shop\HomeController;
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

Auth::routes();
Route::redirect('/','/login');
Route::redirect('/home','/login');

Route::get('/redirect', [App\Http\Controllers\HomeController::class, 'redirect'])->name('redirect');
Route::get('/logout-user', [App\Http\Controllers\HomeController::class, 'logoutUser'])->name('logout-user');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'check.role'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'getAdminDashboard'])->name('dashboard');
    Route::resource('job', JobController::class);
});

Route::prefix('customer')->name('customer.')->middleware(['auth', 'check.role'])->group(function () {
    Route::get('/', [HomeController::class, 'getShopHome'])->name('dashboard');
    Route::get('/my-account', [HomeController::class, 'getMyAccount'])->name('account');
});
