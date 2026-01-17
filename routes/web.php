<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get("/register", function () {
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

Route::get("/dashboard", function () {
    return view("dashboard");
})->name("dashboard");

// Sales Rep - Contacts page
Route::get("/sales-rep-contacts", function () {
    return view("sales-rep.sales-rep-contacts");
})->name("sales-rep-contacts");

// Admin - Sales Rep Management
Route::get("/admin-sales-rep", function () {
    return view("admin.admin-sales-rep");
})->name("admin-sales-rep");
