<?php
// KaryawanMagang.php
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    // Atribut spesifik tahap 4
    private $uangSakuBulanan; 
    private $sertifikatKampusMerdeka;

    public function __construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, $sertifikat) {
        // Menerima parameter plafon harian ($gajiPerHari) sesuai kebutuhan logika bisnis baru
        parent::__construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, 'Magang');
        $this->sertifikatKampusMerdeka = $sertifikat;
    }

    // [POLIMORFISME OVERRIDING] - Logika Bisnis 3: Potongan Upah 20% (Dikali 0.80)
    public function hitung_gaji_bersih() {
        $gajiKotor = $this->hari_kerja_masuk * $this->gaji_dasar_per_hari;
        return $gajiKotor * 0.80;
    }

    // [POLIMORFISME OVERRIDING]
    public function tampilkan_profil_karyawan() {
        return "
        <b>[KARYAWAN MAGANG]</b><br>
        ID / Nama       : {$this->id_karyawan} / {$this->nama_karyawan}<br>
        Departemen      : {$this->departemen}<br>
        Program MSIB    : {$this->sertifikatKampusMerdeka}<br>
        Plafon Harian   : Rp " . number_format($this->gaji_dasar_per_hari, 0, ',', '.') . " (Dikenakan potongan orientasi 20%)";
    }
}