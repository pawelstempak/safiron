<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\OffertypesController;
use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/log', [LogController::class, 'show'])->name('showlogs');
Route::get('/log/{id}', [LogController::class, 'showitem'])->name('showitem');

Route::get('/investment', function () {
    return view('frontend.investment');
});
Route::get('/location', function () {
    return view('frontend.location');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::post('/contact', [ContactController::class, 'send'])->name('sendcontact');

Route::get('/step', function () {
    return view('step');
});


Route::get('/search', [SearchController::class, 'show'])->name('show');
Route::post('/search', [SearchController::class, 'search'])->name('search');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', [ApartmentsController::class, 'dashboard'])->name('dashboard');

    Route::get('/buildings', [BuildingsController::class, 'show'])->name('buildings');
    Route::get('/buildings/delete/{id}', [BuildingsController::class, 'delete']);
    Route::get('/buildings/edit/{id}', [BuildingsController::class, 'edit']);
    Route::post('/buildings/edit/{id}', [BuildingsController::class, 'save']);
    Route::get('/buildings/add', function () {
        return view('add-buildings');
    });
    Route::post('/buildings/add', [BuildingsController::class, 'save_add_form']);

    Route::get('/blog', [BlogController::class, 'show'])->name('blog');
    Route::get('/blog/add', function () {
        return view('addblog');
    });
    Route::post('/blog/add', [BlogController::class, 'store']);
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit']);
    Route::post('/blog/edit/{id}', [BlogController::class, 'update']);
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete']);

    Route::get('/status', [StatusController::class, 'show'])->name('status');
    Route::get('/status/delete/{id}', [StatusController::class, 'delete']);
    Route::get('/status/edit/{id}', [StatusController::class, 'edit']);
    Route::post('/status/edit/{id}', [StatusController::class, 'save']);
    Route::get('/status/add', function () {
        return view('add-status');
    });
    Route::post('/status/add', [StatusController::class, 'save_add_form']);

    Route::get('/offertypes', [OffertypesController::class, 'show'])->name('offertypes');
    Route::get('/offertypes/delete/{id}', [OffertypesController::class, 'delete']);
    Route::get('/offertypes/edit/{id}', [OffertypesController::class, 'edit']);
    Route::post('/offertypes/edit/{id}', [OffertypesController::class, 'save']);
    Route::get('/offertypes/add', function () {
        return view('add-offertypes');
    });
    Route::post('/offertypes/add', [OffertypesController::class, 'save_add_form']);

    Route::get('/apartments', [ApartmentsController::class, 'show'])->name('apartments');
    Route::get('/apartments/delete/{id}', [ApartmentsController::class, 'delete']);
    Route::get('/apartments/deletecard/{id}', [ApartmentsController::class, 'deletecard']);
    Route::get('/apartments/{id}/status/{sid}', [ApartmentsController::class, 'changeStatus']);
    Route::get('/apartments/edit/{id}', [ApartmentsController::class, 'edit']);
    Route::post('/apartments/edit/{id}', [ApartmentsController::class, 'save']);
    Route::get('/apartments/add', [ApartmentsController::class, 'add_form']);
    Route::post('/apartments/add', [ApartmentsController::class, 'save_add_form']);
    Route::get('/apartments/addspace/{id}', [ApartmentsController::class, 'addspace_form']);
    Route::post('/apartments/addspace/{id}', [ApartmentsController::class, 'save_addspace_form']);
    Route::get('/apartments/{id}/spacedelete/{sid}', [ApartmentsController::class, 'spacedelete']);

    Route::get('/{table}/delete/{id}', [ApartmentsController::class, 'deleteImage']);
});
