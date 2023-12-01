<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    if (isset($_POST['nilai'])) {
        $jumlah_matkul = count($_POST['nilai']); // Menghitung jumlah mata kuliah
        // var_dump($_POST['nilai']);
        // Menghitung total nilai dan total kredit
        $total_nilai = 0;
        $total_kredit = 0;

        for ($i = 0; $i < $jumlah_matkul; $i++) {
            $total_nilai += $_POST['nilai'][$i];
            $total_kredit++;
        }

        // Menghitung IPK
        $IPK = $total_nilai / $total_kredit;

        // Menampilkan hasil IPK
        echo "<h3>Hasil Perhitungan IPK:</h3>";
        echo "Total Nilai: " . number_format($total_nilai, 2) . "<br>";
        echo "Jumlah Mata Kuliah yang Diambil: " . number_format($total_kredit, 2) . "<br>";
        echo "IPK: " . number_format($IPK, 2) . "<br>";

        if ($IPK>=35.0){
            echo "Status Kelulusan : LULUS";
        }
        else{
            echo "Status Kelulusan : TIDAK LULUS";
        }
    }
?>
    <br><br>
    <a href="http://localhost/prak8/index.html">Kembali</a>
</body>
</html>