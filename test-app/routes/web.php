<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('pages.features-post');
// });
// Route::get('/dashboard-general-dashboard', function () {
//     return view('pages.dashboard-general-dashboard', ['type_menu' => 'dashboard']);
// });
// Route::get('/dashboard-ecommerce-dashboard', function () {
//     return view('pages.dashboard-ecommerce-dashboard', ['type_menu' => 'dashboard']);
// });
// Route::get('/features-post-create', function () {
//     return view('pages.features-post-create', ['type_menu' => 'features']);
// });
// Route::get('/features-post', function () {
//     return view('pages.features-post', ['type_menu' => 'features']);
// });

// Route::get('/', function () {
//     return view('pages.dashboard-general-dashboard');
// });

// Route::middleware(['auth'])->group(function () {
//     Route::get('home', function () {
//         return view('pages.dashboard-general-dashboard');
//     })->name('home');
//     Route::resource('user', UserController::class);
// });

Route::get('/features-post-create', function () {
    return view('pages.features-post-create', ['type_menu' => 'features']);
})->name('features-post-create');
Route::get('/features-post', function () {
    return view('pages.features-post', ['type_menu' => 'features']);
});

// Route::get('/login', function () {
//     return view('pages.auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('pages.auth.register');
// })->name('register');

// Route::get('/users', function () {
//     return view('pages.users.index');
// });

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard-general-dashboard');
    })->name('home');
    Route::resource('user', UserController::class);
});