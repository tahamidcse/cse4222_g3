<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
//Route::get('books', function () {
  //  return view('welcome');
//});
Route::get('books',[BookController::class,'index']);
