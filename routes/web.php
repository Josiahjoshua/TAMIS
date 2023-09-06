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

Route::get('/', function () { return view('index');});

Route::get('assettassignment', function () { return view('assettassignment');});

Route::get('assetcategory', function () { return view('assetcategory');});

Route::get('assethistory', function () { return view('assethistory');});

Route::get('/assetinfo', function () { return view('assetinfo');});

Route::get('branchoffice', function () { return view('branchoffice');});

Route::get('branchreport', function () { return view('branchreport');});

Route::get('dashboard', function () { return view('dashboard');});

Route::get('department', function () { return view('department');});

Route::get('employeeinfo', function () { return view('employeeinfo');});

Route::get('employeereport', function () { return view('employeereport');});

Route::get('transferasset', function () { return view('transferasset');});

Route::get('user', function () { return view('user');});