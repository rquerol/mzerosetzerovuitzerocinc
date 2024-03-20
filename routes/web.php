<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CicleController;
use App\Http\Controllers\SaluduController;

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
    return view('index');
});

Route::get('/login', [App\Http\Controllers\UsuariController::class, 'showlogin'])->name('login');
Route::post('/login', [App\Http\Controllers\UsuariController::class, 'login']);
Route::get('/logout', [App\Http\Controllers\UsuariController::class, 'logout']);
Route::post('/salud', [App\Http\Controllers\SaluduController::class, 'init']);

Route::resource('/cicle', CicleController::class);

// Route::get('cicle', [App\Http\Controllers\CicleController::class, 'index']);
// Route::post('cicle', [App\Http\Controllers\CicleController::class, 'store']);
// Route::get('cicle/create', [App\Http\Controllers\CicleController::class, 'create']);
// Route::get('cicle/{cicle}', [App\Http\Controllers\CicleController::class, 'show']);
// Route::put('cicle/{cicle}', [App\Http\Controllers\CicleController::class, 'update']);
// Route::delete('cicle/{cicle}', [App\Http\Controllers\CicleController::class, 'destroy']);
// Route::get('cicle/{cicle}/edit', [App\Http\Controllers\CicleController::class, 'edit']);

Route::middleware(['auth'])->group(function () {
    Route::get('/saludu', function () {
        $user = Auth::user();
        return view('saludu', compact('user'));
    });
});
