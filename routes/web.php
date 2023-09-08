<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ExamController;

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
    return view('register1');
});
Route::post('newtask',[ExamController::class,'store']); // PSR4


Route::get('newtask', function () {
    return view('newtask');
});
// Route::get('user_list', [UserController::class,'index']); // PSR4
//  Route::post('/', [UserController::class,'create']); // PSR4
// Route::post('register', [LikeController::class,'store']); // PSR4
// Route::get('/index', [UserController::class,'index']); // PSR4
// Route::get('/user_views/{id}', [UserController::class,'show']); // PSR4
// Route::get('/user_edit/{id}', [UserController::class,'edit']); // PSR4
// Route::post('/update_data',[UserController::class,'update']); // PSR4
// Route::get('/delet/{id}',[UserController::class,'destroy']); // PSR4
// Route::get('exam',[ExamController::class,'create']); // PSR4



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/testmail',function(){
// 	return view('test');
// } );
// Route::get('/sendMail', [App\Http\Controllers\HomeController::class, 'sendMail']);