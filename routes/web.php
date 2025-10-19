<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\Auth\Login;
use App\Livewire\Admin\Dashboard;
use App\Http\Middleware\AdminMiddleware;

//normal routes for non admin users 
Route::get('/', HomePage::class);
Route::get('/login', Login::class);

//admin route w middleware for sefty
Route::get('/admin/dashboard', Dashboard::class)
    ->middleware(['auth', AdminMiddleware::class])
    ->name('admin.dashboard');


