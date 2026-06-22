<?php
// KaryawanTetap.php
require_once 'Karyawan.php';

class KaryawanTetap extends Karyawan {
    // Atribut spesifik tahap 4
    private $tunjanganKesehatan;
    private $opsiSahamId;

    public function __construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, $tunjangan, $opsiSaham) {
        parent::__construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, 'Tetap');
        $this->tunjanganKesehatan = $tunjangan;
        $this->opsiSahamId = $opsiSaham;
    }

    // [POLIMORFISME OVERRIDING] - Logika Bisnis 2: Kehadiran + Tunjangan
    public function hitung_gaji_bersih() {
        return ($this->hari_kerja_masuk * $this->gaji_dasar_per_hari) + $this->tunjanganKesehatan;
    }

    // [POLIMORFISME OVERRIDING]
    public function tampilkan_profil_karyawan() {
        return "
        <b>[KARYAWAN TETAP]</b><br>
        ID / Nama          : {$this->id_karyawan} / {$this->nama_karyawan}<br>
        Departemen         : {$this->departemen}<br>
        Opsi Saham ID      : {$this->opsiSahamId}<br>
        Tunjangan Kesehatan: Rp " . number_format($this->tunjanganKesehatan, 0, ',', '.');
    }
}