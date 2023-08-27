<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Description
Simple CRUD Admin Dashboard using The PHP framework paired with Filament. We've got to manage Users, Posts and Categories in this app.

## How to use

> Note :  You should have **composer** and **nodejs** installed on your machine first inorder to run this app.
- First run ```composer install``` then ```npm install``` to install all the packages.
- Rename the **.env.example** file to **.env** and configure your **database settings** and set your ```APP_URL``` according to your environement.
- Run the migrations using ```php artisan migrate```
- Create your admin account using ```php artisan make:filament-user```
- Make sure to link the storage in order to upload and view images use ```php artisan storage:link```

- Run ```php artisan serve``` to run the application on the PHP development server.