<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/add-employee', function () {
    return view('AddEmployee');
});

//Route::post('/add-employee', [\App\Http\Controllers\EmployeeController::class,'store']);

Route::post('/add-employee', [\App\Http\Controllers\EmployeeController::class,'store2']);
