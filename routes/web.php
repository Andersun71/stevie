<?php

namespace App\Livewire;

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\DeleteUserForm;
use App\Livewire\Settings\ReviewUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('service', 'service')
    ->middleware(['auth', 'verified'])
    ->name('service');

Route::view('product', 'product')
    ->middleware(['auth', 'verified'])
    ->name('product');

Route::get('/product/{id}', DetailProduct::class)->name('product.show');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/review-user', ReviewUser::class)->name('settings.review-user');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    Route::get('settings/delete-user-form', DeleteUserForm::class)->name('settings.delete-user-form');
});

require __DIR__.'/auth.php';
