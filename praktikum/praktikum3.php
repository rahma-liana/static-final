<?php

class Produk {
    // Properti static untuk menghitung total semua produk yang dibuat
    public static $jumlahProduk = 0;
    
    // Properti biasa (instance property) untuk tiap barang
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function tambahProduk() {
        self::$jumlahProduk++;
    }
}

class Transaksi {
    // Final method: tidak bisa diubah oleh class lain yang mencoba meng-extend class ini
    final public function prosesTransaksi($namaProduk, $hargaProduk) {
        echo "--- Simulasi Transaksi --- <br>";
        echo "Membeli Produk: " . $namaProduk . "<br>";
        echo "Harga: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
        echo "Status: <b>Berhasil Diproses</b><br><br>";
    }
}

// 1. Buat minimal 3 produk
$p1 = new Produk("Laptop Asus", 15000000);
$p1->tambahProduk();

$p2 = new Produk("Mouse Gaming", 500000);
$p2->tambahProduk();

$p3 = new Produk("Keyboard Mechanical", 1200000);
$p3->tambahProduk();

// 2. Tampilkan total produk (menggunakan static variable)
echo "Total Jenis Produk di Sistem: " . Produk::$jumlahProduk . "<br><br>";

// 3. Simulasi Transaksi (menggunakan final method)
$beli = new Transaksi();
$beli->prosesTransaksi($p1->nama, $p1->harga);
$beli->prosesTransaksi($p3->nama, $p3->harga);

?>