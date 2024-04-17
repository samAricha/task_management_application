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

Route::get('/', function () {
    return view('welcome');
});

// returns  a page with all tasks
Route::get('/',[TaskController::class .'index'])->name('tasks.index');
// returns the form for adding a task
Route::get('/tasks/create',[TaskController::class, 'create'])->name('tasks.create');
// adds a task to the database
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
// returns a page that shows a full task
Route::get('/tasks/{task}', [TaskController::class, 'show'])->name('tasks.show');
// returns the form for editing a task
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
// updates a task
Route::put('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');
// deletes a task
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
