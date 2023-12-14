<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peminjaman Buku</title>
    <style>
    body{
        background-color: #EEE0C9;
        margin: 0;
        padding: 0;
        color: #758467;
        font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    h1{
        text-align: center;
    }

    a{
        text-align: left;
        text-decoration: none;
        color: white;
        margin-left: 10px;
        padding-right: 8px;
    }

    .content{
        display: flex;
        flex-direction: row;
        flex: 1;
    }

    .gallery{
        margin-left: 25px;
        margin-right: 0px;
    }

    .gallery a img{
        margin: 4px;
        width: 263px;
        height: 420px;
    }
    
    .gallery img{
        width: 100%;
        height: auto;
    }
    
    .desc{
        padding: 5px;
        text-align: center;
    }

    a{
        background-color: #EEE0C9;
        text-decoration: none;
        color: #758467;
        border-radius: 5px;
        display: inline-block;
        margin-left: 20px; 
        margin-right: 20px;   
        margin-bottom: 5px;
        margin-top: auto;
    }

    .bagian3{
        margin-left: 100px;
        margin-right: 100px;
        background-color: #758467;
        margin-top: 10px;
        padding: 2px;
        margin-bottom: 40px;
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

    .hasil{
        margin-left: 100px;
        margin-right: 100px;
        background-color: #758467;
        margin-top: 5px;
        padding: 2px;
        margin-bottom: 30px;
        border-radius: 10px;
        color: white;
    }

    p{
        text-align: center;
    }
    </style>
</head>
<body>

<?php
// menyertakan file pinjamBuku.php
require_once('pinjamBuku.php');

// menginisialisasi buku di perpustakaan
$buku1 = new pinjamBuku('Laut Bercerita', 'Leila S. Chudori');
$buku2 = new pinjamBuku('Bulan', 'Tere Liye');
$buku3 = new pinjamBuku('Gadis Kretek', 'Ratih Kumala');

// mendeklarasikan variabel untuk pesan hasil peminjaman atau pengembalian buku
$pesan = '';

// memeriksa apakah data telah dikirim melalui metode GET (untuk tindakan peminjaman atau pengembalian buku)
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['action']) && isset($_GET['buku'])) {
        $action = $_GET['action'];
        $buku = $_GET['buku'];

        // memeriksa buku yang dipilih
        switch ($buku) {
            case 'buku1':
                $pesan = ($action == 'peminjaman') ? $buku1->peminjaman() : $buku1->peminjaman();
                break;
            case 'buku2':
                $pesan = ($action == 'peminjaman') ? $buku2->peminjaman() : $buku2->peminjaman();
                break;
            case 'buku3':
                $pesan = ($action == 'peminjaman') ? $buku3->peminjaman() : $buku3->peminjaman();
                break;
            default:
                $pesan = 'Tidak Ada Buku';
                break;
        }
    }
}
?>
    <h1>Peminjaman Buku</h1>
        <div class="content">
            <div class="gallery">
                <a target="_blank" href="https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.jpg">
                    <img src="https://cdn.gramedia.com/uploads/items/9786024246945_Laut-Bercerita.jpg" alt="Laut Bercerita" width= "280" height= "160px">
                </a>
                <div class="desc">Laut Bercerita oleh Leila S. Chudori
                    <div class = "bagian3">
                    <?php echo ($buku1->ketersediaan()) ? 'Tersedia' : 'Tidak Tersedia'; ?><br>
                    <a href="?action=peminjaman&buku=buku1">Pinjam</a><br></div>
                </div>
                
            </div>
                  
            <div class="gallery">
                <a target="_blank" href="https://cdn.gramedia.com/uploads/items/img20220905_11324048.jpg">
                    <img src="https://cdn.gramedia.com/uploads/items/img20220905_11324048.jpg" alt="Bulan" width= "280" height= "160px">
                </a>
                <div class="desc">Bulan oleh Tere Liye
                <div class = "bagian3">
                <?php echo ($buku2->ketersediaan()) ? 'Tersedia' : 'Tidak Tersedia'; ?><br>
                <a href="?action=peminjaman&buku=buku2">Pinjam</a><br></div>
                </div>
            </div>
          
            <div class="gallery">
                <a target="_blank" href="https://cdn.gramedia.com/uploads/items/9789792281415_Gadis_Kretek_.jpg">
                    <img src="https://cdn.gramedia.com/uploads/items/9789792281415_Gadis_Kretek_.jpg" alt="Gadis Kretek" width= "280" height= "160px">
                </a>
                <div class="desc">Gadis Kretek oleh Ratih Kumala
                <div class = "bagian3">
                <?php echo ($buku3->ketersediaan()) ? 'Tersedia' : 'Tidak Tersedia'; ?><br>
                <a href="?action=peminjaman&buku=buku3">Pinjam</a><br>
                </div>
            </div> 
        </div>
    </div>

    <!-- menampilkan pesan hasil peminjaman atau pengembalian -->
    <div class = "hasil">
        <p><?php echo $pesan; ?></p>
        <p><a href="halamanProsesRegister.php">Kembali</a></p>
    </div>
</body>
</html>
