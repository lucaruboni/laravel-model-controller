<?php
namespace App\Http\Controllers\Guest;  //se non lo scrive da solo va scritto a mano altrimenti non trova PageController
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;//anche questo se non viene compilato va scritto a mano

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
//invece di view() richiamo PageControll
Route::get('/', [PageController::class, 'index'])->name('home'); 

Route::get('/films', [PageController::class, 'movies'])->name('films');


