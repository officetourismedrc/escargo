<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestController;

use App\Http\Controllers\ActuController;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

// my route ========================


Route::get('test-dev', [TestController::class, 'add'])->name('route.test');

Route::get('article/{id}/{slug?}', [ActuController::class, 'show'])->name('article.route');
Route::get('articles/{slug?}', [ActuController::class, 'showAll'])->name('articles.route');
Route::get('pages-pages/{id}/{slug?}', [PagesController::class, 'show'])->name('page.route');
Route::get('pages/{id}/{slug?}', [PagesController::class, 'showSub'])->name('page.sub.route');


// my route ==========================

require __DIR__.'/auth.php';
