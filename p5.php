<?php

// Class utama
class Buku {
    public function caraAkses(): string {
        return "Akses umum";
    }
}

// Class Buku Fisik
class BukuFisik extends Buku {
    public function caraAkses(): string {
        return "Buku fisik dibaca langsung di perpustakaan";
    }
}

// Class Buku Digital
class BukuDigital extends Buku {
    public function caraAkses(): string {
        return "Buku digital dibaca melalui aplikasi";
    }
}

// Membuat objek
$bukuFisik = new BukuFisik();
$bukuDigital = new BukuDigital();

// Menampilkan hasil
echo "<h2>Praktikum 1 - Inheritance & Overriding</h2>";

echo "Buku Fisik: " . $bukuFisik->caraAkses();
echo "<br>";
echo "Buku Digital: " . $bukuDigital->caraAkses();

?>