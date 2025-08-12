<?php

use Illuminate\Support\Facades\Route;
use 

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/todo', 'TodoController@index')->name('todo.index');
Route::get('/todos', [TodoController::class, 'index']);

Route::get('/edit',function() {
return view('pages.todo.edit');
})->name('todo.edit');
