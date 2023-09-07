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

Route::get('assetinfo', function () { return view('assetinfo');});

Route::get('branchoffice', function () { return view('branchoffice');});

Route::get('branchreport', function () { return view('branchreport');});

Route::get('dashboard', function () { return view('dashboard');});

Route::get('department', function () { return view('department');});

Route::get('employeeinfo', function () { return view('employeeinfo');});

Route::get('employeereport', function () { return view('employeereport');});

Route::get('transferasset', function () { return view('transferasset');});

Route::get('user', function () { return view('admin.user');});


Route::group(['prefix'=>'stock-checker'], function(){

    Route::get('dashboard', function(){
        return view('stock_checker.dashboard');
    })->name('stock_checker.dashboard');

    Route::get('assets_history', function(){ 
        return view('stock_checker.assethistory');
    })->name('stock-checker.assethistory');
    
    Route::get('assets_category', function(){ 
        return view('stock_checker.assetcategory');
    })->name('stock-checker.assetcategory');
    
    Route::get('assets_info', function(){ 
        return view('stock_checker.assetinfo');
    })->name('stock-checker.assetinfo');
    
    Route::get('department', function(){ 
        return view('stock_checker.department');
    })->name('stock-checker.department');
    
    Route::get('assets_disposal', function(){ 
        return view('stock_checker.assetdisposal');
    })->name('stock-checker.assetdisposal');

    Route::get('profile', function() {
        return view('stock_checker.user');
    })->name('stock_checker.profile');


});
