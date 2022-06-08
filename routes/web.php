<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;

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



route::get('/', [Login::class,'halamanLogin'])->name('login');
route::post('/postLogin', [Login::class,'postLogin'])->name('postlogin');
route::get('/logout', [Login::class,'logout'])->name('logout');

route::group(['middleware' => ['auth']], function() {
    route::get('/dashboard', [Dashboard::class,'dashboard'])->name('dashboard');
});
