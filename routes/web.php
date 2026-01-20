<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SalesRepContactController;
use App\Http\Controllers\AdminClientController;

Route::get("/", function () {
    return view("auth.register");
})->name("register");

Route::post("/register", function () {
    return redirect()->route("login");
});

Route::get("/login", function () {
    return view("auth.login");
})->name("login");

Route::post("/login", function () {
    return redirect()->route("dashboard");
});

Route::post("/logout", function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route("login");
})->name("logout");

Route::get("/sales-rep-dashboard", function () {
    return view("sales-rep.sales-rep-dashboard");
})->name("sales-rep-dashboard");

// Sales Rep - Contacts page
Route::get('/sales-rep-contacts', [SalesRepContactController::class, 'index'])
    ->name('sales-rep-contacts');

Route::post('/sales-rep-contacts', [SalesRepContactController::class, 'store'])
    ->name('sales-rep-contacts.store');
Route::put('/sales-rep-contacts/{contact}', [SalesRepContactController::class, 'update'])
    ->name('sales-rep-contacts.update');

// Admin - Sales Rep Management
Route::get("/admin-sales-rep", function () {
    return view("admin.admin-sales-rep");
})->name("admin-sales-rep");

// Admin - Client Management
Route::get('/admin-client', [AdminClientController::class, 'index'])
    ->name('admin-client');

Route::post('/admin-client', [AdminClientController::class, 'store'])
    ->name('admin-client.store');

Route::delete('/admin-client/{contact}', [AdminClientController::class, 'destroy'])
    ->name('admin-client.destroy');

Route::put('/admin-client/{contact}', [AdminClientController::class, 'update'])
    ->name('admin-client.update');
