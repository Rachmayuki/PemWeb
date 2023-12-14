<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Registrasi</title>
    <style>
    body{
        background-color: #EEE0C9;
        margin: 0;
        padding: 0;
        color: white;
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    h1{
        text-align: center;
        color: #758467;
    }

    .bagian2{
        margin-left: 400px;
        margin-right: 400px;
        background-color: #758467;
        margin-top: 10px;
        padding: 30px;
        margin-bottom: 30px;
        border-radius: 10px;
    }

    a{
        
        background-color: #EEE0C9;
        padding: 10px 20px;
        text-decoration: none;
        color: #758467;
        border-radius: 5px;
        display: inline-block;
        margin-left: 30px; 
        margin-right: 30px;   
        margin-bottom: 10px;
        margin-top: auto;
    }

    </style>
</head>
<body>

<?php
require_once('registrasi.php');

// deklarasikan variabel untuk pesan hasil registrasi
$registrationMessage = '';

// memeriksa data yang dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // mengambil data dari formulir
    $idAnggota = $_POST['idAnggota'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // objek User baru
    $newAnggota = new registrasi($idAnggota, $nama, $email);

    // proses registrasi
    $registrationMessage = $newAnggota->register();
}
?>
    <h1>Hasil Registrasi</h1>
    <div class = "bagian2">
        <p><?php echo $registrationMessage; ?></p>
        <p><a href="halamanPinjamBuku.php">Peminjaman Buku</a></p>
        <p><a href="halamanKembaliBuku.php">Pengembalian Buku</a></p>
        <p><a href="halamanRegistrasi.php">Kembali</a></p>
    </div>
</body>
</html>


