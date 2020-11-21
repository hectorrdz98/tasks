<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\LoginController;

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

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('login', [LoginController::class, 'home'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('user.login');
Route::post('register', [LoginController::class, 'register'])->name('user.register');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::post('project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::get('project/{id}', [ProjectController::class, 'home'])->name('project.home');
    Route::post('project/{id}/updateTitle', [ProjectController::class, 'updateTitle'])->name('project.updateTitle');
    Route::post('project/{id}/updateColor', [ProjectController::class, 'updateColor'])->name('project.updateColor');
    Route::post('project/{id}/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::get('project/{id}/{taskId}', [TaskController::class, 'home'])->name('task.home');
});