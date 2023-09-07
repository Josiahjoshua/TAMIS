<?php

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
//ADMIN ROUTES
// Route::get('/', [AdminController::class, 'home']) ->name('home');

// Route::get('assettassignment', [AdminController::class, 'home']) ->name('assettassignment');

// Route::get('/assetcategory', [AdminController::class, 'home']) ->name('assetcategory');

// Route::get('/assethistory', [AdminController::class, 'home']) ->name('assethistory');

// Route::get('/assetinfo', [AdminController::class, 'home']) ->name('assetinfo');

// Route::get('/branchoffice', [AdminController::class, 'home']) ->name('branchoffice');

Route::get('/', function () { return view('director.index');});

Route::get('dashboard', function () { return view('director.dashboard');});

Route::get('dashboard', function () { return view('director.dashboard');});

Route::get('departmentreport', function () { return view('director.departmentreport');});

Route::get('assetinfo', function () { return view('director.assetinfo');});

Route::get('assethistory', function () { return view('director.assethistory');});

Route::get('transferasset', function () { return view('director.transferasset');});

Route::get('user', function () { return view('director.user');});

