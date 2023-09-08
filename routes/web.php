<?php
use App\Http\Controllers\directorController;
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

//DIRECTOR ROUTES

// Route::get('/', [directorController::class, 'index']) ->name('index');

Route::get('dashboard', [directorController::class, 'dashboard']) ->name('dashboard');

Route::get('departmentoffice',[directorController::class, 'departmentoffice']) ->name('departmentoffice');

Route::get('departmentreport', [directorController::class, 'departmentreport']) ->name('departmentreport');

Route::get('assetinfo', [directorController::class, 'assetinfo']) ->name('assetinfo');

Route::get('assethistory', [directorController::class, 'assethistory']) ->name('assethistory');

Route::get('assetassignment', [directorController::class, 'assetassignment']) ->name('assetassignment');

Route::get('transferasset', [directorController::class, 'transferasset']) ->name('transferasset');
