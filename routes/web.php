<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::post('/contacts/submit',
    [\App\Http\Controllers\ContactsController::class, 'submit']
)->name('contacts-form');

Route::get('/contacts/all',
    [\App\Http\Controllers\ContactsController::class, 'allData']
)->name('contacts-data');

Route::get('/contacts/all/{id}',
    [\App\Http\Controllers\ContactsController::class, 'showOneMessage']
)->name('contacts-one-message');

Route::get('/contacts/all/{id}/update',
    [\App\Http\Controllers\ContactsController::class, 'updateMessage']
)->name('contacts-update');

Route::post('/contacts/all/{id}/update',
    [\App\Http\Controllers\ContactsController::class, 'updateMessageSubmit']
)->name('contacts-update-submit');

Route::get('/contacts/all/{id}/delete',
    [\App\Http\Controllers\ContactsController::class, 'deleteMessage']
)->name('contacts-delete');

