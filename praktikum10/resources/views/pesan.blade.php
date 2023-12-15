<!-- resources/views/pesan.blade.php -->
<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Pemesanan</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <h1>Form Data</h1>
    <form method="post" action="{{ route('submit-data')}}">
        @csrf
        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" required><br><br>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="provinsi">Provinsi:</label>
        <input type="text" id="provinsi" name="provinsi" required><br><br>
        <label for="kota">Kota:</label>
        <input type="text" id="kota" name="kota" required><br><br>
        <label for="no">Nomor Telpon:</label>
        <input type="text" id="no" name="no" required><br><br>
        <button type="submit">Submit Data</button>
</form>
</body>
</html>
