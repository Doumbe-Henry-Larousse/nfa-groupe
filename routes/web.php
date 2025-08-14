<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\NewsletterController;
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

Route::get('/', function(){
    return view('base'); // Retour a la page d'acceuil
})->name('home');

//Route::get('/devis', function () {
//    return view('pages.devis');
//})->name('demander.devis');

Route::get('/reserverservice', function () {
    return view('pages.reserverservice');
})->name('reserverservice');

Route::get('/nettoyageresidentiel', function () {
    return view('pages.nettoyageresidentiel');
})->name('nettoyageresidentiel');

Route::get('/nettoyagecommercial', function () {
    return view('pages.nettoyagecommercial');
})->name('nettoyagecommercial');

Route::get('/aidepersonne', function () {
    return view('pages.aidepersonne');
})->name('aidepersonne');

Route::get('/servicespecialise', function () {
    return view('pages.servicespecialise');
})->name('servicespecialise');




Route::get('/contact', [ContactController::class, 'show'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::get('/devis', [DevisController::class, 'show'])->name('demander.devis');
Route::post('/devis', [DevisController::class, 'submit'])->name('devis.submit');


Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/newsletter', function(){
    return redirect('/');
});