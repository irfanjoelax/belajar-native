<?php

/**
 * TANGKAP SEMUA INPUTAN DARI FORM
 * ===============================
 * 
 * - dimasukkan masing-masing kedalam setiap variabel
 * - umumnya ada 2 metode request HTTP yaitu POST dan GET
 * - karena pada file index.php menggunakan metode POST maka harus menggunakan variabel global PHP yaitu $_POST[]
 * - harus disesuaikan isi array dari $_POST['{ATTRIBUTE NAME PADA FORM INPUT}']
 */
$text = $_POST['text'];

/**
 * TOMBOL YANG DIKLIK: md5
 * ==========================
 * 
 * - Fungsi bawaan dari bahasa pemrograman PHP
 * - untuk enkripsi password yang paling sering digunakan pada PHP Native
 */
if (isset($_POST['md5'])) {
    $hasil = md5($text);
}

/**
 * TOMBOL YANG DIKLIK: sha1
 * ==========================
 * 
 * - Fungsi bawaan dari bahasa pemrograman PHP
 * - untuk enkripsi password yang paling sering digunakan pada PHP Native setelah md5
 */
if (isset($_POST['sha1'])) {
    $hasil = sha1($text);
}

/**
 * TOMBOL YANG DIKLIK: hash
 * =============================
 * 
 * - Fungsi bawaan dari bahasa pemrograman PHP
 * - memiliki 2 parameter utama yaitu: algoritma yang digunakan dan text yg ingin dienkripsi
 */
if (isset($_POST['hash'])) {
    $hasil = hash('ripemd160', $text);
}

/**
 * TOMBOL YANG DIKLIK: password_hash
 * =============================
 * 
 * - Fungsi bawaan dari bahasa pemrograman PHP
 * - memiliki 2 parameter utama yaitu: text yg ingin dienkripsi serta algoritma yang digunakan
 */
if (isset($_POST['password_hash'])) {
    $hasil = password_hash($text, PASSWORD_DEFAULT);
}

/**
 * CETAK HASIL
 * ===========
 * 
 * - sebagai contoh dapat pula disisipkan tag html <h1> agar hasil dapat terlihat dengan jelas
 */
echo '<h1>Hasil Enkripsi: ' . $hasil . '</h1>';
