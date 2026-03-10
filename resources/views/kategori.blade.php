<!DOCTYPE html>
<html>
<head>
    <title>Data Kategori Barang</title>
</head>
<body>
    <h1>Data Kategori Barang</h1>
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Kode Kategori</th>
            <th>Nama Kategori</th>
        </tr>
        @foreach ($kategori as $k)
        <tr>
            <td>{{ $k->kategori_id }}</td>
            <td>{{ $k->kategori_kode }}</td>
            <td>{{ $k->kategori_nama }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
