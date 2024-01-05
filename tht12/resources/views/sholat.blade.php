<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 105221016_Rachmayuki Rohairunnisa -->
    <style>
        body {
            background-image : url("https://wallup.net/wp-content/uploads/2015/12/232694-nature-landscape-mist-sunrise-temple-architecture-clouds.jpg");
            background-size: cover;
            font-family: Arial, sans-serif;
        }
        th {
            padding:10px;
        }
        td {
            padding:10px;
        }
        h1{
            text-align: center;
        }
    </style>
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <table>
        <tr>
            <th>Tanggal</th>
            <th>Imsyak</th>
            <th>Subuh</th>
            <th>Dzuhur</th>
            <th>Ashar</th>
            <th>Maghrib</th>
            <th>Isya</th>
        </tr>
        @foreach($data as $d)
            <tr>
                <td>{{ $d['tanggal'] }}</td>
                <td>{{ $d['imsyak'] }}</td>
                <td>{{ $d['shubuh'] }}</td>
                <td>{{ $d['dzuhur'] }}</td>
                <td>{{ $d['ashr'] }}</td>
                <td>{{ $d['magrib'] }}</td>
                <td>{{ $d['isya'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>