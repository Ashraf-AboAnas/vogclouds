<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsFormController;


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
    return view('welcome');
})->name('welcome');


Route::get('/website', function () {
    return view('websites.website');
})->name('website');

Route::get('/e-commece', function () {
    return view('websites.ecommerce');
})->name('ecommerce');

Route::get('/bussiness', function () {
    return view('websites.bussiness');
})->name('bussiness');

Route::get('/design_programme', function () {
    return view('websites.design_programme');
})->name('design_programme');

Route::get('/app', function () {
    return view('websites.app');
})->name('app');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ticket/create', [App\Http\Controllers\TicketController::class, 'create'])->name('ticket');
Route::post('ticket/store', [App\Http\Controllers\TicketController::class, 'store'])->name('ticket.store');
Route::get('tickets/{ticket_id}', [App\Http\Controllers\TicketController::class, 'show'])->name('ticket.show');

Route::get('/admin', [App\Http\Controllers\admin\AdminController::class, 'index'])->middleware('is_admin');

Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('home');
 // return 'ddfxg';
})->name('dashboard');



/*Route::get('/contact', [ContactUsFormController::class, 'createForm']);*/

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});


/***************** Ticket In Dshboard ********************** */
Route::prefix('ticket')->middleware(['is_admin','auth'])->group(function () {

    Route::get('/New', [App\Http\Controllers\MangmentTiket::class, 'NewTicket'])->name('NewTicket');
    Route::get('/Suspended', [App\Http\Controllers\MangmentTiket::class, 'SuspendedTicket'])->name('SuspendedTicket');
    Route::put('/{tiket}', [App\Http\Controllers\MangmentTiket::class,'tosuspended'])->name('tiket.suspended');

    Route::get('/addreplytoticket/{id}', [App\Http\Controllers\MangmentTiket::class, 'addreplytoticket'])->name('addreplytoticket');
});
/*********************Ivoice in Dashboard************************* */
Route::prefix('invoice')->middleware(['is_admin','auth'])->group(function () {

    Route::get('/New', [App\Http\Controllers\MangmentInvoice::class, 'Newinvoice'])->name('Newinvoice');

});
/************************************************** */
/************************************************** */
/************************************************** */
/************************************************** */
/************************************************** */
/************************************************** */
Route::get('/{page}', [App\Http\Controllers\admin\AdminController::class, 'index2']);
