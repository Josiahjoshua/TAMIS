<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user_departmentController;

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

Route::get('/assetinfo', function () { return view('admin.assetinfo');});

Route::get('branchoffice', function () { return view('branchoffice');});

Route::get('branchreport', function () { return view('branchreport');});

Route::get('dashboard', function () { return view('admin.dashboard');});

Route::get('department', function () { return view('department');});

Route::get('employeeinfo', function () { return view('employeeinfo');});

Route::get('employeereport', function () { return view('employeereport');});

Route::get('transferasset', function () { return view('transferasset');});

Route::get('user', function () { return view('admin.user');});


////////////////////////
/////// user department/////////////////// user department///////////// user department////////////////////////////// user department
////////////////////////

Route::get('userdashboard',[user_departmentController::class,'dashboard']);
Route::get('AssetInformation', [user_departmentController::class, 'assetInfo'])->name('assetInformation');
Route::get('TransferHistory', [user_departmentController::class, 'transferasset'])->name('transferAsset');
Route::get('assetreq',[user_departmentController::class,'assetreq']);
Route::get('employee',[user_departmentController::class,'employeeinfo']);
Route::get('assetassigment', [user_departmentController::class, 'assetAssigment']);
Route::get('/create', 'HomeController@create')->name('create');
Route::get('assignAsset', [user_departmentController::class, 'assignAsset'])->name('assignAsset');


