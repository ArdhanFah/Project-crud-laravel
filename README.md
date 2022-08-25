
## About Project

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
11. Setelah selesai, Jalankan perintah php artisan serve maka dapat diakses dengan http://localhost:8000/produk/

<h3>In Linux</h3>

soon :)

