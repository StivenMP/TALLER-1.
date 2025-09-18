<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index')-> name ('home');
Route::view('/catalogo', 'catalogo')-> name ('catalog');
Route::view('/form', 'form')-> name ('creator');