<?php

use App\Http\Controllers\TestMyController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});


//Route::get('/welcome',[TestsController::class,'index'])->name('tests.index');
Route::get('/mypage',[TestMyController::class,'index'])->name('tests.mypage');
