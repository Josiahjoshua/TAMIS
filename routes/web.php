<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\StoreController;
=======
use App\Http\Controllers\AdminController;
>>>>>>> 60360494aeadb5b3f7a2bf1488eaf080c582508c

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

// Route::get('/assetinfo', function () { return view('admin.assetinfo');});

// Route::get('directorate', function () { return view('admin.directorate');});

// Route::get('branchreport', function () { return view('admin.branchreport');});

<<<<<<< HEAD
Route::get('dashboard', function () { return view('admin.dashboard');});
=======
// // Route::get('dashboard', function () { return view('admin.dashboard');});
>>>>>>> 60360494aeadb5b3f7a2bf1488eaf080c582508c

// Route::get('department', function () { return view('admin.department');});

// Route::get('employeeinfo', function () { return view('admin.employeeinfo');});

// Route::get('employeereport', function () { return view('admin.employeereport');});

// Route::get('transferasset', function () { return view('admin.transferasset');});

<<<<<<< HEAD
Route::get('user', function () { return view('admin.user');});


//routes for store
Route::get('/store/dashboard', [StoreController::class, 'storeDashboard'])
->name('store.dashboard');

Route::get('/store/registerAsset', [StoreController::class, 'RegisterAsset'])
->name('store.registerAsset');

Route::get('/store/gamisRegister', [StoreController::class, 'gamisRegister'])
->name('store.gamisRegister');

Route::get('/store/assetInformation', [StoreController::class, 'assetInformation'])
->name('store.assetInformation');

Route::get('/store/assetDisposition', [StoreController::class, 'assetDisposition'])
->name('store.assetDisposition');


=======
// Route::get('user', function () { return view('admin.user');});

Route::get('admin/dashboard', [AdminController::class, 'dashboard'])
->name('admin.dashboard');


Route::get('admin/directorate', [AdminController::class, 'directorate'])
->name('admin.directorate');

Route::get('admin/assets', [AdminController::class, 'assets'])
->name('admin.assets');

Route::get('admin/assettype', [AdminController::class, 'assettype'])
->name('admin.assettype');

Route::get('index', [AdminController::class, 'index'])
->name('index');

Route::get('admin/department', [AdminController::class, 'department'])
->name('admin.department');

Route::get('admin/user', [AdminController::class, 'user'])
->name('admin.user');

Route::get('admin/transfer', [AdminController::class, 'transfer'])
->name('admin.transfer');

Route::get('admin/request', [AdminController::class, 'request'])
->name('admin.request');
>>>>>>> 60360494aeadb5b3f7a2bf1488eaf080c582508c
