<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', [TodoController::class, 'index'])->name('index');
Route::get('todo/dashboard', [TodoController::class, 'dash'])->name('todo.dashboard');


Route::post('todo/store', [TodoController::class, 'store'])->name('todo.store');
Route::get('todo/show/{id}', [TodoController::class, 'show'])->name('todo.show');
Route::get('todo/{id}/update', [TodoController::class, 'update'])->name('todo.update');
Route::put('todo/up', [TodoController::class, 'up'])->name('todo.up');
Route::delete('todo/remove', [TodoController::class, 'remove'])->name('todo.remove');

Route::get('/contacts' ,[TodoController::class, 'Contacts'])->name('contacts');
Route::post('/contacts/send' ,[TodoController::class, 'send'])->name('contacts.send');
Route::get('aboutus',[TodoController::class, 'aboutus'])-> name('aboutus');





Auth::routes();

