<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

// Route::get('/', function () {
//     return view('home', ['idade' => 17], ['frutas' => ['banana', 'maçã', 'laranja']]);
// });

Route::get('/alunos', [AlunoController::class, 'index']);

