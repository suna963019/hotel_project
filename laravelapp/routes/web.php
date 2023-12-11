<?php

use App\Http\Controllers\AuthController;
//Authのデフォルト用
// use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\returnSelf;

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
    return view('top');
});

Route::get('/menu', function () {
    return view('/menu');
});


//予約
Route::get('reserve/add', 'App\Http\Controllers\ReserveController@add');
Route::post('reserve/add', 'App\Http\Controllers\ReserveController@create');

//新規登録
Route::get('/register',[AuthController::class,'register']);
Route::post('/register',[AuthController::class,'create']);
//ログイン
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'check']);
//ログアウト
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth');
//会員情報表示
Route::get('/acount',[AuthController::class,'index'])->middleware('auth');
//会員情報変更
Route::get('/acountedit',[AuthController::class,'edit'])->middleware('auth');
Route::post('/acountedit',[AuthController::class,'change'])->middleware('auth');
//会員情報削除
Route::get('/acountdelete',[AuthController::class,'delete'])->middleware('auth');
Route::post('/acountdelete',[AuthController::class,'clear'])->middleware('auth');


//以下Authのデフォルト
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


