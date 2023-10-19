<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdmonController;

Route::get('/admon',[AdmonController::class, 'index'])->name('admon.index');
Route::get('/admon/create', [AdmonController::class, 'create'])->name('admon.create');
Route::post('/admon/store',[AdmonController::class, 'store'])->name('admon.store');
Route::get('/admon/edit/{admon}', [AdmonController::class, 'edit'])->name('admon.edit');
Route::put('/admon/update/{admon}', [AdmonController::class, 'update'])->name('admon.update');
Route::get('/admon/show/{admon}', [AdmonController::class, 'show'])->name('admon.show');
Route::delete('/admon/destroy/{admon}', [AdmonController::class, 'destroy'])->name('admon.destroy');
