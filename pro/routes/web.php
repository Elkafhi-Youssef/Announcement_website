<?php

use App\Http\Controllers\OfferController;
use App\Http\Controllers\DemandeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/create-offer', [OfferController::class,'create'])->name('create-offer');


Route::get('/',[OfferController::class,'home'])->name('home');
Route::get('/search',[OfferController::class,'search'])->name('offers.search');
Route::get('/dashboard',[OfferController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::resource('offers', OfferController::class);
Route::resource('demandes', demandeController::class);





require __DIR__.'/auth.php';
