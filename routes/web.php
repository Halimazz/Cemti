<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\PageController;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', ('PageController@index'));
// Route::get('/home', ('PageController@home'));
Route::get('/', [PageController::class, 'index']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/vision', [PageController::class, 'vision']);
Route::get('/strategy', [PageController::class, 'strategy']);
Route::get('/organization', [PageController::class, 'organization']);
Route::get('/target', [PageController::class, 'target']);
Route::get('/cluster-medical-rehabilitation', [PageController::class, 'clusterMedicalRehabilitation']);
Route::get('/cluster-medical-image-processing', [PageController::class, 'clusterMedicalImageProcessing']);
Route::get('/capstone', [PageController::class, 'capstone']);
Route::get('/research-drant', [PageController::class, 'researchDrant']);
Route::get('/facilities', [PageController::class, 'facilities']);
Route::get('/servieces-education', [PageController::class, 'serviecesEducation']);
Route::get('/servieces-product', [PageController::class, 'serviecesProduct']);
Route::get('/servieces-sales', [PageController::class, 'serviecesSales']);
Route::get('/servieces-consulting', [PageController::class, 'serviecesConsulting']);
Route::get('/products-commercil', [PageController::class, 'productsCommercil']);
Route::get('/event', [PageController::class, 'event']);
Route::get('/news', [PageController::class, 'news']);
//login
Route::get('login', [AuthController::class, 'login']);
Route::post('loginProses', [AuthController:: class, 'loginProses']);
//logout
Route::get('logout', [AuthController::class,'logout']);

//login_auth
Route::middleware(['login'])->group(function (){
    Route::middleware(['super_admin'])->group(function (){
        Route::resource('/dashboard-post', DashboardPostController::class);
        Route::resource('/dashboard-account', AccountController::class);


    });
    Route::middleware(['admin'])->group(function (){
        Route::resource('/dashboard-post', DashboardPostController::class);
    });
    Route::middleware(['mitra'])->group(function (){
        
    });





});

