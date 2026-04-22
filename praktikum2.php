<?php
class Matematika {
    public static function kali($a, $b) {
        return $a * $b;
    }

    public static function bagi($a, $b) {
        if ($b == 0) return "Error: Pembagi nol";
        return $a / $b;
    }

    // Menambahkan method Tambah
    public static function tambah($a, $b) {
        return $a + $b;
    }

    // Menambahkan method Kurang
    public static function kurang($a, $b) {
        return $a - $b;
    }

    // Menambahkan fungsi Luas Persegi (sisi * sisi)
    public static function luasPersegi($sisi) {
        return $sisi * $sisi;
    }
}

// Logika untuk menangani input dari Form HTML
$hasil = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['angka1'];
    $n2 = $_POST['angka2'];
    $op = $_POST['operasi'];

    switch ($op) {
        case 'tambah': $hasil = Matematika::tambah($n1, $n2); break;
        case 'kurang': $hasil = Matematika::kurang($n1, $n2); break;
        case 'kali':   $hasil = Matematika::kali($n1, $n2); break;
        case 'bagi':   $hasil = Matematika::bagi($n1, $n2); break;
        case 'luas':   $hasil = Matematika::luasPersegi($n1); break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Static Method</title>
</head>
<body>
    <h2>Tugas Praktikum 2: Static Method</h2>
    
    <form method="post">
        <input type="number" name="angka1" placeholder="Angka 1 / Sisi" required>
        <input type="number" name="angka2" placeholder="Angka 2 (kosongkan jika luas)">
        
        <select name="operasi">
            <option value="tambah">Tambah (+)</option>
            <option value="kurang">Kurang (-)</option>
            <option value="kali">Kali (x)</option>
            <option value="bagi">Bagi (/)</option>
            <option value="luas">Luas Persegi</option>
        </select>
        
        <button type="submit">Hitung</button>
    </form>

    <?php if ($hasil !== ""): ?>
        <h3>Hasil: <?php echo $hasil; ?></h3>
    <?php endif; ?>

</body>
</html>