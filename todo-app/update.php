<?php

/**
 * WAJIB !!!
 * 
 * selama berurusan dengan database MySQL harus include file connection.php
 */
include 'connection.php';

/**
 * TANGKAP SEMUA INPUTAN DARI FORM
 * ===============================
 * 
 * - dimasukkan masing-masing kedalam setiap variabel
 * - umumnya ada 2 metode request HTTP yaitu POST dan GET
 * - karena pada file index.php menggunakan metode POST maka harus menggunakan variabel global PHP yaitu $_POST[]
 * - harus disesuaikan isi array dari $_POST['{ATTRIBUTE NAME PADA FORM INPUT}']
 */
$id   = $_POST['id'];
$task = $_POST['task'];

/**
 * EKSEKUSI PERINTAH QUERY
 * =======================
 * 
 * - jalankan perintah query MySQL dengan fungsi bawaan PHP yaitu mysqli_query
 */
mysqli_query($conn, "UPDATE todo SET task='$task' WHERE id='$id'") or die(mysqli_error($conn));

// /**
//  * REDIRECT WEB
//  * ============
//  * 
//  * - script untuk berpindah halaman ketika proses telah selesai
//  */
header("Location: index.php");
exit();
