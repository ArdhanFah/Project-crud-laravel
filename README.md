<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## View Project
<p align="center"><img src="https://github.com/ArdhanFah/Project-crud-laravel/blob/main/public/fotoproduk/view.png" width="400px"></p>

## How To Deploy Project

<h3>In Windows</h3>

Hal yang perlu disiapkan
1. Xampp
2. composer
3. CLI (CMD, Power Shell or Git Bash)
4. Koneksi Internet

Cara Menjalankan Project
1. Download Source Code dari repo Github Project-crud-laravel dalam bentuk Zip.
2. Extract file zip (source code) ke dalam direktori htdocs pada XAMPP.
3. Melalui terminal, cd ke direktori Project-crud-laravel.
4. (Sesuai petunjuk installasi) Pada terminal, ketikkan perintah composer install (perlu koneksi internet).
5. Composer akan menginstall dependency paket dari source code tersebut hingga selesai.
6. Jalankan perintah php artisan, untuk menguji apakah perintah artisan Laravel bekerja.
7. Buat database baru (kosong) pada mysql (via phpmyadmin/cli) dengan nama project.
8. Duplikat file .env.example, lalu ganti nama menjadi .env.
9. Edit koneksi database di file .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD) seperti dibawah ini.
     <ul>
        <li>DB_CONNECTION=mysql</li>
        <li>DB_HOST=localhost</li>
        <li>DB_PORT=3306</li>
        <li>DB_DATABASE=project</li>
        <li>DB_USERNAME=root</li>
        <li>DB_PASSWORD=</li>
    </ul>
10. Jika hanya ingin membuat tabel, jalankan perintah php artisan migrate.
11. Setelah selesai, Jalankan perintah php artisan serve maka dapat diakses dengan http://localhost:8000/

