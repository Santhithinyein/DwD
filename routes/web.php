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
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\LocaleController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'normal'])->name('dashboard');

Route::get('/events', function () {
    $events = \App\Models\Event::all();
    return view('events.index', ['events' => $events]);
})->middleware(['auth', 'verified'])->name('events.index');

Route::get('/roles', function () {
    $users = User::all();
    return view('role', ['users' => $users]);
})->middleware(['auth', 'verified'])->name('role');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/events/create', [EventsController::class, 'create'])->name('events.create');
    Route::post('/events', [EventsController::class, 'store'])->name('events.store');
    Route::get('/events/{event}/edit', [EventsController::class, 'edit'])->name('events.edit');
    Route::put('/events/{event}', [EventsController::class, 'update'])->name('events.update');
    Route::delete('/events/{event}', [EventsController::class, 'destroy'])->name('events.destroy');
});


// Route::get('/events', function () {
//     return view('events.index');
// })->middleware(['auth', 'verified'])->name('events.index');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('finances', FinanceController::class);
});

// SuperAdmin Routes
Route::middleware(['auth', 'verified', 'superadmin'])->prefix('superadmin')->group(function () {
    Route::get('/', [SuperAdminController::class, 'index'])->name('superadmin');
    Route::get('/create', [SuperAdminController::class, 'create'])->name('superadmin.create');
    Route::post('/', [SuperAdminController::class, 'store'])->name('superadmin.store');
    Route::get('/{id}/edit', [SuperAdminController::class, 'edit'])->name('superadmin.edit');
    Route::put('/{id}', [SuperAdminController::class, 'update'])->name('superadmin.update');
    Route::delete('/{id}', [SuperAdminController::class, 'destroy'])->name('superadmin.destroy');
});

// Admin Routes
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin');
// Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified', 'admin'])->name('admin');


// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Monastery Routes

Route::get('/', [MonasteryController::class, 'index'])->name('monasteries.index');
Route::get('/monasteries/create', [MonasteryController::class, 'create'])->name('monasteries.create');
Route::post('/monasteries', [MonasteryController::class, 'store'])->name('monasteries.store');
Route::get('/monasteries/{monastery}/edit', [MonasteryController::class, 'edit'])->name('monasteries.edit');
Route::put('/monasteries/{monastery}', [MonasteryController::class, 'update'])->name('monasteries.update');
Route::delete('/monasteries/{monastery}', [MonasteryController::class, 'destroy'])->name('monasteries.destroy');

// // User Management Routes
// Route::get('/users', [UserController::class, 'index'])->name('users.index');
// Route::get('/users/export/', [UserController::class, 'export'])->name('users.export');

// // Mail Routes
// Route::post('/mail/{id}', [UserController::class, 'sendMail'])->name('mail');

// // Event Routes
// Route::post('/event', [/* Controller or Closure */])->name('event');

// // Doner Routes
// Route::get('/doners', [DonerController::class, 'index'])->name('doners');
// Route::post('/doners/search', [DonerController::class, 'index'])->name('doners.search');
// Route::post('/doners/filter', [DonerController::class, 'filter'])->name('doners.filter');
// Route::get('/doners/export/', [DonerController::class, 'export'])->name('doners.export');

Route::get('/users',[UserController::class,'index'])->name('users');
Route::get('users/export/', [UserController::class, 'export'])->name('users.export');
Route::post('/mail/{id}',[UserController::class,'sendMail'])->name('mail');
Route::post('/event',[])->name('event');

Route::get('/doners',[DonerController::class,'index'])->name('doners');
Route::get('/doners/search',[DonerController::class,'index'])->name('doners.index');
// Route::post('/doners/search',[DonerController::class,'index'])->name('doners.search');
// Route::post('/doners/filter',[DonerController::class,'filter'])->name('doners.filter');

Route::get('/doners/export/', [DonerController::class, 'export'])->name('doners.export');

require __DIR__.'/auth.php';

// Home Route
Route::get('/home', function () {
    return view('home');
})->name('home');

// Donation Routes
Route::get('/donate', [DonationController::class, 'index'])->name('donate');
Route::post('/donate', [DonationController::class, 'store'])->name('signup');

// Signin Routes
Route::get('/signin', [SigninController::class, 'index'])->name('signin');
Route::post('/cash', [SigninController::class, 'signinPost'])->name('signinPost');

// Cash Routes
Route::get('/cash', [CashController::class, 'index'])->name('cash');
Route::post('/cashpayment', [CashController::class, 'val'])->name('cashpay');

// Payment Routes
Route::get('/payments', [PaymentController::class, 'index'])->name('payment');

// Upload Routes
Route::get('/upload', [UploadController::class, 'index'])->name('upload');
Route::post('/photoupload', [UploadController::class, 'details'])->name('details');

// QR Payment Routes
Route::get('/qrpayment', [QRpaymentController::class, 'index'])->name('qrpay');

Route::get('/monastery',[MonasteryUserController::class,'show'])->name('userMonastery');
Route::get('/celebrated', [MonasteryUserController::class, 'celebrated'])->name('celebrated');
Route::get('/uncelebrated', [MonasteryUserController::class, 'uncelebrated'])->name('uncelebrated');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::post('/search',[MonasteryUserController::class,'search'])->name('search');
// Route::get('/monastery', [MonasteryUserController::class, 'show'])->name('refresh');

//User
// Route::get('/monastery_user', [MonasteryUserController::class, 'show'])->name('userMonastery');
// Route::get('/user_about', [AboutController::class, 'index'])->name('about');
