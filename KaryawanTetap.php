<?php
// KaryawanTetap.php

require_once 'Karyawan.php'; // Memastikan class induk dimuat

class KaryawanTetap extends Karyawan {
    // Properti tambahan spesifik Karyawan Tetap
    private $tunjanganKesehatan;
    private $opsiSahamId;

    public function __construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, $tunjangan, $opsiSaham) {
        // Mengirimkan data global ke constructor milik parent class (Karyawan)
        parent::__construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, 'Tetap');
        $this->tunjanganKesehatan = $tunjangan;
        $this->opsiSahamId = $opsiSaham;
    }

    // Perhitungan gaji: (Hari Kerja x Gaji Harian) + Tunjangan Kesehatan
    public function hitung_gaji_bersih() {
        return ($this->hari_kerja_masuk * $this->gaji_dasar_per_hari) + $this->tunjanganKesehatan;
    }

    // Menampilkan profil spesifik tetap
    public function tampilkan_profil_karyawan() {
        return "
        [KARYAWAN TETAP]<br>
        ID / Nama          : {$this->id_karyawan} / {$this->nama_karyawan}<br>
        Departemen         : {$this->departemen}<br>
        Tunjangan Kesehatan: Rp " . number_format($this->tunjanganKesehatan, 0, ',', '.') . "<br>
        Opsi Saham ID      : {$this->opsiSahamId}<br>
        -------------------------------------------";
    }
}