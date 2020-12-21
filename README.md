<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Laravel-todo-app

This is the basic to-do app with authentication created as a part of tutorial for beginners to understand and learn laravel concepts Laravel Tutorial for beginner

Now I hope you already installed composer in your system(your local computer or server)

Now clone this app by running this command => git clone https://github.com/parthp1808/Laravel-todo-app.git Or you can simply download zip file and unzip it.

Now go inside the folder and using console, run composer by executing => composer install Now run using cmd => cp .env.example .env Now edit .env file :

## Replace below lines

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

## With this

DB_CONNECTION=sqlite
Now go to database folder and create a new file named database.sqlite (see the extension, it should be .sqlite not .txt)

Now atlast, run => php artisan migrate
