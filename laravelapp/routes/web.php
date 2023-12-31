<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ReserveController;
use App\Models\Reserve;
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
//ホームページ
Route::get('/', function () {
    return view('home');
});

// Route::get('/menu', function () {
//     return view('/menu');
// });
//メニュー
Route::get('/course', [CourseController::class, 'index']);



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
Route::get('reserve/del','ReserveController@delete');
Route::post('reserve/del','ReserveController@remove');

//予約内容表示
Route::get('/reserve/index', [ReserveController::class, 'index'])->middleware('auth');

//予約
Route::get('reserve/add', 'App\Http\Controllers\ReserveController@add');
Route::post('reserve/add', 'App\Http\Controllers\ReserveController@create');
//予約削除
Route::get('reserve/del', 'App\Http\Controllers\ReserveController@delete');
Route::post('reserve/del', 'App\Http\Controllers\ReserveController@remove');

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


