<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Project Setup Guide

This README explains how to set up and run this Laravel project locally using **Laragon**.

---

## Requirements

Make sure the following are installed on your system:

- Laragon (includes PHP, MySQL, and Apache)
- Composer
- Node.js & npm (Tailwind CSS is used in this project)

---

## Installation

Navigate into the project directory and install dependencies.

### PHP dependencies
composer install

### Frontend dependencies
npm i

---

## Application Key

Generate the Laravel application key:

php artisan key:generate

---

## Environment Setup

Now make sure your `.env` file is properly set up.

If it does not exist yet, create it by copying the example file:

cp .env.example .env

Update the database configuration to match Laragon’s default settings:

DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=your_database_name  
DB_USERNAME=root  
DB_PASSWORD=

Make sure the database exists in **phpMyAdmin** or Laragon before continuing.

---

## Database Migration

Run the migrations to set up the database tables:

php artisan migrate

---

## Running the Project

Start the Laravel development server:

php artisan serve

In a separate terminal, start the frontend build tool:

npm run dev

---

## Accessing the App

Open your browser and visit:

http://127.0.0.1:8000

---

## Notes

- Make sure **Laragon is running** before starting the project.
- Ensure MySQL is enabled and the database exists.
- If you encounter PHP or Composer issues, check Laragon’s PHP version.

---
