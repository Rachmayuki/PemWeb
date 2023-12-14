<?php
class pinjamBuku {
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

    public function peminjaman() {
        if ($this->ketersediaan) {
            $this->ketersediaan = false;
            return "<center> Buku '{$this->judul}' telah dipinjam";
        } else {
            return "<center> Maaf, buku '{$this->judul}' sedang tidak tersedia";
        }
    }
}
?>
