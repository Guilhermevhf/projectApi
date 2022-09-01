<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/ping', function(){
    return [ 'pong' => True ];
});

Route::post('/todo', [ApiController::class, 'createTodo']);
Route::get('/todos', [ApiController::class, 'readAllTodos']);
Route::get('/todo/{id}', [ApiController::class, 'readTodo']);
Route::post('/todo/{id}', [ApiController::class, 'updateTodo']);
Route::delete('/todo/{id}', [ApiController::class, 'deleteTodo']);