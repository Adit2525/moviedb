<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Middleware\RoleAdmin;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MovieController::class, 'homepage']);

Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.detail');

Route::get('/create-movie', [MovieController::class, 'create']);

Route::post('/create-movie', [MovieController::class, 'store']);

Route::get('/login',[AuthController::class,'LoginForm'] ) -> name('login');

Route::post('/login',[AuthController::class,'login']);

Route::post('/logout',[AuthController::class,'logout']);

Route::get('/edit-movie/{id}', [MovieController::class, 'edit'])->middleware('auth', RoleAdmin::class);

Route::put('/update-movie/{id}', [MovieController::class, 'update'])->middleware('auth', RoleAdmin::class);

Route::delete('/delete-movie/{id}', [MovieController::class, 'destroy'])->middleware('auth', RoleAdmin::class);

