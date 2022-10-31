<?php

/**
 * Membuat Variabel Konfigurasi PHP ke Database MySQL
 * ==================================================
 * 
 * umumnya harus tersedia 4 variabel utama yaitu (1) host, (2) username, (3) password, (4)database
 */
$host     = 'localhost';
$username = 'root';
$password = '';
$database = 'belajar_native';

/**
 * Variabel untuk menampung proses koneksi ke Database
 * =====================================================
 * 
 * - umumnya nama variabel berupa (conn, koneksi, connection, dll)
 * - gunakan function mysqli_connect() dengan parameter 4 variabel konfigurasi sebelumnya
 * - function mysqli_connect() itu adalah fungsi bawaan dari bahasa pemrograman PHP 
 * - function mysqli_connect() itu bertugas untuk menjalin komunikasi antara PHP dan MySQL
 */
$conn = mysqli_connect($host, $username, $password, $database);

/**
 * (OPTIONAL) CEK KONEKSI
 * ======================
 * 
 * menggunakan if-else untuk melakukan pengecekan terhadap varibel koneksi sebelumnya
 * jika telah berhasil silakan berikan komentar pada code di bawah ini
 */
// if ($conn) {
//     echo 'Koneksi database telah Berhasil';
// }
