<?php
class registrasi {
    private $idAnggota;
    private $nama;
    private $email;

    public function __construct($idAnggota, $nama, $email) {
        $this->idAnggota = $idAnggota;
        $this->nama = $nama;
        $this->email = $email;
    }

    public function getIdAnggota() {
        return $this->idAnggota;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setIdAnggota() {
        $this->idAnggota = $idAnggota;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function register() {
        return "<center> Registrasi Berhasil!! <br> Selamat Datang $this->nama";
    }
}
?>
