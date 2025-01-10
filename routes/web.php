<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotificationController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index'])->name('user.index');
// Route::get('/screener/crypto/{symbol}', [HomeController::class, 'show'])->name('screener.show');
// Route::get('/calender', [HomeController::class, 'calender'])->name('user.calender');

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth'])->name('dashboard');

Route::get('/maintainance/active', [HomeController::class, 'maintainance'])->name('maintainance.mode');
Route::get('/m/md', [HomeController::class, 'maintainanceToggle'])->name('maintainance.toggle');

Route::post('/fetch', [NotificationController::class, 'sendNotification']);

Route::middleware(['auth', 'maintainance'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('user.index');
    Route::get('/screener/crypto/{symbol}', [HomeController::class, 'show'])->name('screener.show');
    Route::get('/calender', [HomeController::class, 'calender'])->name('user.calender');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
