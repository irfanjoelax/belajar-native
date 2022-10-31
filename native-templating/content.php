<?php

/**
 * CONTENT CONTROLLER
 * ==================
 * 
 * - script yang dibuat dengan conditional statement PHP yang memanfaatkan HTTP Request Metode GET
 * - berfungsi untuk mengatur template atau layout dari suatu web agar mudah dikustomisasi
 */

/**
 * - jadi hal yang pertama dilakukan adalah mengambil link parameter pada URL Browser
 * - Lakukan pengecekan apakah parameter view pada URL Browser ditemukan atau tidak
 * - disimpan kedalam satu variabel (boleh nama bebas). sebagai contoh nama variabel adalah view
 * - apabila variabel view dari HTTP Request Metode GET tidak ditemukan maka otomatis isi variabel view = home
 * - jika ditemukan maka variabel view adalah berdasarkan link parametet pada URL Browser
 */
if (isset($_GET['view'])) {
    $view = $_GET['view'];
} else {
    $view = "home";
}


/**
 * - untuk setiap value atau nilai dari variabel view yang ditangkap dilakukan pengecekan
 * - untuk disesuaikan dengan file view mana yang akan ditampilkan 
 * - sebagai contoh jika variabel view bernilai (=) home maka file pada folder view/home.php yang akan ditampilkan
 */
if ($view == "home") {
    include("view/home.php");
}

if ($view == "feature") {
    include("view/feature.php");
}

if ($view == "pricing") {
    include("view/pricing.php");
}

if ($view == "disabled") {
    include("view/disabled.php");
}
