<?php

/**
 * FUNCTION KONVERSI TANGGAL
 * =========================
 * 
 * - memiliki 2 parameter yaitu: (1) menangkap tanggal dari inputan, (2) mengaktifkan nama hari
 */
function tanggal($tgl, $tampil_hari = false)
{
    $nama_hari = array(
        "Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"
    );

    $nama_bulan = array(
        1 => "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    );

    $tanggal    = substr($tgl, 8, 2);
    $bulan      = $nama_bulan[(int) substr($tgl, 5, 2)];
    $tahun      = substr($tgl, 0, 4);
    $text       = "";

    if ($tampil_hari) {
        $urutan_hari = date('w', mktime(0, 0, 0, substr($tgl, 5, 2), $tanggal, $tahun));
        $hari = $nama_hari[$urutan_hari];
        $text .= $hari . ", ";
    }

    $text .= $tanggal . " " . $bulan . " " . $tahun;
    return $text;
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
$date = $_POST['date'];

/**
 * CETAK HASIL
 * ===========
 * 
 * - sebagai contoh dapat pula disisipkan tag html <h1> agar hasil dapat terlihat dengan jelas
 */
echo '<h1>Tanggal: ' . tanggal($date) . '</h1>';
echo '<h1>Hari & Tanggal: ' . tanggal($date, true) . '</h1>';
