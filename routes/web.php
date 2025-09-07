<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController as FrontendPageController;
use App\Http\Controllers\Frontend\FaqController as FrontFaqController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

// Frontend
Route::get('/', [HomeController::class, 'index'])->name('home');

// Produits
Route::get('/produits', [FrontendProductController::class, 'index'])->name('products.index');
Route::get('/produits/{slug}', [FrontendProductController::class, 'show'])->name('products.show');
Route::get('/categories/{slug}', [FrontendProductController::class, 'byCategory'])->name('categories.show');

// Contact
Route::get('/contact', [FrontendContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [FrontendContactController::class, 'store'])->name('contact.store');
Route::get('/devis', [FrontendContactController::class, 'devis'])->name('contact.devis');
Route::post('/devis', [FrontendContactController::class, 'storeDevis'])->name('contact.store-devis');

// FAQ
Route::get('/faq', [FrontFaqController::class, 'index'])->name('faq.index');

// Pages statiques (doit être en dernier pour éviter les conflits)
Route::get('/{slug}', [FrontendPageController::class, 'show'])->name('pages.show');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('pages', AdminPageController::class);
    Route::resource('faqs', AdminFaqController::class);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

require __DIR__.'/auth.php';
