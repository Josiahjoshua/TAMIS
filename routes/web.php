<?php
use App\Http\Controllers\directorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
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
//admin route
Route::get('/', function () { return view('admin.index');});

// Route::get('assettassignment', function () { return view('admin.assettassignment');});

// Route::get('assetcategory', function () { return view('admin.assetcategory');});

// Route::get('assethistory', function () { return view('admin.assethistory');});

// Route::get('/assetinfo', function () { return view('admin.assetinfo');});
Route::get('assetinfo', function () { return view('assetinfo');});

// Route::get('directorate', function () { return view('admin.directorate');});

// Route::get('branchreport', function () { return view('admin.branchreport');});

Route::get('dashboard', function () { return view('admin.dashboard');});
// // Route::get('dashboard', function () { return view('admin.dashboard');});
Route::get('dashboard', function () { return view('admin.dashboard');})->name('dashboard');

// Route::get('department', function () { return view('admin.department');});

// Route::get('employeeinfo', function () { return view('admin.employeeinfo');});

// Route::get('employeereport', function () { return view('admin.employeereport');});

// Route::get('transferasset', function () { return view('admin.transferasset');});

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

    Route::get('assets_report', function() {
        return view('stock_checker.report');
    })->name('stock-checker.report');

    Route::get('profile', function() {
        return view('stock_checker.user');
    })->name('stock_checker.profile');



});
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




         //DIRECTOR ROUTES

Route::get('/', [directorController::class, 'index']) ->name('index');

Route::get('dashboard', [directorController::class, 'dashboard']) ->name('dashboard');

Route::get('departmentoffice',[directorController::class, 'departmentoffice']) ->name('departmentoffice');

Route::get('departmentreport', [directorController::class, 'departmentreport']) ->name('departmentreport');

Route::get('assetinfo', [directorController::class, 'assetinfo']) ->name('assetinfo');

Route::get('assethistory', [directorController::class, 'assethistory']) ->name('assethistory');

Route::get('assetassignment', [directorController::class, 'assetassignment']) ->name('assetassignment');

Route::get('transferasset', [directorController::class, 'transferasset']) ->name('transferasset');
