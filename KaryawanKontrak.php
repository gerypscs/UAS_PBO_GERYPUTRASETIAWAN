<?php
// KaryawanKontrak.php
require_once 'Karyawan.php';

class KaryawanKontrak extends Karyawan {
    // Atribut spesifik tahap 4
    private $durasiKontrakBulan;
    private $agensiPenyalur;

    public function __construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, $durasiKontrak, $agensi) {
        parent::__construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, 'Kontrak');
        $this->durasiKontrakBulan = $durasiKontrak;
        $this->agensiPenyalur = $agensi;
    }

    // [POLIMORFISME OVERRIDING] - Logika Bisnis 1: Murni Kehadiran
    public function hitung_gaji_bersih() {
        return $this->hari_kerja_masuk * $this->gaji_dasar_per_hari;
    }

    // [POLIMORFISME OVERRIDING]
    public function tampilkan_profil_karyawan() {
        return "
        <b>[KARYAWAN KONTRAK]</b><br>
        ID / Nama       : {$this->id_karyawan} / {$this->nama_karyawan}<br>
        Departemen      : {$this->departemen}<br>
        Durasi Kontrak  : {$this->durasiKontrakBulan} Bulan<br>
        Agensi Penyalur : {$this->agensiPenyalur}";
    }
}