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


Route::group(['prefix'=>'logos','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[LogoController::class,'view'])->name('logos.view');
    Route::get('/add',[LogoController::class,'add'])->name('logos.add');
    Route::post('/store',[LogoController::class,'store'])->name('logos.store');
    Route::get('/edit/{id},',[LogoController::class,'edit'])->name('logos.edit');
    Route::post('/update/{id},',[LogoController::class,'update'])->name('logos.update');
    Route::post('/delete/{id},',[LogoController::class,'delete'])->name('logos.delete');



});
Route::group(['prefix'=>'sliders','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[SliderController::class,'view'])->name('sliders.view');
    Route::get('/add',[SliderController::class,'add'])->name('sliders.add');
    Route::post('/store',[SliderController::class,'store'])->name('sliders.store');
    Route::get('/edit/{id},',[SliderController::class,'edit'])->name('sliders.edit');
    Route::post('/update/{id},',[SliderController::class,'update'])->name('sliders.update');
    Route::post('/delete/{id},',[SliderController::class,'delete'])->name('sliders.delete');



});
//Etender
Route::group(['prefix'=>'etenders','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[EtenderController::class,'view'])->name('etenders.view');
    Route::get('/add',[EtenderController::class,'add'])->name('etenders.add');
    Route::post('/store',[EtenderController::class,'store'])->name('etenders.store');
    Route::get('/edit/{id},',[EtenderController::class,'edit'])->name('etenders.edit');
    Route::post('/update/{id},',[EtenderController::class,'update'])->name('etenders.update');
    Route::post('/delete/{id},',[EtenderController::class,'delete'])->name('etenders.delete');
    Route::post('/download',[EtenderController::class,'download'])->name('etenders.download');

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