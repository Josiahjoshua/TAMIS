<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () { return view('index');});

// Route::get('assettassignment', function () { return view('admin.assettassignment');});

// Route::get('assetcategory', function () { return view('admin.assetcategory');});

// Route::get('assethistory', function () { return view('admin.assethistory');});

Route::get('/assetinfo', function () { return view('admin.assetinfo');});

// Route::get('directorate', function () { return view('admin.directorate');});

// Route::get('branchreport', function () { return view('admin.branchreport');});

Route::get('dashboard', function () { return view('admin.dashboard');});

// Route::get('department', function () { return view('admin.department');});

// Route::get('employeeinfo', function () { return view('admin.employeeinfo');});

// Route::get('employeereport', function () { return view('admin.employeereport');});

// Route::get('transferasset', function () { return view('admin.transferasset');});

Route::get('user', function () { return view('admin.user');});


////////////////////////
/////// user department/////////////////// user department///////////// user department////////////////////////////// user department
////////////////////////

Route::get('userdashboard',[user_departmentController::class,'dashboard'])->name('dash');
Route::get('AssetInformation', [user_departmentController::class, 'assetInfo'])->name('assetInformation');
Route::get('transferHistory', [user_departmentController::class, 'transferHistory'])->name('transferHistory');
Route::get('assetreq',[user_departmentController::class,'assetreq']);
Route::get('employee',[user_departmentController::class,'employeeinfo']);
Route::get('assetassigment', [user_departmentController::class, 'assetAssigment']);
Route::get('/create', 'HomeController@create')->name('create');
Route::get('assignAsset', [user_departmentController::class, 'assignAsset'])->name('assignAsset');
Route::get('transferasset', [user_departmentController::class, 'transferasset'])->name('transferasset');
Route::post('/show-popup', 'PopupController@showPopup')->name('pop');
Route::get('tempTransfer', [user_departmentController::class, 'tempTransfer'])->name('tempTransfer');
Route::get('office',[user_departmentController::class,'office']);
Route::get('request', [user_departmentController::class, 'request']);
// Route::get('user', function () { return view('admin.user');});

