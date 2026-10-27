<?php

class Buku {
    public $judul;
    public $pengarang;
    public $tahun;

    public function tampilkanInfo() {
        echo "Judul: " . $this->judul . "<br>";
        echo "Pengarang: " . $this->pengarang . "<br>";
        echo "Tahun: " . $this->tahun . "<br>";
    }
}

class Anggota {
    public $nama;
    public $nim;
    public $alamat;

    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Alamat: " . $this->alamat . "<br>";
    }
}

class Peminjaman {
    public $buku;
    public $anggota;
    public $tanggalPinjam;

    public function tampilkanInfo() {
        echo "Buku: " . $this->buku . "<br>";
        echo "Nama Anggota: " . $this->anggota . "<br>";
        echo "Tanggal Pinjam: " . $this->tanggalPinjam . "<br>";
    }
}

$buku = new Buku();
$buku->judul = "horror";
$buku->pengarang = "dede";
$buku->tahun = 2024;

$anggota = new Anggota();
$anggota->nama = "dede";
$anggota->nim = "666";
$anggota->alamat = "dps";

$peminjaman = new Peminjaman();
$peminjaman->buku = $buku->judul;
$peminjaman->anggota = $anggota->nama;
$peminjaman->tanggalPinjam = "24-10-2026";

echo "<h3>Data Buku</h3>";
$buku->tampilkanInfo();

echo "<hr>";

echo "<h3>Data Anggota</h3>";
$anggota->tampilkanInfo();

echo "<hr>";

echo "<h3>Data Peminjaman</h3>";
$peminjaman->tampilkanInfo();

?>