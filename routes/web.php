<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Sitemap
Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');

// Homepage
Route::get('/', HomeController::class)->name('home');

// Quote
Route::get('/get-a-quote', [QuoteController::class, 'create'])->name('quote.create');
Route::post('/get-a-quote', [QuoteController::class, 'store'])->middleware('throttle:5,1')->name('quote.store');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');

// Areas
Route::get('/areas', [AreaController::class, 'index'])->name('areas.index');
Route::get('/areas/{area}', [AreaController::class, 'show'])->name('areas.show');

// Routes (Moving Corridors)
Route::get('/routes', [RouteController::class, 'index'])->name('routes.index');
Route::get('/routes/{route}', [RouteController::class, 'show'])->name('routes.show');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');

// Static Pages
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about/licensed-insured', [PageController::class, 'licensedInsured'])->name('about.licensed-insured');
Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms-of-service', [PageController::class, 'terms'])->name('terms');
Route::get('/site-map', [PageController::class, 'siteMap'])->name('site-map');

// French routes
Route::prefix('fr')->name('fr.')->group(function () {
    Route::get('/', fn () => view('pages.fr.home'))->name('home');
    Route::get('/soumission', fn () => view('pages.fr.quote'))->name('quote');
    Route::get('/services', fn () => view('pages.fr.services'))->name('services');
    Route::get('/a-propos', fn () => view('pages.fr.about'))->name('about');
});
