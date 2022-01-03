<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\regerrordisplay;
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

// Route::get('regerror', function () {
//     return view('welcome');
// });

Route::get('regerror',[regerrordisplay::class,'getshow']);
Route::post('regerror',[regerrordisplay::class,'postshow']);
