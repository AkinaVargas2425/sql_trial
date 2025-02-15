<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\Miggy;
use App\Http\Controllers\CrudController;

    /*
    Route::get('/', function () {
    return view('welcome');
    });

    */


    Route::get('/', [SampleController::class, 'index'])->name('sofhia');

    Route::get('/love', [Miggy::class, 'love'])->name('miggy');

    Route::get('/home', [CrudController::class, 'home'])->name('home');

    Route::get('/create', [CrudController::class, 'create'])->name('create');

    Route::post('/create', [CrudController::class, 'store'])->name('store');

    Route::delete('/delete/{id}', [CrudController::class, 'destroy'])->name('destroy');

    Route::get('/edit/{id}', [CrudController::class, 'edit'])->name('edit');

    Route::get('/dashboard', [CrudController::class, 'task'])->name('task');

    Route::put('/update/{id}', [CrudController::class, 'update'])->name('update');