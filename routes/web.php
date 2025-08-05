<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todo',function(){
return view('pages.todo.index');
})->name('todo.index');

Route::get('/edit',function() {
return view('pages.todo.edit');
})->name('todo.edit');
