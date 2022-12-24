<?php
// Nama Database
$database_name = "data_siswa.db";

// Koneksi ke database
$db = new SQLite3($database_name);

// Memebuat database jika database tersebut belum ada 
$query = "CREATE TABLE IF NOT EXISTS data_siswa (nama TEXT, mtk INTEGER, bind INTEGER, bing INTEGER, rata FLOAT)";
$db->exec($query);
