<!DOCTYPE html>
<html>
<head>
    <title>Koleksi Buku Perpustakaan</title>
</head>
<body>

    <h1>Koleksi Buku Perpustakaan</h1>

    <h3>Daftar Buku:</h3>

    <ul>
        @foreach ($buku as $item)
            <li>
                <strong>{{ $item['judul'] }}</strong>
                - Pengarang: {{ $item['pengarang'] }}
            </li>
        @endforeach
    </ul>

</body>
</html>