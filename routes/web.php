<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend as FrontendController;
use App\Http\Controllers\Backend as BackendController;

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

Route::controller(FrontendController\PageController::class)->group(function() {
    Route::get('', 'home')->name('home');
    Route::get('about-us', 'aboutUs')->name('about-us');
    Route::get('our-services', 'ourServices')->name('our-services');
    Route::get('faqs', 'faqs')->name('faqs');
    Route::get('blogs', 'blogs')->name('blogs');
    Route::get('blogs-single', 'blogsSingle')->name('blogs-single');
    Route::get('contact-us', 'contactUs')->name('contact-us');
    Route::get('track', 'trackPackage')->name('track');
    Route::get('register', 'register')->name('register');
});

Route::controller(FrontendController\AuthController::class)->group(function() {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'signIn');
    Route::post('register', 'register');
});

Route::middleware(['auth', 'user-access:user'])->group(function() {
    Route::post('logout', [ FrontendController\AuthController::class, 'logout' ]);
    Route::controller(FrontendController\PageController::class)->group(function() {
        Route::get('dashboard', 'dashboard')->name('dashboard');
    });
});

Route::prefix('admin')->group(function() {
    Route::get('login', [ BackendController\AuthController::class, 'login' ]);
    Route::post('login', [ BackendController\AuthController::class, 'signIn' ]);
    Route::middleware(['auth', 'user-access:admin'])->group(function() {
        Route::post('logout', [ BackendController\AuthController::class, 'logout' ]);
        Route::resource('dashboard', BackendController\DashboardController::class);
    });
});