<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

// Route::get('/contacts', [ContactController::class, 'index']);
// Route::post('/contacts', [ContactController::class, 'store']);

Route::prefix('contacts')
    ->controller(ContactController::class)
    ->group(function() {
        Route::get('/', 'index')->name('contacts.index');
        Route::post('/', 'store')->name('contacts.store');
    });

Route::get('/', function () {
    return view('welcome');
});
