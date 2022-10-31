<?php

/**
 * WAJIB !!!
 * 
 * selama berurusan dengan database MySQL harus include file connection.php
 */
include 'connection.php';

/**
 * TANGKAP ID DATA
 * ===============================
 * 
 * - ambil id berdasarkan parameter ?id= pada URL Browser
 * - menggunakan variabel global PHP yaitu $_GET
 * - ditampung kedalam satu variabel yang bernama id
 */
$id   = $_GET['id'];

/**
 * EKSEKUSI PERINTAH QUERY
 * =======================
 * 
 * - jalankan perintah query MySQL dengan fungsi bawaan PHP yaitu mysqli_query
 */
mysqli_query($conn, "DELETE FROM todo WHERE id='$id'") or die(mysqli_error($conn));

// /**
//  * REDIRECT WEB
//  * ============
//  * 
//  * - script untuk berpindah halaman ketika proses telah selesai
//  */
header("Location: index.php");
exit();
