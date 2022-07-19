<?php

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
Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::get('/single/{id}',[App\Http\Controllers\HomeController::class,'show'])->name('single');

Route::middleware('auth')->group(function(){
    Route::get('/addvideo',[App\Http\Controllers\VideoController::class,'create'])->name('video');
    Route::post('/addvideo',[App\Http\Controllers\VideoController::class,'store'])->name('video');
    Route::post('/comment',[App\Http\Controllers\CommentController::class,'store'])->name('comment');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
