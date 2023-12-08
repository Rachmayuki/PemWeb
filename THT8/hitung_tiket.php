<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hitung_tiket</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // mengambil nilai dari form
    $filmTersedia = $_POST["filmTersedia"];
    $tiketIndex = $_POST["tiket"];
    $jumlah = $_POST["jumlah"];
    $voucher = $_POST["voucher"];

    // array jenis tiket
    $jenisTiketArray = array(
        array("jenis" => "Reguler (Rp.50.000)", "harga" => 50000),
        array("jenis" => "VIP (Rp.150.000)", "harga" => 150000),
        array("jenis" => "VVIP (Rp.250.000)", "harga" => 250000));

    // menghitung pesanan tiket
    $jenisTiket = $jenisTiketArray[$tiketIndex]["jenis"];
    $hargaPerTiket = $jenisTiketArray[$tiketIndex]["harga"];
    $totalHarga = $jumlah * $hargaPerTiket;
    $diskon = 0; // global scope

    // menggunakan voucher NontonAsik untuk dapat diskon
    if ($voucher === 'NontonAsik') {
        $diskon = 0.1 * $totalHarga;
    }

    $totalPesanan = $totalHarga - $diskon;

    // menampilkan hasil pesanan tiket
    echo "<script>
        document.getElementById('jenisTiket').textContent = '$jenisTiket';
        document.getElementById('jumlahPesanan').textContent = '$jumlah';
        document.getElementById('totalHarga').textContent = '$totalHarga';
        document.getElementById('voucherDiskon').textContent = '$diskon';
        document.getElementById('totalPesanan').textContent = '$totalPesanan';
    </script>";
}
?>
</body>
</html> 