<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\auth\LoginController as AuthLoginController;
use App\Http\Controllers\auth\RegistController;
use App\Http\Controllers\DestinationCheckoutController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\DestinationDetailController;
use App\Http\Controllers\DiscoveryController;
use App\Http\Controllers\OpenTripDetailController;
use App\Http\Controllers\OrderSuccessController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PrivateTripController;
use App\Http\Controllers\SummaryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[DiscoveryController::class,'index']);
Route::get('/discovery',[DiscoveryController::class,'index'])->name('discovery');
Route::get('/destination',[DestinationController::class,'index'])->name('destination');
Route::get('/package',[PackageController::class,'index'])->name('package');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/destination-detail',[DestinationDetailController::class,'index']);
Route::get('/private-trip-detail',[PrivateTripController::class, 'index']);
Route::get('/open-trip-detail', [OpenTripDetailController::class, 'index']);
Route::get('/summary', [SummaryController::class, 'index']);
Route::get('/ordersuccess', [OrderSuccessController::class, 'index']);
Route::get('/checkout', [DestinationCheckoutController::class, 'index']);

// admin
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/login',[AuthLoginController::class,'index'])->name('login');
Route::get('/login-process',[AuthLoginController::class,'index'])->name('login-process');

Route::get('/register',[RegistController::class,'index'])->name('register');
