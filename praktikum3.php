<?php

class Produk {
    // Properti static untuk menghitung total semua produk yang dibuat
    public static $jumlahProduk = 0;

    public function tambahProduk() {
        self::$jumlahProduk++;
    }
}

class Transaksi {
    // Final method: tidak bisa diubah oleh class lain yang mencoba meng-extend class ini
    final public function prosesTransaksi($namaProduk, $hargaProduk) {
        echo "Transaksi diproses";
    }
}
$p1 = new Produk();
$p1->tambahProduk();
echo "Total Produk: " . Produk::$jumlahProduk;
?>