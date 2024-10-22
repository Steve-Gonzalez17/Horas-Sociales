<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;
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



Auth::routes();
// Route::get('/', function () {
//     return view('index');
// })->middleware('auth');
Route::get('/', function () {
    return view('index');
});
Route::get('/admin', function () {
    $users = User::all(); // Obtiene todos los usuarios
    return view('admin/AdminPanel', ['users' => $users, 'currentUser' => Auth::user()]);
});

Route::post('/user/store', [UserController::class, 'store'])->name('store.user'); // Registrar usuario
Route::put('/user/update', [UserController::class, 'update'])->name('update.user'); // Actualizar usuario
Route::delete('/user/delete/{id}', [UserController::class, 'destroy'])->name('delete.user'); // Eliminar usuario

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');