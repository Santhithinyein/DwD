<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DonerController;
use App\Http\Controllers\MonasteryController;
use App\Http\Controllers\MonasteryUserController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QRpaymentController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/dashboard',[AdminController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

});
Route::get('/', [MonasteryController::class, 'index'])->name('monasteries.index');
Route::get('/monasteries/create', [MonasteryController::class, 'create'])->name('monasteries.create');
Route::post('/monasteries', [MonasteryController::class, 'store'])->name('monasteries.store');
Route::get('/monasteries/{monastery}/edit', [MonasteryController::class, 'edit'])->name('monasteries.edit');
Route::put('/monasteries/{monastery}', [MonasteryController::class, 'update'])->name('monasteries.update');
Route::delete('/monasteries/{monastery}', [MonasteryController::class, 'destroy'])->name('monasteries.destroy');

Route::get('/users',[UserController::class,'index'])->name('users');
Route::get('users/export/', [UserController::class, 'export'])->name('users.export');

Route::post('/mail/{id}',[UserController::class,'sendMail'])->name('mail');

Route::post('/event',[])->name('event');

Route::get('/doners',[DonerController::class,'index'])->name('doners');
Route::post('/doners/search',[DonerController::class,'index'])->name('doners.search');
Route::post('/doners/filter',[DonerController::class,'filter'])->name('doners.filter');

Route::get('/doners/export/', [DonerController::class, 'export'])->name('doners.export');


require __DIR__.'/auth.php';

//user
Route::get('/home', function () {
    return view('home');
})->name('home');

// Route::get('/donate',[DonationController::class,'index'])->name('donate');
Route::get('/monastery',[MonasteryUserController::class,'show'])->name('userMonastery');
Route::get('/celebrated', [MonasteryUserController::class, 'celebrated'])->name('celebrated');
Route::get('/uncelebrated', [MonasteryUserController::class, 'uncelebrated'])->name('uncelebrated');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::post('/search',[MonasteryUserController::class,'search'])->name('search');


// Route::get('/monastery',[MonasteryUserController::class,'index'])->name('userMonastery');
Route::get('/donate',[DonationController::class,'index'])->name('donate');
Route::post('/donate',[DonationController::class,'store'])->name('signup');
Route::get('/signin',[SigninController::class,'index'])->name('signin');
Route::post('/cash', [SigninController::class, 'signinPost'])->name('signinPost');
Route::get('/cash', [CashController::class, 'index'])->name('cash');
Route::post('/cashpayment', [CashController::class, 'val'])->name('cashpay');
Route::get('/payments',[PaymentController::class,'index'])->name('payment');
// Route::post('/upload',[PaymentController::class,'uploadpay'])->name('uploadpay');
Route::get('/upload',[UploadController::class,'index'])->name('upload');
// Route::get('/photoupload',[UploadController::class,'index'])->name('message');
Route::post('/photoupload',[UploadController::class,'details'])->name('details');
Route::get('/qrpayment',[QRpaymentController::class,'index'])->name('qrpay');

