<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonasteryController;


Route::get('/admin',function(){
    return view('admin.index');
    
});


// Route::resource('monasteries', MonasteryController::class);

Route::get('/', [MonasteryController::class, 'index'])->name('monasteries.index');
Route::get('/monasteries/create', [MonasteryController::class, 'create'])->name('monasteries.create');
Route::post('/monasteries', [MonasteryController::class, 'store'])->name('monasteries.store');
Route::get('/monasteries/{monastery}/edit', [MonasteryController::class, 'edit'])->name('monasteries.edit');
Route::put('/monasteries/{monastery}', [MonasteryController::class, 'update'])->name('monasteries.update');
Route::delete('/monasteries/{monastery}', [MonasteryController::class, 'destroy'])->name('monasteries.destroy');



