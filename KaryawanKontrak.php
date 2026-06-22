<?php
// KaryawanKontrak.php

require_once 'Karyawan.php'; // Memastikan class induk dimuat

class KaryawanKontrak extends Karyawan {
    // Properti tambahan spesifik Karyawan Kontrak
    private $durasiKontrakBulan;
    private $agensiPenyalur;

    public function __construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, $durasiKontrak, $agensi) {
        // Mengirimkan data global ke constructor milik parent class (Karyawan)
        parent::__construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, 'Kontrak');
        $this->durasiKontrakBulan = $durasiKontrak;
        $this->agensiPenyalur = $agensi;
    }

    // Perhitungan gaji: Hari Kerja x Gaji Harian
    public function hitung_gaji_bersih() {
        return $this->hari_kerja_masuk * $this->gaji_dasar_per_hari;
    }

    // Menampilkan profil spesifik kontrak
    public function tampilkan_profil_karyawan() {
        return "
        [KARYAWAN KONTRAK]<br>
        ID / Nama       : {$this->id_karyawan} / {$this->nama_karyawan}<br>
        Departemen      : {$this->departemen}<br>
        Durasi Kontrak  : {$this->durasiKontrakBulan} Bulan<br>
        Agensi Penyalur : {$this->agensiPenyalur}<br>
        -------------------------------------------";
    }
}