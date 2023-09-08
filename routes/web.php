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

//Login
Route::get('/', function(){
return view('index');
} ) ->name('index');

//ADMIN ROUTES
Route::group(['prefix'=>'admin'], function(){

        Route::get('dashboard', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');


        Route::get('directorate', [AdminController::class, 'directorate'])
        ->name('admin.directorate');

        Route::get('admin/assets', [AdminController::class, 'assets'])
        ->name('admin.assets');

        Route::get('assettype', [AdminController::class, 'assettype'])
        ->name('admin.assettype');

        Route::get('department', [AdminController::class, 'department'])
        ->name('admin.department');

        Route::get('/user', [AdminController::class, 'user'])
        ->name('admin.user');

        Route::get('transfer', [AdminController::class, 'transfer'])
        ->name('admin.transfer');

        Route::get('request', [AdminController::class, 'request'])
        ->name('admin.request');

});


//routes for store
Route::group(['prefix'=>'store'], function(){
    Route::get('dashboard', [StoreController::class, 'storeDashboard'])
    ->name('store.dashboard');

    Route::get('registerAsset', [StoreController::class, 'RegisterAsset'])
    ->name('store.registerAsset');

    Route::get('gamisRegister', [StoreController::class, 'gamisRegister'])
    ->name('store.gamisRegister');

    Route::get('assetInformation', [StoreController::class, 'assetInformation'])
    ->name('store.assetInformation');

    Route::get('assetDisposition', [StoreController::class, 'assetDisposition'])
    ->name('store.assetDisposition');
});

//STOCK_CHECKER
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
Route::group(['prefix'=>'director'], function(){
        Route::get('dashboard', [directorController::class, 'dashboard']) ->name('director.dashboard');

        Route::get('departmentoffice',[directorController::class, 'departmentoffice']) ->name('director.departmentoffice');

        Route::get('departmentreport', [directorController::class, 'departmentreport']) ->name('director.departmentreport');

        Route::get('assetinfo', [directorController::class, 'assetinfo']) ->name('director.assetinfo');

        Route::get('assethistory', [directorController::class, 'assethistory']) ->name('director.assethistory');

        Route::get('assetassignment', [directorController::class, 'assetassignment']) ->name('director.assetassignment');

        Route::get('transferasset', [directorController::class, 'transferasset']) ->name('director.transferasset');
});



                 //USER_DEPARTMENT
Route::group(['prefix'=>'user_department'], function(){
    Route::get('userdashboard',[user_departmentController::class,'user_department.dashboard']);
    Route::get('AssetInformation', [user_departmentController::class, 'assetInfo'])->name('user_department.assetInformation');
    Route::get('TransferHistory', [user_departmentController::class, 'transferasset'])->name('user_department.transferAsset');
    Route::get('assetreq',[user_departmentController::class,'assetreq'])->name('user_department.assetreq');
    Route::get('employee',[user_departmentController::class,'employeeinfo'])->name('user_department.assetAssigment');
    Route::get('assetassigment', [user_departmentController::class, 'assetAssigment'])->name('user_department.assetAssigment');
    Route::get('create', [user_departmentController::class, 'create']) ->name('user_department.create');
    Route::get('assignAsset', [user_departmentController::class, 'assignAsset'])->name('user_department.assignAsset');
    Route::get('transferasset', [user_departmentController::class, 'transferasset'])->name('user_department.transferasset');
});

