<?php

// <<<<<<< Updated upstream
use App\Http\Controllers\AdminController;
// =======
use App\Http\Controllers\AboutController;
// >>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonasteryController;
use App\Http\Controllers\UserController;

// <<<<<<< Updated upstream
Route::get('/admin',[AdminController::class,'index'])->name('dashboard');
// =======
Route::get('/admin',function(){
    return view('admin.index');

})->name('dashboard');
// >>>>>>> Stashed changes


// Route::resource('monasteries', MonasteryController::class);


// web.php

use App\Http\Controllers\DonationController;
use App\Http\Controllers\MonasteryUserController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\CashController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UploadController;

// Route::get('/donation/create', [DonationController::class, 'create'])->name('donation.create');
// Route::get('/donation/monasteries', [DonationController::class, 'monasteries'])->name('donation.monasteries');
// Route::get('/donation/details/{id}', [DonationController::class, 'details'])->name('donation.details');
// Route::post('/donation/payment', [DonationController::class, 'payment'])->name('donation.payment');
// Route::get('/donation/kpay', [DonationController::class, 'kpay'])->name('donation.kpay');
// Route::get('/donation/wavepay', [DonationController::class, 'wavepay'])->name('donation.wavepay');
// Route::post('/donation/complete', [DonationController::class, 'complete'])->name('donation.complete');
// Route::post('/donation/finish', [DonationController::class, 'finish'])->name('donation.finish');



Route::get('/', [MonasteryController::class, 'index'])->name('monasteries.index');
Route::get('/monasteries/create', [MonasteryController::class, 'create'])->name('monasteries.create');
Route::post('/monasteries', [MonasteryController::class, 'store'])->name('monasteries.store');
Route::get('/monasteries/{monastery}/edit', [MonasteryController::class, 'edit'])->name('monasteries.edit');
Route::put('/monasteries/{monastery}', [MonasteryController::class, 'update'])->name('monasteries.update');
Route::delete('/monasteries/{monastery}', [MonasteryController::class, 'destroy'])->name('monasteries.destroy');

Route::get('/users',[UserController::class,'index'])->name('users');
Route::post('/mail/{id}',[UserController::class,'sendMail'])->name('mail');

// Route::post('/event',[])->name('event');

Route::get('/doners',[UserController::class,'show'])->name('doners');



// =============== user route ===============
// Route::get('/home')->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');
// <<<<<<< Updated upstream
Route::get('/donate',[DonationController::class,'index'])->name('donate');
Route::get('/monastery',[MonasteryUserController::class,'show'])->name('userMonastery');
Route::get('/celebrated', [MonasteryUserController::class, 'celebrated'])->name('celebrated');
Route::get('/uncelebrated', [MonasteryUserController::class, 'uncelebrated'])->name('uncelebrated');
Route::get('/about', [AboutController::class, 'index'])->name('about');
// =======

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
// Route::post('/signin', [SigninController::class, 'authenticate']);


// >>>>>>> Stashed changes



