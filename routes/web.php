<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/itemDetails', function () {
    return view('itemDetails');
});

Route::get('/secondpage', function () {
    return view('secondpage');
});

Route::get('/checkout', function () {
    return view('checkout');
})->middleware(['auth', 'verified'])->name('checkout');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/connection', function () {
    return view('connection');
});

Route::get('/thank_you_page', function () {
    return view('thank_you_page');
});

Route::get('/search', function () {
    return view('search');
});

Route::get('/admindash', function () {
    return view('admindash');
});


Route::get('/completed', function () {
    return view('completed');
});

Route::get('/inventory', function () {
    return view('inventory');
});
Route::get('/navigation', function () {
    return view('navigation');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/admintable', function () {
    return view('admintable');
});

Route::get('/menutable/get_items', function () {
    return view('menutable');
});

Route::get('/orderhistory', function () {
    return view('orderhistory');
});

Route::get('/menulist', function () {
    return view('menulist');
});

Route::get('/calendar', function () {
    return view('calendar');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::post('/checkout', function () {
    // Checkout logic here
    return "Proceeding with checkout...";
})->middleware('checkout.auth')->name('checkout');

Route::get('/chat', function () {
    return view('chat');
})->middleware(['auth', 'verified'])->name('chat');

Route::get('/customers', function () {
    return view('customers');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
