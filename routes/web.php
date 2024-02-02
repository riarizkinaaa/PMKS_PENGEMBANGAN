<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AnakController;



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

@include_once('admin_web.php');

Route::get('/', function () {
    return redirect()->route('index');
})->name('/');
Route::view('/', 'home');
// Route::view('sample-page', 'admin.pages.sample-page')->name('sample-page');

Route::prefix('auth')->group(function () {
    // Route::resource('/', AuthController::class);
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('actionlogin', [AuthController::class, 'actionlogin'])->name('aksilogin');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('activation/{token}', [AuthController::class, 'activation']);
    Route::get('alllanak', [AuthController::class, 'all_anak']);
    // Route::get('/anak', [AnakController::class, 'index']);
    // Route::get('/maps', [MapController::class, 'index']);
    // Route::get('/maps', [MapController::class, 'index'])->name('maps.index')->middleware('auth');

});
