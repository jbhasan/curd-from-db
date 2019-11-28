<?php

/*
|--------------------------------------------------------------------------
| Crud Generator Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::resource('/company', 'App\Http\Controllers\CompanyController');
Route::resource('/odel=company', 'App\Http\Controllers\Odel=companyController');