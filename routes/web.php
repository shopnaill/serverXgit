<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/projects', [App\Http\Controllers\ProjectController::class, 'index'])->name('projects');
Route::get('/project/{id}', [App\Http\Controllers\ProjectController::class, 'view'])->name('view');
Route::get('/deploy_project/{id}', [App\Http\Controllers\ProjectController::class, 'deploy_project'])->name('deploy_project');
