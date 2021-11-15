<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test1115Controller;
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

Route::get('/', [Test1115Controller::class, 'top'])->name('top');
Route::get('/thanks', [Test1115Controller::class, 'thanks'])->name('thanks');
