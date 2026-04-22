<?php

class Pengunjung {
    // Properti static untuk menyimpan jumlah pengunjung secara global di level class
    public static $jumlah = 0;

    public function __construct() {
        // Setiap kali objek dibuat, tambahkan nilai jumlah
        self::$jumlah++;
    }
}

// 1. Membuat 5 objek pengunjung (sesuai instruksi: "Ubah jumlah objek menjadi 5")
$p1 = new Pengunjung();
$p2 = new Pengunjung();
$p3 = new Pengunjung();


echo "Jumlah Pengunjung: " . Pengunjung::$jumlah . "<br>";

?>