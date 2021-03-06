<?php

use App\Http\Controllers\ContactUsFormController;
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
    return view('welcome');
})->name('welcome');

Route::get('/website', function () {
    return view('websites.website');
})->name('website');

Route::get('/viewticket', function () {
    return view('websites.viewticket');
})->name('viewticket');
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

/**************************************************************************************************** */
Route::post('/createreplayuser', [App\Http\Controllers\TicketController::class, 'createreplayuser'])->name('createreplayuser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ticket/create', [App\Http\Controllers\TicketController::class, 'create'])->name('ticket');
Route::post('ticket/store', [App\Http\Controllers\TicketController::class, 'store'])->name('ticket.store');
Route::get('tickets/{ticket_id}', [App\Http\Controllers\TicketController::class, 'show'])->name('ticket.show');

Route::get('/admin', [App\Http\Controllers\admin\AdminController::class, 'index'])->middleware('is_admin');

/********************************************************************** */
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
Route::prefix('ticket')->middleware(['is_admin', 'auth'])->group(function () {

    Route::get('/New/{id?}', [App\Http\Controllers\MangmentTiket::class, 'NewTicket'])->name('NewTicket');
    Route::get('/Suspended', [App\Http\Controllers\MangmentTiket::class, 'SuspendedTicket'])->name('SuspendedTicket');
    Route::put('/{ticket}', [App\Http\Controllers\MangmentTiket::class, 'tosuspended1'])->name('ticket.suspended');

    Route::get('/addreplytoticket/{id}', [App\Http\Controllers\MangmentTiket::class, 'addreplytoticket'])->name('addreplytoticket');

    Route::post('/createreplay', [App\Http\Controllers\MangmentTiket::class, 'createreplay'])->name('createreplay');

    Route::get('/findteckit/{id}', [App\Http\Controllers\MangmentTiket::class, 'search'])->name('findteckit');
    Route::get('/add', [App\Http\Controllers\MangmentTiket::class, 'client_create_ticket'])->name('clientaddticket');
    Route::post('/c_create', [App\Http\Controllers\MangmentTiket::class, 'store'])->name('clientsaveticket');

    Route::get('/{ticket}', [App\Http\Controllers\MangmentTiket::class, 'ticketcancel'])->name('ticket.cancel');

});
/*********************Ivoice in Dashboard************************* */
Route::prefix('invoice')->middleware(['is_admin', 'auth'])->group(function () {
    Route::get('/showinviose', [App\Http\Controllers\MangmentInvoice::class, 'showinviose'])->name('showinviose');

    Route::get('/{ticket}', [App\Http\Controllers\MangmentInvoice::class, 'addinvoice'])->name('ticket.addinvoice');

    Route::put('update/{ticket}', [App\Http\Controllers\MangmentInvoice::class, 'updateinvoice'])->name('invoice.update');

    Route::put('/{id}', [App\Http\Controllers\MangmentInvoice::class, 'ticket_ok'])->name('ticket.ok');


});
/*****************editprofile**************************** */
Route::prefix('profile')->middleware(['is_admin', 'auth'])->group(function () {

    Route::get('/edit', [App\Http\Controllers\ProfileController::class, 'editprofile'])->name('show.profile');
    Route::put('/update', [App\Http\Controllers\ProfileController::class, 'updataprofile'])->name('update.profile');
});
/*****************UserdashboardController*************************** */
Route::prefix('user')->middleware(['is_admin', 'auth'])->group(function () {

    Route::get('/index', [App\Http\Controllers\UserdashboardController::class, 'index'])->name('user.index');
    Route::delete('/{id}/delete', [App\Http\Controllers\UserdashboardController::class, 'destroy'])->name('user.delete');
});

/************************************************** */
Route::prefix('invoice')->middleware(['is_admin', 'auth'])->group(function () {
    Route::get('/notification/{id}', [App\Http\Controllers\NotifactionController::class, 'read'])->name('read.notifation');



});
/************************************************** */
/************************************************** */
/************************************************** */
Route::get('/{page}', [App\Http\Controllers\admin\AdminController::class, 'index2']);
