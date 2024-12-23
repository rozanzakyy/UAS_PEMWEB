# UAS_PEMWEB
Website: Form Input dan Data Tabel

Deskripsi

Website ini adalah sebuah aplikasi berbasis web sederhana yang memungkinkan pengguna untuk memasukkan data melalui formulir input, seperti nama, email, gender, dan persetujuan syarat. Data yang dimasukkan akan ditampilkan dalam bentuk tabel di bawah formulir. Website ini cocok digunakan sebagai proyek pembelajaran untuk memahami dasar-dasar pengembangan aplikasi web, termasuk HTML, CSS, JavaScript, dan PHP/MySQL.

Fitur Utama

Formulir Input: Form untuk menginputkan nama, email, gender, dan persetujuan syarat.

Tabel Data: Menampilkan data yang telah dimasukkan oleh pengguna.

Validasi Formulir: Validasi data input di sisi klien menggunakan JavaScript.

Pengelolaan Data: Data disimpan di database MySQL menggunakan PHP.

Desain Responsif: Desain yang mendukung tampilan di berbagai perangkat (desktop, tablet, dan ponsel).

Teknologi yang Digunakan

Frontend:

HTML

CSS

Bootstrap

JavaScript

Backend:

PHP

MySQL

Server:

XAMPP (Apache & MySQL)

Instalasi dan Konfigurasi

Persyaratan Sistem:

XAMPP atau server lain yang mendukung PHP dan MySQL

Browser modern (Google Chrome, Mozilla Firefox, dll.)

Langkah Instalasi:

Clone atau unduh repository ini.

Tempatkan folder project di dalam direktori htdocs (jika menggunakan XAMPP).

Impor file database uas_pemweb.sql ke MySQL menggunakan phpMyAdmin.

Pastikan file config.php dikonfigurasi dengan benar untuk koneksi ke database Anda:

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uas_pemweb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

Menjalankan Website:

Buka browser dan akses http://localhost/uas_pemweb/.

Struktur Direktori

project-folder/
|-- assets/
|   |-- css/
|   |   `-- style.css
|   |-- js/
|       `-- script.js
|-- includes/
|   `-- config.php
|-- index.php
|-- README.md
|-- uas_pemweb.sql

Penggunaan

Masukkan data pada formulir input di halaman utama.

Klik tombol "Submit" untuk menyimpan data ke tabel.

Data akan ditampilkan di tabel di bawah formulir.

Troubleshooting

Jika database tidak terhubung, pastikan:

Server MySQL sudah berjalan.

Konfigurasi di file config.php sudah sesuai dengan pengaturan server Anda.

Jika CSS atau JavaScript tidak berfungsi, pastikan path file pada tag <link> dan <script> benar.

Lisensi

Proyek ini dibuat untuk keperluan pembelajaran dan bersifat open-source. Anda bebas memodifikasi dan menggunakan kode ini dengan menyebutkan kredit kepada pengembang asli.

Dibuat oleh: Rozan Zaky
Tanggal: 23 Desember 2024

