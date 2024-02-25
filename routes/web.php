<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\SubadminController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\IbchkConrtoller;
use App\Http\Controllers\Backend\MotijheelController;
use App\Http\Controllers\Backend\EtenderController;
use App\Http\Controllers\Backend\CarrierController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\HospitalformController;
use App\Http\Controllers\Backend\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[FrontendController::class,'index'])->name('index');




/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin-dashboard

Route::group(['prefix'=>'admin','middleware'=>['admin','auth','permission']],function () {

    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

    //Role Management

    Route::resource('role',RoleController::class);
    Route::resource('permission',PermissionController::class);
    Route::resource('subadmin',SubadminController::class);


});






//Hospital Forom Entry
Route::group(['prefix'=>'hospitalform','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[HospitalformController::class,'view'])->name('hospitalform.view');
    Route::get('/add',[HospitalformController::class,'add'])->name('hospitalform.add');
    Route::post('/store',[HospitalformController::class,'store'])->name('hospitalform.store');
    Route::get('/edit/{id},',[HospitalformController::class,'edit'])->name('hospitalformedit');
    Route::post('/update/{id},',[HospitalformController::class,'update'])->name('hospitalform.update');
    Route::post('/delete/{id},',[HospitalformController::class,'delete'])->name('hospitalform.delete');
    Route::post('/download',[HospitalformController::class,'download'])->name('hospitalform.download');

});
//Branch
Route::group(['prefix'=>'branches','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[BranchController::class,'view'])->name('branches.view');
    Route::get('/add',[BranchController::class,'add'])->name('branches.add');
    Route::post('/store',[BranchController::class,'store'])->name('branches.store');
    Route::get('/edit/{id},',[BranchController::class,'edit'])->name('branches.edit');
    Route::post('/update/{id},',[BranchController::class,'update'])->name('branches.update');
    Route::post('/delete/{id},',[BranchController::class,'delete'])->name('branches.delete');
    Route::post('/download',[BranchController::class,'download'])->name('branches.download');



});


 //Report
Route::group(['prefix'=>'reports','middleware' => 'auth'], function(){
//Monthly Profit
    Route::get('/bank_hospital_report/view',[ReportController::class,'BhrView'])->name('reports.bh.view');
    Route::get('/hospital_report/get', [ReportController::class,'hReport'])->name('reports.h_report.datewise.get');
    Route::get('/hospital_report/pdf', [ReportController::class,'hReportPdf'])->name('reports.h-report.pdf');
   // Route::get('/profit/pdf', 'Backend\Report\ProfitController@pdf')->name('reports.profit.pdf');
    Route::get('/show_hospital_report/view',[ReportController::class,'repView'])->name('reportView');




});






/*Route::group(['middleware'=>'admin','auth'],function () {
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    });

});*/

//User-Dashboard

/*Route::group(['middleware'=>'user','auth'],function () {
    Route::prefix('user')->group(function () {

        Route::get('/dashboard', 'UserController@index')->name('user.dashboard');

    });

});*/

Route::group(['prefix'=>'user','middleware'=>['user','auth']],function () {

  Route::get('/dashboard',[UserController::class,'index'])->name('user.dashboard');
});
/*Route::group(['prefix'=>'user','middleware'=>['admin','auth','permission','user']],function () {

    Route::get('/dashboard',[UserController::class,'index'])->name('user.dashboard');

});*/