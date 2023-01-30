<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\DonateController;


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

Route::get('/', function () {
    return view('welcome');
});

 Route::get('/',[Pagescontroller::class, 'index']);
 Route::post('/search',[Pagescontroller::class, 'SearchData'])->name('search-data');
 Route::get('/about',[Pagescontroller::class,'about']);
 Route::get('/request',[Pagescontroller::class,'BloodRequest']);
 Route::get('/donate',[Pagescontroller::class,'donate']);
 Route::get('/donors',[Pagescontroller::class,'donors']);
 Route::get('/addRequest',[PagesController::class,'addRequest']);
 Route::post('/request-store', [PagesController::class, 'storeRequest'])->name('request');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// route for donatecontroller

Route::get('/donate',[DonateController::class,'donate']);
Route::post('/store',[DonateController::class,'store'])->name('my-form');

