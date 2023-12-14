<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrasi Anggota</title>
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

        .bagian1{
            margin-left: 350px;
            margin-right: 350px;
            background-color: #758467;
            margin-top: 10px;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>Registrasi Pengguna</h1>
    <div class = "bagian1">
    <form action="halamanProsesRegister.php" method="post">
        <label for="idAnggota">ID Anggota:</label>
        <input type="text" name="idAnggota" id="idAnggota" required><br><br>

        <label for="nama">Nama:</label>
        <input type="nama" name="nama" id="nama" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <input type="submit" value="Registrasi">
    </form>
    </div>
</body>
</html>
