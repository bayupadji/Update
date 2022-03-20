<?php

use App\Http\Controllers\MainController;
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

// Route::get('/', [MainController::class, 'goHome']);
Route::get('/profile', [MainController::class, 'goProfile']);
Route::get('/doc', [MainController::class, 'goDoc']);
Route::get('/status', [MainController::class, 'goStatus']);
Route::get('/pengajuan', [MainController::class, 'goPengajuan']);
Route::get('/admin/dashboard', [MainController::class, 'goDashboard']);
Route::get('/login', [MainController::class, 'gologin']);

Route::get('/admin/detail', [MainController::class, 'goAdminDetail']);




Route::get('/', function () {
    return view('/Admin/main');
});

// Route::get('dashboard', function () {
//     return view('Admin.db');
// });
