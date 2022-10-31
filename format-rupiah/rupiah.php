<?php

/**
 * FUNCTION FORMAT RUPIAH
 * =========================
 * 
 * - memiliki hanya 1 parameter yaitu: (1) menangkap nominal yang akan diubah
 */
function rupiah($nominal)
{
    $hasil = number_format($nominal, 0, ',', '.');
    return 'Rp. ' . $hasil . ',-';
}

/**
 * TANGKAP SEMUA INPUTAN DARI FORM
 * ===============================
 * 
 * - dimasukkan masing-masing kedalam setiap variabel
 * - umumnya ada 2 metode request HTTP yaitu POST dan GET
 * - karena pada file index.php menggunakan metode POST maka harus menggunakan variabel global PHP yaitu $_POST[]
 * - harus disesuaikan isi array dari $_POST['{ATTRIBUTE NAME PADA FORM INPUT}']
 */
$nominal = $_POST['nominal'];

/**
 * CETAK HASIL
 * ===========
 * 
 * - sebagai contoh dapat pula disisipkan tag html <h1> agar hasil dapat terlihat dengan jelas
 */
echo '<h1>Besaran Uang: ' . rupiah($nominal) . '</h1>';
