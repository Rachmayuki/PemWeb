<?php
class kembaliBuku {
    private $judul;
    private $penulis;
    private $ketersediaan;

    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->ketersediaan = true; // Buku dianggap tersedia saat pertama kali dibuat
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function ketersediaan() {
        return $this->ketersediaan;
    }

    public function pengembalian() {
        $this->ketersediaan = true;
        return "<center> Buku '{$this->judul}' telah dikembalikan";
    }
}