<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color: #EEE0C9;
            margin: 0;
            padding: 0;
            color: white;
            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
            
        h1.tiket{
            text-align: center;
            color: #758467;
        }
            
        .grid-container{
            display: grid;
            grid-template-areas:
              'header header'
              'menu menu'
              'main nav'
              'input input';
              grid-template-columns: 0.4fr 0.8fr;
              grid-template-rows: 0.1fr 0.3fr 0.8fr 0.2fr;
              padding: 5px;
              border: 3px rgb(232, 219, 199);
        }
            
        .grid-container > div{
            padding: 10px 0;
            background-color: #758467;
        }
            
        .footer1{
            margin-left: 200px;
            margin-right: 200px;
            background-color: #758467;
            margin-bottom: 10px;
            padding: 30px;
            border-radius: 10px;
        }
            
        .footer2{
            margin-left: 200px;
            margin-right: 200px;
            background-color: #758467;
            margin-top: 10px;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 10px;
        }
        </style>
        <title>PopCorn Film</title>
    </head>

    <body>
        <div class="grid-container"></div>
        <h1 class="tiket">PEMESANAN TIKET</h1>
        <div class="footer1">
            <p><b>Diskon 10% tiket nonton periode 3-28 Desember 2023 menggunakan voucher NontonAsik</b></p>
            <form action="/action_page.php" method="get" onsubmit="hitungPesanan(); return false">
                <label for="tiketAvailable">Tersedia Film</label>
                <select id="filmTersedia">
                    <option value="film">Petualangan Sherina</option>
                    <option value="film">Barbie</option>
                    <option value="film">SawX</option>
                    <option value="film">No More Bets</option>
                </select><br><br>
                <label for="daftarTiket">Jenis Tiket:</label>
                <select id="tiket">
                    <option value="0">Reguler (Rp.50.000)</option>
                    <option value="1">VIP (Rp.150.000)</option>
                    <option value="2">VVIP (Rp.250.000)</option>
                </select><br><br>
                <label for="jumlah">Jumlah:</label>
                <input type="text" id="jumlah" style="width: 200px; height: 20px;"><br><br>
                <label for="voucher">Voucher(NontonAsik):</label>
                <input type="text" id="voucher" style="width: 200px; height: 20px;"><br>
                <br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="footer2">
            <table>
                <tr>
                    <td>Jenis Pesanan Tiket : </td>
                    <td id="jenisTiket"></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan : </td>
                    <td id="jumlahPesanan"></td>
                </tr>
                <tr>
                    <td>Total Harga Sebelum Diskon : </td>
                    <td id="totalHarga"></td>
                </tr>
                <tr>
                    <td>Total Diskon : </td>
                    <td id="voucherDiskon"></td>
                </tr>
                <tr>
                    <td>Total Harga : </td>
                    <td id="totalPesanan"></td>
                </tr>
            </table>
        </div>
        </div>
    </body>
    <script>
        // Buat array untuk jenis tiket
        var jenisTiketArray = new Array(
            {jenis: "Reguler (Rp.50.000)", harga: 50000},
            {jenis: "VIP (Rp.150.000)", harga: 150000},
            {jenis: "VVIP (Rp.250.000)", harga: 250000}
        );

        function hitungPesanan() {
            var pilihTiket = document.getElementById('tiket');
            var tiketIndex = pilihTiket.value;
            var jenisTiket = jenisTiketArray[tiketIndex].jenis;

            var jumlah = parseInt(document.getElementById('jumlah').value);
            var voucher = document.getElementById('voucher').value;

            var hargaPerTiket = jenisTiketArray[tiketIndex].harga;

            var totalHarga = jumlah * hargaPerTiket;

            var diskon = 0;
            if (voucher === 'NontonAsik') {
                diskon = 0.1 * totalHarga;
            }

            var totalPesanan = totalHarga - diskon;

            document.getElementById('jenisTiket').textContent = jenisTiket;
            document.getElementById('jumlahPesanan').textContent = jumlah;
            document.getElementById('totalHarga').textContent = totalHarga;
            document.getElementById('voucherDiskon').textContent = diskon;
            document.getElementById('totalPesanan').textContent = totalPesanan;
        }
    </script>
    </html>
