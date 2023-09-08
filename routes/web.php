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
//admin route
Route::get('/', function () { return view('admin.index');});

Route::get('assettassignment', function () { return view('assettassignment');});

Route::get('assetcategory', function () { return view('assetcategory');});

Route::get('assethistory', function () { return view('assethistory');});

Route::get('/assetinfo', function () { return view('assetinfo');});

Route::get('branchoffice', function () { return view('branchoffice');});

Route::get('branchreport', function () { return view('branchreport');});

Route::get('dashboard', function () { return view('admin.dashboard');})->name('dashboard');

Route::get('department', function () { return view('department');});

Route::get('employeeinfo', function () { return view('employeeinfo');});

Route::get('employeereport', function () { return view('employeereport');});

Route::get('transferasset', function () { return view('transferasset');});

Route::get('user', function () { return view('admin.user');});


//estate routes

Route::get('estate/category', function () { return view('estate.category');})->name('estate/category');
Route::get('viewasset', function () {
     return view('estate.assetviews');
});



Route::get('now/{assetName}', function ($assetName) {
   return view('estate.assetviews.testingsirikwaway', ['assetName' => $assetName]);
})->name('now');


Route::get('estate/department', function () { return view('estate.departmentview');})->name('estate/department');



Route::get('viewdepart/{departmentName}', function ($departmentName) {
    return view('estate.assetviews.departmentviews', ['departmentName' => $departmentName]);
 })->name('viewdepart');

 Route::get('requests', function () { return view('estate.estaterequests');})->name('requests');