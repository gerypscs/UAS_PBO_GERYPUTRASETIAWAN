<?php
// Karyawan.php

// --- ABSTRACT CLASS (INDUK) ---
abstract class Karyawan {
    // Properti / Atribut Terenkapsulasi (Protected)
    protected $id_karyawan;
    protected $nama_karyawan;
    protected $departemen;
    protected $hari_kerja_masuk;
    protected $gaji_dasar_per_hari;
    protected $jenis_karyawan; // Kolom pembeda dari database

    // Constructor untuk menginisialisasi atribut global
    public function __construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, $jenis) {
        $this->id_karyawan = $id;
        $this->nama_karyawan = $nama;
        $this->departemen = $dept;
        $this->hari_kerja_masuk = $hariMasuk;
        $this->gaji_dasar_per_hari = $gajiPerHari;
        $this->jenis_karyawan = $jenis;
    }

    // --- METODE ABSTRAK (Wajib Diimplementasikan Tanpa Body di Sini) ---
    abstract public function hitung_gaji_bersih();
    abstract public function tampilkan_profil_karyawan();
}


// --- CLASS ANAK 1: Karyawan Tetap ---
class KaryawanTetap extends Karyawan {
    private $tunjangan_kesehatan;
    private $opsi_saham_id;

    public function __construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, $tunjangan, $opsiSahamId) {
        parent::__construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, 'Tetap');
        $this->tunjangan_kesehatan = $tunjangan;
        $this->opsi_saham_id = $opsiSahamId;
    }

    // Implementasi metode abstrak hitung_gaji_bersih
    public function hitung_gaji_bersih() {
        return ($this->hari_kerja_masuk * $this->gaji_dasar_per_hari) + $this->tunjangan_kesehatan;
    }

    // Implementasi metode abstrak tampilkan_profil_karyawan
    public function tampilkan_profil_karyawan() {
        return "ID: {$this->id_karyawan} | Nama: {$this->nama_karyawan} | Dept: {$this->departemen} | Status: {$this->jenis_karyawan} (Saham ID: {$this->opsi_saham_id})";
    }
}


// --- CLASS ANAK 2: Karyawan Kontrak ---
class KaryawanKontrak extends Karyawan {
    private $durasi_kontrak_bulan;
    private $agensi_penyalur;

    public function __construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, $durasi, $agensi) {
        parent::__construct($id, $nama, $dept, $hariMasuk, $gajiPerHari, 'Kontrak');
        $this->durasi_kontrak_bulan = $durasi;
        $this->agensi_penyalur = $agensi;
    }

    public function hitung_gaji_bersih() {
        return ($this->hari_kerja_masuk * $this->gaji_dasar_per_hari);
    }

    public function tampilkan_profil_karyawan() {
        return "ID: {$this->id_karyawan} | Nama: {$this->nama_karyawan} | Dept: {$this->departemen} | Status: {$this->jenis_karyawan} (Agensi: {$this->agensi_penyalur})";
    }
}


// --- CLASS ANAK 3: Karyawan Magang ---
class KaryawanMagang extends Karyawan {
    private $uang_saku_bulanan;
    private $sertifikat_kampus_merdeka;

    public function __construct($id, $nama, $dept, $hariMasuk, $uangSaku, $sertifikat) {
        // Gaji dasar di-set 0 karena magang murni menggunakan uang saku bulanan
        parent::__construct($id, $nama, $dept, $hariMasuk, 0, 'Magang');
        $this->uang_saku_bulanan = $uangSaku;
        $this->sertifikat_kampus_merdeka = $sertifikat;
    }

    public function hitung_gaji_bersih() {
        // Logika: Jika masuk minimal 20 hari dapat penuh, jika kurang dihitung proporsional
        if ($this->hari_kerja_masuk >= 20) {
            return $this->uang_saku_bulanan;
        } else {
            return ($this->hari_kerja_masuk / 20) * $this->uang_saku_bulanan;
        }
    }

    public function tampilkan_profil_karyawan() {
        return "ID: {$this->id_karyawan} | Nama: {$this->nama_karyawan} | Dept: {$this->departemen} | Status: {$this->jenis_karyawan} (Program: {$this->sertifikat_kampus_merdeka})";
    }
}