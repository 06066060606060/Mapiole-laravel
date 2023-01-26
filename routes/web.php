<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\SocialiteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(GlobalController::class)->group(function () {
    // Route::get('/', 'getAll')->name('getAll')->middleware('App\Http\Middleware\MyMiddleware');
    Route::get('/', 'getAll')->name('getAll');
    Route::get('logout', 'logout');
    Route::get('location-bien-immobilier-cameroun', 'rent');
    Route::get('location-bien-immobilier-cameroun/filter', 'rent')->name('searchfilterloc');
    Route::get('achat-bien-immobilier-cameroun', 'buy');
    Route::get('achat-bien-immobilier-cameroun/filter', 'buy')->name('searchfilterbuy');
    Route::get('construire', 'build');
    Route::get('vendre-bien-immobilier-cameroun', 'sell');
    Route::get('services', 'service');
    Route::get('annonce_locations', 'annonce');
    Route::get('annonce_ventes', 'vente');
    Route::get('annonce_verifiee', 'annonce_verifiee');
    Route::get('profil_verifiee', 'profil_verifiee');
});

Route::get('legal', [GlobalController::class, 'getLegal']);
Route::get('confidentialite', [GlobalController::class, 'getConf']);
Route::get('oneblog', [GlobalController::class, 'oneBlog']);
Route::post('order', [GlobalController::class, 'setOrder'])->name('setOrder');
Route::get('order', [GlobalController::class, 'getProfil'])->name('getProfil');
Route::post('confirm_order', [GlobalController::class, 'confirmOrder'])->name('confirmOrder');
// Route::get('order', [GlobalController::class, 'getOrder'])->name('getOrder');
Route::post('delete_order', [GlobalController::class, 'deleteOrder'])->name('deleteOrder');
Route::post('save_address', [GlobalController::class, 'saveAddress'])->name('saveAddress');
Route::post('deleteuser/{id}', [GlobalController::class, 'deleteUser'])->name('deleteUser');

// La redirection vers le provider
Route::get("redirect/{provider}", [SocialiteController::class, 'redirect'])->name('socialite.redirect');

// Le callback du provider
Route::get("callback/{provider}", [SocialiteController::class, 'callback'])->name('socialite.callback');

Route::get('poster-annonce', function () {
    return view('post');
});
//simple view
Route::get('blog', function () {
    return view('blog');
});

Route::get('professionnel', function () {
    return view('pro');
});

Route::get('company', function () {
    return view('company');
});
Route::get('community', function () {
    return view('community');
});
Route::get('career', function () {
    return view('career');
});

Route::get('faq', function () {
    return view('faq');
});
Route::get('cgu', function () {
    return view('cgu');
});
Route::get('cgv', function () {
    return view('cgv');
});
Route::get('avocat', function () {
    return view('avocat');
});


//languages
Route::post('changelocale',  [GlobalController::class, 'changeLocale']);
