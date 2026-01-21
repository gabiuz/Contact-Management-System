<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SalesRepContactController;
use App\Http\Controllers\AdminClientController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminSalesRepController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SalesRepDashboardController;

Route::get("/", function () {
    return view("auth.register");
})->name("register");

Route::post("/register", [RegisterController::class, 'store'])
    ->name("register.store");


Route::get("/login", [LoginController::class, 'show'])->name("login");
Route::post("/login", [LoginController::class, 'store'])->name("login.store");

Route::post("/logout", [LoginController::class, 'logout'])->name("logout");


Route::get('/sales-rep-dashboard', [SalesRepDashboardController::class, 'index'])
    ->name('sales-rep-dashboard');

// Sales Rep - Contacts page
Route::get('/sales-rep-contacts', [SalesRepContactController::class, 'index'])
    ->name('sales-rep-contacts');

Route::post('/sales-rep-contacts', [SalesRepContactController::class, 'store'])
    ->name('sales-rep-contacts.store');
Route::put('/sales-rep-contacts/{contact}', [SalesRepContactController::class, 'update'])
    ->name('sales-rep-contacts.update');

// Admin - Dashboard
Route::get('/admin-dashboard', [AdminDashboardController::class, 'index'])
    ->name('admin-dashboard');

// Admin - Sales Rep Management
Route::get('/admin-sales-rep', [AdminSalesRepController::class, 'index'])
    ->name('admin-sales-rep');

Route::put('/admin-sales-rep/{representative}', [AdminSalesRepController::class, 'update'])
    ->name('admin-sales-rep.update');

Route::delete('/admin-sales-rep/{representative}', [AdminSalesRepController::class, 'destroy'])
    ->name('admin-sales-rep.destroy');

// Admin - Client Management
Route::get('/admin-client', [AdminClientController::class, 'index'])
    ->name('admin-client');

Route::post('/admin-client', [AdminClientController::class, 'store'])
    ->name('admin-client.store');

Route::delete('/admin-client/{contact}', [AdminClientController::class, 'destroy'])
    ->name('admin-client.destroy');

Route::put('/admin-client/{contact}', [AdminClientController::class, 'update'])
    ->name('admin-client.update');
