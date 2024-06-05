<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/quemsomos', function () {
    return view('quemsomos');
});
Route::get('/contato', [ContactController::class, 'showForm']);
Route::post('/contato', [ContactController::class, 'submitForm']);