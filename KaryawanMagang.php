<?php
// KaryawanMagang.php

require_once 'Karyawan.php'; // Memastikan class induk dimuat

class KaryawanMagang extends Karyawan {
    // Properti tambahan spesifik Karyawan Magang
    private $uangSakuBulanan;
    private $sertifikatKampusMerdeka;

    public function __construct($id, $nama, $dept, $hariMasuk, $uangSaku, $sertifikat) {
        // Gaji dasar per hari diset 0 karena magang dibayar bulanan lewat uang saku
        parent::__construct($id, $nama, $dept, $hariMasuk, 0, 'Magang');
        $this->uangSakuBulanan = $uangSaku;
        $this->sertifikatKampusMerdeka = $sertifikat;
    }

    // Perhitungan gaji: Proporsional berdasarkan kehadiran (asumsi batas full 20 hari)
    public function hitung_gaji_bersih() {
        if ($this->hari_kerja_masuk >= 20) {
            return $this->uangSakuBulanan;
        } else {
            return ($this->hari_kerja_masuk / 20) * $this->uangSakuBulanan;
        }
    }

    // Menampilkan profil spesifik magang
    public function tampilkan_profil_karyawan() {
        return "
        [KARYAWAN MAGANG]<br>
        ID / Nama       : {$this->id_karyawan} / {$this->nama_karyawan}<br>
        Departemen      : {$this->departemen}<br>
        Sertifikat KM   : {$this->sertifikatKampusMerdeka}<br>
        Uang Saku / bln : Rp " . number_format($this->uangSakuBulanan, 0, ',', '.') . "<br>
        -------------------------------------------";
    }
}