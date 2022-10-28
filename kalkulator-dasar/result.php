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
$angka_1 = $_POST['angka_1'];
$angka_2 = $_POST['angka_2'];

/**
 * TOMBOL YANG DIKLIK: TAMBAH
 * ==========================
 * 
 * - menggunakan operator artimatika yaitu (+)
 * - dan ditampung kedalam satu variabel hasil
 */
if (isset($_POST['tambah'])) {
    $hasil = $angka_1 + $angka_2;
}

/**
 * TOMBOL YANG DIKLIK: KURANG
 * ==========================
 * 
 * - menggunakan operator artimatika yaitu (-)
 * - dan ditampung kedalam satu variabel hasil
 */
if (isset($_POST['kurang'])) {
    $hasil = $angka_1 - $angka_2;
}

/**
 * TOMBOL YANG DIKLIK: PERKALIAN
 * =============================
 * 
 * - menggunakan operator artimatika yaitu (*)
 * - dan ditampung kedalam satu variabel hasil
 */
if (isset($_POST['kali'])) {
    $hasil = $angka_1 * $angka_2;
}

/**
 * TOMBOL YANG DIKLIK: PEMBAGIAN
 * =============================
 * 
 * - menggunakan operator artimatika yaitu (/)
 * - dan ditampung kedalam satu variabel hasil
 */
if (isset($_POST['bagi'])) {
    $hasil = $angka_1 / $angka_2;
}

/**
 * CETAK HASIL
 * ===========
 * 
 * - sebagai contoh dapat pula disisipkan tag html <h1> agar hasil dapat terlihat dengan jelas
 */
echo '<h1>Hasilnya adalah: ' . $hasil . '</h1>';
