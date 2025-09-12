<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\DocumentController as AdminDocumentController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Frontend\ProductController as FrontendProductController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PageController as FrontendPageController;
use App\Http\Controllers\Frontend\FaqController as FrontFaqController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\DocumentationController;
use App\Livewire\Auth\Login;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// ------------------------
// Frontend
// ------------------------
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

// Documentation
Route::get('/documentation', [DocumentationController::class, 'index'])->name('documentation.index');
Route::get('/documentation/{slug}', [DocumentationController::class, 'show'])->name('documentation.show');
Route::get('/documentation/{slug}/download', [DocumentationController::class, 'download'])->name('documentation.download');
Route::get('/documentation/type/{type}', [DocumentationController::class, 'byType'])->name('documentation.by-type');

// Pages statiques
Route::get('/qui-sommes-nous', fn() => view('frontend.pages.qui-sommes-nous'))->name('pages.qui-sommes-nous');
Route::get('/fibrociment', fn() => view('frontend.pages.fibrociment'))->name('pages.fibrociment');

// Page dynamique (toujours en dernier)
Route::get('/{slug}', [FrontendPageController::class, 'show'])->name('pages.show');

//-------------------------
// Login
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/login', Login::class)->name('login');
});


// ------------------------
// Admin
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::resource('products', AdminProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('pages', AdminPageController::class);
    Route::resource('faqs', AdminFaqController::class);
    Route::resource('documents', AdminDocumentController::class);
    Route::resource('contacts', AdminContactController::class);
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

// ------------------------
// Auth routes
// ------------------------
require __DIR__.'/auth.php';
