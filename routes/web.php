<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
// namespace App\Http\Controllers\HomeController;



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

Route::get('/home', function () {
    return view('home_page');
});
// Route::get('/view', function () {
//     return view('view');
// });
Route::post('/save', 'HomeController@saveData'); 
Route::get('/view', 'HomeController@getData');
Route::get('/edit/{id}', 'HomeController@editData'); 
Route::put('/update/{id}', 'HomeController@updateData');
Route::get('/delete/{id}', 'HomeController@deleteData');