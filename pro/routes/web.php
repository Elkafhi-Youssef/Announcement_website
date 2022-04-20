<?php

use App\Http\Controllers\OfferController;
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

// Route::post('/create-offer', [OfferController::class,'create'])->name('create-offer');


Route::get('/',[OfferController::class,'home'])->name('home');
Route::get('/dashboard',[OfferController::class,'index'])->middleware(['auth'])->name('dashboard');

// Route::controller(OfferController::class)->group(function () {
//     Route::get('/dashboard',[OfferController::class,'index'])->middleware(['auth'])->name('offer.index');
//     Route::get('/offer/create', 'create')->name('offer.create');
//     Route::post('/user/store', 'store')->name('user.store');
//     Route::get('/user/{user}', 'show')->name('user.show');
//     Route::get('/user/{user}/edit', 'edit')->name('user.edit');
//     Route::put('/user/{user}/update', 'update')->name('user.update');
//     Route::delete('/user/{user}/delete', 'delete')->name('user.delete');
// });
// Route::get('/offer/{$id}/edit',[OfferController::class,'edit'] );
Route::resource('offers', OfferController::class);




require __DIR__.'/auth.php';
