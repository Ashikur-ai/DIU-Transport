<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\FrontEnd;
use App\Http\Controllers\FrontEnd\pageShowing;
use App\Http\Controllers\Backend\showPage;
use App\Http\Controllers\Backend\SuperAdminController;
use App\Http\Controllers\Booking;
use App\Http\Controllers\CustomerController;
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


//Frontend PageShowing
Route::get('/driver', [pageShowing::class, 'showDriverPage'])->name('showDriverPage');
Route::get('/', [pageShowing::class, 'showIndex'])->name('showIndex');
Route::get('/schedule', [pageShowing::class, 'showSchedulePage'])->name('showSchedulePage');
Route::get('/onlineTicket', [pageShowing::class, 'showOnlineTicketPage'])->name('showOnlineTicketPage');

//Frontend function

//login
Route::get('/login', [pageShowing::class, 'showUserLoginPage'])->name('showUserLoginPage');
Route::post('/customer-login', [CustomerController::class, 'login'])->name('customer-login');

Route::get('/history', [pageShowing::class, 'purchaseHistory'])->name('history');


//logout
Route::get('/logout_customer', [CustomerController::class, 'logout'])->name('logout_customer');


Route::get('/register', [pageShowing::class, 'showUserRegisterPage'])->name('showUserRegisterPage');
Route::post('/customer-register', [CustomerController::class, 'registration'])->name('customer-register');

Route::post('/user-dashboard', [pageShowing::class, 'showUserDashboardPage'])->name('showUserDashboardPage');

//booking ticket
Route::post('/booking', [Booking::class, 'Booking'])->name('Booking');

//monthly subscribe
Route::post('/monthly_subscribe', [CustomerController::class, 'monthly_subscribe'])->name('monthly-subscribe');

//Backend PageShowing
Route::get('/admin', [showPage::class, 'showAdminLoginPage'])->name('showAdminLoginPage');
Route::get('/dashboard', [SuperAdminController::class, 'showDashboardPage'])->name('showDashboardPage');

//Backend Function
Route::get('/logout', [SuperAdminController::class, 'logout'])->name('logout');
Route::get('/subscription', [SuperAdminController::class, 'subscription'])->name('subscription');
Route::post('/admin-dashboard', [showPage::class, 'show_DashboardPage'])->name('show_DashboardPage');

Route::get('/checkOrders', [showPage::class, 'checkOrders'])->name('checkOrders');


