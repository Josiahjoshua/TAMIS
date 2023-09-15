<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directorController;
use App\Http\Controllers\user_departmentController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\AdminController;

use App\Mode\Asset;
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



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function(){
    return view('index');
    } ) ->name('index');

//ADMIN ROUTES
// Route::group(['prefix'=>'admin'], function(){
// Route::get('/', [directorController::class, 'index']) ->name('index');


// Route::get('assetcategory', function () { return view('admin.assetcategory');});

// Route::get('assethistory', function () { return view('admin.assethistory');});

// Route::get('/assetinfo', function () { return view('admin.assetinfo');});

// Route::get('directorate', function () { return view('admin.directorate');});

// Route::get('branchreport', function () { return view('admin.branchreport');});

// Route::get('dashboard', function () { return view('admin.dashboard');});

// Route::get('department', function () { return view('admin.department');});

// Route::get('employeeinfo', function () { return view('admin.employeeinfo');});

// Route::get('employeereport', function () { return view('admin.employeereport');});

// Route::get('transferasset', function () { return view('admin.transferasset');});


// Route::get('user', function () { return view('admin.user');});



// Route::get('user', function () { return view('admin.user');});


//routes for store
Route::group(['prefix'=>'store'], function(){



    Route::get('dashboard', [StoreController::class, 'storeDashboard'])
    ->name('store.dashboard');

    Route::get('registerAsset', [StoreController::class, 'RegisterAsset'])
    ->name('store.registerAsset');

    Route::post('registerAsset', [StoreController::class, 'formSubmission'])
    ->name('registerAsset');

    Route::get('gamisRegister', [StoreController::class, 'gamisRegister'])
    ->name('store.gamisRegister');

    Route::get('assetInformation', [StoreController::class, 'assetInformation'])
    ->name('store.assetInformation');

    Route::get('assetDisposition', [StoreController::class, 'assetDisposition'])
    ->name('store.assetDisposition');

    Route::get('registeredAsset', [StoreController::class, 'registeredAsset'])
    ->name('store.registeredAsset');

    Route::get('assignAsset', [StoreController::class, 'assignAsset'])
    ->name('store.assignAsset');


});

//STOCK_CHECKER
Route::group(['prefix'=>'stock-checker'], function(){

    Route::get('dashboard', [stockCheckerController::class, 'stockCheckerDashboard'])
    ->name('stock_checker.dashboard');

    Route::get('assets_transfer_history', [stockCheckerController::class, 'assetsTransferHistory'])
    ->name('stock-checker.assethistory');

    Route::get('assets_type', [stockCheckerController::class, 'assetsType'])
    ->name('stock-checker.assettype');

    Route::get('assets_info', [stockCheckerController::class, 'assetInfo'])
    ->name('stock-checker.assetinfo');

    Route::get('department', [stockCheckerController::class, 'department'])
    ->name('stock-checker.department');

    Route::get('assets_disposal', [stockCheckerController::class, 'assetDisposal'])
    ->name('stock-checker.assetdisposal');

    Route::get('assets_report', [stockCheckerController::class, 'report'])
    ->name('stock-checker.report');

    Route::get('profile', [stockCheckerController::class, 'userProfile'])
    ->name('stock_checker.profile');

});

//estate routes
Route::group(['prefix'=>'estate'], function(){


    Route::get('category', function () { return view('estate.category');})->name('estate/category');

    Route::get('viewasset', function () {return view('estate.assetviews');});


    Route::get('now/{assetName}', [estateController::class, 'getNow'])->name('now');

    // Route::get('now/{assetName}', function ($assetName) {return view('estate.assetviews.testingsirikwaway', ['assetName' => $assetName]);})
    // ->name('now');

    Route::get('department', function () { return view('estate.departmentview');})->name('estate/department');
    Route::get('viewdepart/{departmentName}', function ($departmentName) {    return view('estate.assetviews.departmentviews', ['departmentName' => $departmentName]);
    })->name('viewdepart');

    Route::get('requests', [estateController::class, 'requestedasset'])->name('requests');


    Route::get('trasferhistory', [estateController::class, 'trasferhistory'])->name('trasferhistory');



    Route::get('getpdf', [estateController::class, 'getpdf'])->name('getpdf');

    Route::get('dashboard', [estateController::class, 'dashboard'])->name('dashboard');


});




         //DIRECTOR ROUTES
Route::group(['prefix'=>'director'], function(){
        Route::get('dashboard', [directorController::class, 'dashboard']) ->name('director.dashboard');

        Route::get('departmentoffice',[directorController::class, 'departmentoffice']) ->name('director.departmentoffice');

        Route::get('departmentreport', [directorController::class, 'departmentreport']) ->name('director.departmentreport');

        Route::get('assetinfo', [directorController::class, 'assetinfo']) ->name('director.assetinfo');
// Route::get('/', [directorController::class, 'index']) ->name('index');

        Route::get('assethistory', [directorController::class, 'assethistory']) ->name('director.assethistory');

        Route::get('assetassignment', [directorController::class, 'assetassignment']) ->name('director.assetassignment');

        Route::get('transferasset', [directorController::class, 'transferasset']) ->name('director.transferasset');
        Route::post('addData', [directorController::class, 'addData']);
});



                 //USER_DEPARTMENT
Route::group(['prefix'=>'user_department'], function(){



    Route::get('dashboard',[user_departmentController::class,'dashboard'])
    ->name('user_department.dashboard');
    Route::get('AssetInformation', [user_departmentController::class, 'assetInfo'])
    ->name('user_department.assetInformation');

    Route::get('transferHistory', [user_departmentController::class, 'transferasset'])
    ->name('user_department.transferAsset');

    Route::get('assetreq',[user_departmentController::class,'assetreq'])
    ->name('user_department.assetreq');

    Route::get('employee',[user_departmentController::class,'employeeinfo'])
    ->name('user_department.employeeinfo');

    Route::get('assetassigment', [user_departmentController::class, 'assetAssigment'])
    ->name('user_department.assetAssigment');

    Route::get('create', [user_departmentController::class, 'create'])
    ->name('user_department.create');

    Route::get('assignAsset', [user_departmentController::class, 'assignAsset'])
    ->name('user_department.assignAsset');

    Route::get('transferasset', [user_departmentController::class, 'transferasset'])
    ->name('user_department.transferasset');

    Route::post('/show-popup', 'PopupController@showPopup')
    ->name('user_department.pop');

    Route::get('tempTransfer', [user_departmentController::class, 'tempTransfer'])
    ->name('user_department.tempTransfer');

    Route::get('office',[user_departmentController::class,'user_department.office']);

    Route::get('request', [user_departmentController::class, 'user_department.request']);

    Route::get('transferHistory',[user_departmentController::class, 'transferHistory'])->name('user_department.transferHistory1');


});

Route::get('/profilemanagment', [Profileupdate::class, 'profilemanagnemt']);
